<?php 
    $site_url = '/tang-2019/';
    $uri = $_SERVER['REQUEST_URI'];
    //Este pequeño script detecta la url para saber si estás en una sección en la que el logo va al centro.
    $logo = strrpos($uri, 'contacto') !== false ? 'logo_2' : 'logo' ;
    //Agregar a este array las secciones que se sumen al sitio web en el futuro
    $secciones = ['recetas', 'sabores'];
    foreach($secciones as $seccion){
        if(strrpos($uri, $seccion) !== false){
            $pos = strrpos($uri, '/');
            $id = $pos === false ? $uri : substr($uri, $pos + 1);
            $logo = ($id == '' || $id == 'index.php') ? "logo_2" : "logo";
            $overflow = 'over_visible';
            break;
        }else{
            $pos = strrpos($uri, '/');
            $id = $pos === false ? $uri : substr($uri, $pos + 1);
            $overflow = ($id == '' || $id == 'index.php') ? "over_hidden" : "over_visible";
        }
    }
?>

<!DOCTYPE html>
<html lang="en" class="<?=$overflow?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?=$site_url?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=$site_url?>css/style.css">
    <title>Tang México</title>
</head>
<body class="<?=$overflow?>">
    <div class="hamburger_cont">
        <div class="hamburger hamburger--spin js-hamburger">
            <div class="hamburger-box">
                <div class="hamburger-inner"></div>
            </div>
        </div>
    </div>
    <a href="<?=$site_url?>"><img src="<?=$site_url?>img/logo.png" alt="" class="<?=$logo ?>"></a>
    <div class="menu_cont">
        <div class="madera madera1"></div>
        <div class="madera madera2"></div>
        <div class="madera madera3"></div>
        <div class="madera madera4"></div>
        <div class="menu_botones">
            <a href="<?=$site_url?>"><button class="menu_boton">INICIO</button></a>
            <a href="<?=$site_url?>sabores"><button class="menu_boton">SABORES</button></a>
            <a href="<?=$site_url?>recetas"><button class="menu_boton">RECETAS</button></a>
            <a href="<?=$site_url?>"><button class="menu_boton">PROMO</button></a>
            <a href="<?=$site_url?>contacto.php"><button class="menu_boton">CONTACTO</button></a>
        </div>
    </div>
