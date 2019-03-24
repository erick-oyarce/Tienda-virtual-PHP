<h1>Registrarse</h1>

<?php
if(isset($_SESSION['register']) && $_SESSION['register'] == 'complete'):?>
<div class="alerta">Registro completado correctamente</div>
<?php elseif(isset($_SESSION['register']) && $_SESSION['register'] == 'failed'): ?>
    <div class="alerta alerta-error">Registro Fallido</div>
<?php endif; ?>
    
<?php Utils::deleteSession('register')?>

<form action="<?=base_url?>usuario/save" method="post">
    
    <label for="nombre">Nombre</label>
    <input name="nombre" type="text" required>
     <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre') : ''; ?>
    
    <label for="apellidos">Apellidos</label>
    <input name="apellidos" type="text" required>
     <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellidos') : ''; ?>
    
    <label for="email">Email</label>
    <input name="email" type="email" required>
     <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email') : ''; ?>
    
    <label for="password">Contraseña</label>
    <input name="password" type="password" required>
    <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'password') : ''; ?>
    
    <input type="submit" value="Registrar">
    
</form>
<?php Utils::deleteSession('errores')?>