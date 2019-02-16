<?php

use common\widgets\MenuWidget;
?>
<div class="text-center">
    Ассортимент

</div class="row">
	<div class="col-lg-3">
		<ul class="catalog category-products">
		<?= MenuWidget::widget(['tpl' => 'menu'])  ?>
		</ul>		
	</div>
</div>