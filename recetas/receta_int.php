<?php include('../header.php') ?>

<div class="receta_interior_cont">
    <div class="izquierdo"> 
        <div class="home_flecha_cont flecha_int izquierda d-none d-md-block" data-seccion="recetas">
            <div class="home_flecha"></div>
        </div>
        <div class="home_flecha_cont flecha_int derecha d-none d-md-block" data-seccion="recetas">
            <div class="home_flecha"></div>
        </div>
    </div><!--
--><div class="derecho">
        <div class="home_flecha_cont flecha_int izquierda d-block d-md-none" data-seccion="recetas">
            <div class="home_flecha"></div>
        </div>
        <div class="home_flecha_cont flecha_int derecha d-block d-md-none" data-seccion="recetas">
            <div class="home_flecha"></div>
        </div>
        <a href="index.php" class="cerrar_interior">
            <div class="nav_home_cont">
                <div class="mas_nav_cont">
                    <div class="mas_nav">
                        <div class="mas_nav_item horizontal"></div>
                        <div class="mas_nav_item vertical"></div>
                    </div>
                </div>
                <div class="colores_cont">
                </div>
            </div>
        </a>
        <div class="receta_interior_contenedor">
            <div class="receta_interior_texto">
                <div class="receta_interior_titulo"></div>
                <div class="tiemporciones">
                    <div class="minutos">
                        <img src="<?=$site_url?>img/reloj.png" alt="" class="reloj">
                        <div class="textbox">
                            <span class="minutos_num"></span><span class="minutos_texto">MINUTOS</span>
                        </div>
                    </div><!--
                    --><div class="porciones">
                        <img src="<?=$site_url?>img/carita.png" alt="" class="carita">
                        <div class="textbox">
                            <span class="porciones_num">6</span><span class="porciones_texto">PORCIONES</span>
                        </div>
                    </div>
                </div>
                <div class="receta_interior_ingredientes">
                    <p class="ingredientes_titulo">INGREDIENTES</p>
                    <ul class="ingredientes_lista"></ul>
                </div>
                <div class="receta_interior_preparacion">
                    <p class="preparacion_titulo">PREPARACIÓN</p>
                    <ul class="preparacion_lista"></ul>
                </div>
            </div>  
        </div>
        <div class="plasta_circular">
        </div>
</div>
</div>

<?php include('../footer.php') ?>