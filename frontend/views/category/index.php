<?php

use common\widgets\MenuWidget;
use yii\helpers\Html;
?>
<div class="container">


</div class="row">
	<div class="col-lg-3 sidebar-category">
		<ul class="catalog category-products">
		<?= MenuWidget::widget(['tpl' => 'menu'])  ?>
		</ul>		
	</div>
	<div class="col-lg-9">
			<h2 class="text-center">Товары</h2>
			<?php foreach($pop as $p) :?>

			<table class="table" width="70%">
				<tr>
				    <?php 
    				if($count % 2 == 0) {
    			echo '</tr><tr>';
    				}
                    echo '<td>'.$p->name;
                     Html::img("@web/{$p->img}", ['alt' => $p->name]) ?>
                    <div>
						<a href=""><?php $p->name ?></a>
					</div>
                    </td></tr>
			</table>
			<?php endforeach; ?>	
	</div>
</div>
</div>
			


