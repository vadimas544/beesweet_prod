<?php

namespace frontend\controllers;

use yii\base\Controller;
use frontend\models\Category;
use frontend\models\Product;
use Yii;

/**
 * 
 */
class ProductController extends Controller
{
	
	public function actionView()
	{
		$id = Yii::$app->request->get('id');
		

		$product = Product::find()->where(['id' => $id])->one();
		/*
		if(empty($product)){
			throw new \yii\web\HttpException(404, 'Такого товара нет!!!');
		}
		*/

		return $this->render('view', compact('product'));	
	}

}