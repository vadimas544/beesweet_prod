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

		$hits = Product::find()->where(['is_popular' => '1'])->limit(6)->all();

		return $this->render('view', compact('product', 'hits'));
	}

}