

<?php if ($categoria): ?>
    <h1><?= $categoria->nombre ?></h1>
    <?php if ($productos->num_rows == 0): ?>
        <p>No hay productos para mostrar en ésta categoría</p>
    <?php else: ?>


        <?php while ($product = $productos->fetch_object()): ?>
            <div class="product">
                <a href="<?= base_url ?>producto/ver&id=<?=$product->id ?>">
                    <?php if ($product->imagen != null): ?>
                        <img src="<?= base_url ?>uploads/images/<?= $product->imagen ?>">
                    <?php else: ?>
                        <img src="<?= base_url ?>assets/img/camiseta.png">

                    <?php endif; ?>
                    <h2><?= $product->nombre ?></h2>
                </a>
                <p>$<?= $product->precio ?></p>
                <a href="" class="button">Comprar</a>
            </div>



        <?php endwhile; ?>
    <?php endif; ?>
<?php else : ?>
    <h1>No la categoria categoria</h1>
<?php endif; ?>


