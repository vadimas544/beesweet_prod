<?php

namespace common\widgets;

use yii\base\Widget;
use frontend\models\Category;
use Yii;

class MenuWidget extends Widget
{
	public $tpl;
	public $data;
	public $tree;
	public $menuHtml;

	public function init()
	{
		parent::init();
		if( $this->tpl === null){
			$this->tpl = 'menu';
		}
		$this->tpl.= '.php';
	}

	public function run()
	{
		//Check if we have in cache our menu . Get cache

		$menu = Yii::$app->cache->get('menu');
		if( $menu ) return $menu;


		$this->data = Category::find()->indexBy('id')->asArray()->all();
		$this->tree = $this->getTree();
		$this->menuHtml = $this->getMenuHtml($this->tree);

		//set cache

		Yii::$app->cache->set('menu', $this->menuHtml, 60);
		//debug($this->data);
		return $this->menuHtml;
	}

	public function getTree()
	{
		$tree = [];

		foreach($this->data as $id => &$node){
			if (!$node['parent_id'])
				$tree[$id] = &$node;
			else 
				$this->data[$node['parent_id']]['childs'][$node['id']] = &$node;
		}
		return $tree;
	}

	public function getMenuHtml($tree)
	{
		$str = '';
		foreach ($tree as $category) {
			$str.= $this->catToTemplate($category);
		}
		return $str;
	}

	public function catToTemplate($category)
	{
		ob_start();
		include __DIR__ . '/menu_tpl/' . $this->tpl;
		return ob_get_clean();
	}
}