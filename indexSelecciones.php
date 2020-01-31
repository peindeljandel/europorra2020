<!DOCTYPE html>
<html lang="es-ES">

<?php include("lib/comunes/blocks.php") ?>

<head>
    <?php includeHead(); ?>
</head>

<body onload="CargarSelecciones()">
<div id="wrapper">
    <?php CabeceraPagina(); ?>

    <section id="contenedor">
        <article>
            <div id="div_contenido"></div>
        </article>
    </section>

    <?php PiePagina(); ?>
</div>
</body>

</html>