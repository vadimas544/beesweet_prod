<?php

namespace  frontend\controllers;

use frontend\models\Cart;
use frontend\models\Product;
use yii\web\Controller;
use Yii;
class CartController extends Controller
{
    public function actionAdd()
    {
        $id = Yii::$app->request->get('id');

        $product = Product::findOne($id);
        if(empty($product)) return false;
        //debug($product);
        /*Put our goods into session*/
        $session = Yii::$app->session;
        $session->open();

        $cart = new Cart();
        $cart->addToCart($product);
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
}