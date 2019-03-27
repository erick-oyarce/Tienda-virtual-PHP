<?php if (isset($pro)): ?>
    <h1><?= $pro->nombre ?></h1>
    <div class="detail-product">
        <div id="imagen">
            <?php if ($pro->imagen != null): ?>
                <img src="<?= base_url ?>uploads/images/<?= $pro->imagen ?>">
            <?php else: ?>
                <img src="<?= base_url ?>assets/img/camiseta.png">

            <?php endif; ?>
        </div>
        <div id="detalle">
            <p><?= $pro->descripcion ?></p>
            <p><?= $pro->precio ?></p>
            <a href="" class="button">Comprar</a>
        </div>
    </div>


<?php else: ?>
    <h1>El producto no existe</h1>
<?php endif; ?>
