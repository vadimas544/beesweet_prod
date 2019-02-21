<?php

namespace frontend\controllers;

use yii\base\Controller;
use frontend\models\Category;
use frontend\models\Product;
use yii\data\Pagination;
use Yii;

class CategoryController extends Controller
{
	public function actionIndex()
	{
		$pop = Product::find()->all();
		$count = Product::find()->count();
		

		return $this->render('index', compact('pop', 'count'));
	}

	public function actionView()
	{
		$id = Yii::$app->request->get('id');
		//debug($id);
		//$products = Product::find()->where(['category_id' => $id])->all();
		$query = Product::find()->where(['category_id' => $id]);
		$pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 3, 'forcePageParam' => false, 'pageSizeParam' => false]);

		$products = $query->offset($pages->offset)->limit($pages->limit)->all();

		return $this->render('view', compact('products', 'pages'));
		
	}


}