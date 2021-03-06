<?php

require 'includes/funciones.php'; /* Sirve para exportar funciones o código mas complejo. Include es mas para templates. */

$inicio = true; /* Para agregar la clase de incio creamos esta variable y se agrega autamitncament al include */
incluirTemplate('header');

?>

<main class="contenedor seccion">
    <h1>Conoce sobre nosotros</h1>
    <?php 
    $limite = 1;
    include 'includes/templates/nosotros.php';        
    ?>
</main>

<section class="contenedor seccion">
    <h1>Más sobre nosotros</h1> <!-- agregamos información sobre nosotros -->
    <div class="iconos-nosotros">
        <div class="icono">
            <img src="build/img/icono1.svg" alt="Icono seguridad" loading="lazy">
            <h3>Seguridad</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita dolorem totam aut sequi nihil, numquam cumque molestias illo, suscipit quod odio adipisci inventore iste doloribus excepturi in quidem assumenda ex.</p>
        </div>
        <div class="icono">
            <img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy">
            <h3>Precio</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita dolorem totam aut sequi nihil, numquam cumque molestias illo, suscipit quod odio adipisci inventore iste doloribus excepturi in quidem assumenda ex.</p>
        </div>
        <div class="icono">
            <img src="build/img/icono3.svg" alt="Icono Tiempo" loading="lazy">
            <h3>A tiempo</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita dolorem totam aut sequi nihil, numquam cumque molestias illo, suscipit quod odio adipisci inventore iste doloribus excepturi in quidem assumenda ex.</p>
        </div>
    </div>
</section>


<?php incluirTemplate('footer'); ?>