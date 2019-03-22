<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Tienda Virtual</title>

        <!--Hoja de estilos-->
        <link rel="stylesheet" href="assets/css/styles.css">

    </head>
    <body>
        <div id="container">
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
                <aside id="lateral">

                    <div id="login" class="block_aside">
                        <h3>Entrar a la Web</h3>

                        <form action="" method="POST">
                            <label for="email">Email</label>
                            <input type="email" name="email">

                            <label for="password">Contraseña</label>
                            <input type="password" name="password">

                            <input type="submit" value="Enviar">

                        </form>
                        
                        <ul>
                            <li>
                                <a href="#">Mis pedidos</a>
                            </li>
                            <li>
                                <a href="#">Gestionar Pedidos</a>
                            </li>
                            <li>
                                <a href="#">Gestionar Categorias</a>
                            </li>
                            
                        </ul>

                    </div>

                </aside>

                <!--Contenido central-->
                <div id="central">
                    
                    <h1>Productos destacados</h1>

                    <div class="product">
                        <img src="assets/img/camiseta.png">
                        <h2>Camiseta Azul</h2>
                        <p>30.000 CLP</p>
                        <a href="" class="button">Comprar</a>
                    </div>
                    <div class="product">
                        <img src="assets/img/camiseta.png">
                        <h2>Camiseta Azul</h2>
                        <p>30.000 CLP</p>
                        <a href="" class="button">Comprar</a>
                    </div>
                    <div class="product">
                        <img src="assets/img/camiseta.png">
                        <h2>Camiseta Azul</h2>
                        <p>30.000 CLP</p>
                        <a href="" class="button">Comprar</a>
                    </div>

                </div>


            </div>

            <!--Pie de pagina-->
            <footer id="footer">
                <p>Desarrollado por Erick Oyarce &copy; <?= date('y') ?></p>

            </footer>
        </div>

    </body>
</html>
