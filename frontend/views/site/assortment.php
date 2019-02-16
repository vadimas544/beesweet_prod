<?php

use common\widgets\MenuWidget;
?>
<div class="text-center">
    Ассортимент

</div>
<ul class="catalog">
<?= MenuWidget::widget(['tpl' => 'menu'])  ?>
</ul>