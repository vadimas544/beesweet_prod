<?php

namespace  frontend\controllers;

use frontend\models\Cart;
use frontend\models\Order;
use frontend\models\OrderItems;
use frontend\models\Product;
use yii\web\Controller;
use Yii;

class CartController extends Controller
{
    public function actionAdd()
    {
        $id = Yii::$app->request->get('id');
        $qty = (int)Yii::$app->request->get('qty');

        $qty = !$qty ? 1 : $qty;
        $product = Product::findOne($id);
        if(empty($product)) return false;
        //debug($product);
        /*Put our goods into session*/
        $session = Yii::$app->session;
        $session->open();

        $cart = new Cart();
        $cart->addToCart($product, $qty);
        if( !Yii::$app->request->isAjax ){
            return $this->redirect(Yii::$app->request->referrer);
        }
        $this->layout = false;
//        debug($session['cart']);
//        debug($session['cart.qty']);
//        debug($session['cart.sum']);
        return $this->render('cart-modal', compact('session'));
    }

    public function actionClear(){
        $session = Yii::$app->session;
        $session->open();
        $session->remove('cart');
        $session->remove('cart.qty');
        $session->remove('cart.sum');
        $this->layout = false;
        return $this->render('cart-modal', compact('session'));
    }

    public function actionDelItem()
    {
        $id = Yii::$app->request->get('id');
        $session = Yii::$app->session;
        $session->open();
        $cart = new Cart();
        $cart->recalc($id);
        $this->layout = false;
        return $this->render('cart-modal', compact('session'));
    }

    public function actionShow(){
        $session = Yii::$app->session;
        $session->open();
        $this->layout = false;
        return $this->render('cart-modal', compact('session'));
    }

    public function actionView()
    {
        $session = Yii::$app->session;
        $session->open();

        $order = new Order();
        return $this->render('view', compact('session', 'order'));

        //$this->setMeta('Cart');
        /*Create a model of our order*/
        $order = new Order();
        /*Receive data from form in view*/
        if( $order->load(Yii::$app->request->post()) ){
            /*Name, email, phone we take from the form, but we need also qty, and sum*/
            $order->qty = $session['cart.qty'];
            $order->sum = $session['cart.sum'];
                /*Also we need the fields updated_at, created_at and take this into behaviors in Yii*/
                    /*Now we need to save our order, then take a id of order, and then we need to save into table order_items a row with this id*/
                    if( $order->save() ){
                        /*Now we need save to order_items*/
                        $this->saveOrderItem($session['cart'], $order->id);
                        
                        Yii::$app->mailer->compose('order', ['session' => $session])
                            ->setFrom('vadim123544@gmail.com')
                            ->setTo($order->email)
                            ->setSubject('Order')
                            ->send();
                        Yii::$app->session->setFlash('success', 'Ваш заказ принят, менеджер вскоре свяжется с вами');
                        $session->remove('cart');
                        $session->remove('cart.qty');
                        $session->remove('cart.sum');
                        return $this->refresh();
                    } else {
                        Yii::$app->session->setFlash('error', 'Ошибка оформления заказа');
                        /*And if all good redirect a page*/
                        
                    }

            // print_r(Yii::$app->request->post());
        }

        return $this->render('view', compact('session', 'order'));
    }

    /*Now we need to save our order, then take a id of order, and then we need to save into table order_items a row with this id*/
    //$item - cart
    //$order_id - id of this order
    protected function saveOrderItem($items, $order_id){
        //$items - our cart(array)
        //$id - id of product
        //$item - all fields of order
        foreach ($items as $id => $item) {
            //Create an object of OrderItems Model , and if we use ActiveRecord we need to work with this in foreach loop, because for any row of our table ActiveRecord create new object
            $order_items = new OrderItems();

            $order_items->order_id = $order_id;
            $order_items->product_id = $id;
            $order_items->name = $item['name'];
            $order_items->price = $item['price'];
            $order_items->qty_item = $item['qty'];
            $order_items->sum_item = $item['qty']*$item['price'];
            $order_items->save();
        }
    }
}