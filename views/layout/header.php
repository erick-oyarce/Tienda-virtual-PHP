<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Tienda Virtual</title>

        <!--Hoja de estilos-->
        <link rel="stylesheet" href="<?=base_url?>assets/css/styles.css">

    </head>
    <body>
        <div id="container">
            <!--Cabecera-->
            <header id="header">
                <div id="logo">
                    <img src="<?=base_url?>assets/img/camiseta.png" alt="Camiseta Logo">
                    <a href="index.php">
                        Tienda de Camisetas                    
                    </a>
                </div>
            </header>

            <!--Menú-->
            
            <?php $categorias = Utils::showCategorias();?>
            <nav id="menu">
                <ul>
                    <li>
                        <a href="#">Inicio</a>
                    </li>
                    <?php while($cat = $categorias->fetch_object()):?>
                        <li>
                            <a href="#"><?=$cat->nombre?></a>
                        </li>

                    <?php endwhile;?>
                    
                   
                    
                </ul>

            </nav>

            <div id="content">