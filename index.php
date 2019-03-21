<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Tienda Virtual</title>
        
        <!--Hoja de estilos-->
        <link rel="stylesheet" href="assets/css/styles.css">
        
    </head>
    <body>
        <!--Cabecera-->
        <header id="header">
            <div id="logo">
                <img src="assets/img/camiseta.png" alt="Camiseta Logo">
                <a href="index.php">
                    Tienda de Camisetas                    
                </a>
            </div>
        </header>
        
        <!--Menú-->
        <nav id="menu">
            <ul>
                <li>
                    <a href="#">Inicio</a>
                </li>
                <li>
                    <a href="#">Categoria 1</a>
                </li>
                <li>
                    <a href="#">Categoria 2</a>
                </li>
                <li>
                    <a href="#">Categoria 3</a>
                </li>
                <li>
                    <a href="#">Categoria 4</a>
                </li>
            </ul>
            
        </nav>
        
        <div id="content">
        <!--Barra Lateral-->
        <aside id="laterla">
            
            <div id="login" class="block_aside">
                
                <form action="" method="POST">
                    <label for="email">Email</label>
                    <input type="email" name="email">
                    
                    <label for="password">Contraseña</label>
                    <input type="password" name="password">
                    
                    <input type="submit" value="Enviar">
                    
                </form>
                
                <a href="#">Mis pedidos</a>
                <a href="#">Gestionar Pedidos</a>
                <a href="#">Gestionar Categorias</a>
                
                
            </div>
            
        </aside>
        
        <!--Contenido central-->
        <div id="central">
            
            <div class="product">
                <img src="assets/img/camiseta.png">
                <h2>Camiseta Azul</h2>
                <p>30.000 CLP</p>
                <a href="">Comprar</a>
            </div>
            <div class="product">
                <img src="assets/img/camiseta.png">
                <h2>Camiseta Azul</h2>
                <p>30.000 CLP</p>
                <a href="">Comprar</a>
            </div>
            <div class="product">
                <img src="assets/img/camiseta.png">
                <h2>Camiseta Azul</h2>
                <p>30.000 CLP</p>
                <a href="">Comprar</a>
            </div>
            
        </div>
        
        
        </div>
        
        <!--Pie de pagina-->
        <footer id="footer">
            <p>Desarrollado por Erick Oyarce &copy; <?=date('y')?></p>
            
        </footer>
        
    </body>
</html>
