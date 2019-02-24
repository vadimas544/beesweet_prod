<?php if(!empty($session['cart'])) :?>
    <div class="table-responsive">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>Фото</th>
                    <th>Наименование</th>
                    <th>Цена</th>
                    <th>К-во</th>
                    <th><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($session['cart'] as $id => $item) :?>
                    <tr>
                        <td><?= $item['img']?></td>
                        <td><?= $item['name']?></td>
                        <td><?= $item['price']?></td>
                        <td><?= $item['qty']?></td>
                        <td><span data-id="<?=$id?>" class="glyphicon glyphicon-remove text-danger del-item" aria-hidden="true"></span></td>
                    </tr>
                <?php endforeach; ?>
                    <tr>
                        <td colspan="4">Итого: </td>
                        <td><?= $_SESSION['cart.qty']  ?></td>
                    </tr>
                <tr>
                    <td colspan="4">На сумму: </td>
                    <td><?= $_SESSION['cart.sum']  ?></td>
                </tr>
            </tbody>
        </table>
    </div>
<?php else:?>
    <h1>Ваша корзина пуста</h1>
<?php endif; ?>
