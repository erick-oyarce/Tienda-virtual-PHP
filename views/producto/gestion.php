<h1>Gestión de Productos</h1>

<!-- Sesiones al crear un producto -->
<?php if(isset($_SESSION['producto']) && $_SESSION['producto'] == 'complete'):?>
    <div class="alerta">El producto guardado correctamente</div>

<?php elseif(isset($_SESSION['prodcuto']) && $_SESSION['producto'] == 'failed'): ?>
    <div class="alerta alerta-error">Error al guardar el producto</div>
    
<?php endif; ?>
<?php Utils::deleteSession('producto')?>
    
<!-- Sesiones al eliminar un producto -->
<?php if(isset($_SESSION['delete']) && $_SESSION['delete'] == 'complete'):?>
    <div class="alerta">Producto eliminado correctamente</div>

<?php elseif(isset($_SESSION['delete']) && $_SESSION['delete'] == 'failed'): ?>
    <div class="alerta alerta-error">Error al eliminar el producto</div>
    
<?php endif; ?>
<?php Utils::deleteSession('delete')?>

<a href="<?=base_url?>producto/crear" class="button button-small">crear producto</a>

<table>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Stock</th>
        <th>Acciones</th>
    </tr>
    
<?php while($pro = $productos->fetch_object()):?>
    <tr>
        <td><?=$pro->id;?></td>
        <td><?=$pro->nombre;?></td>
        <td><?=$pro->precio;?></td>
        <td><?=$pro->stock;?></td>
        <td>            
            <a href="<?=base_url?>producto/editar&id=<?=$pro->id?>" class="button button-green">Editar</a>
            <a href="<?=base_url?>producto/eliminar&id=<?=$pro->id?>" class="button button-red">Eliminar</a>
        </td>
    </tr>
<?php endwhile; ?>
</table>
