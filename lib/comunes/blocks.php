<?php
function includeHead()
{
    ?>

    <meta charset="utf-8">
    <title>La porra del Mundial</title>
    <!--    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
    <!--    <meta name="description" content="">-->
    <!--    <meta name="author" content="">-->

    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Amaranth' rel='stylesheet' type='text/css'>

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="style/css/style.css" media="all"/>
    <link rel="stylesheet" type="text/css" href="style/css/menu.css" />
    <!--[if IE 9]><link rel="stylesheet" type="text/css" href="style/css/ie9.css" media="all"/><![endif]-->

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" type="image/x-icon" href="style/images/favicon.png">

    <!-- Javascript -->
    <script type="text/javascript" src="style/js/jquery-2.1.0.js"></script>
    <script type="text/javascript" src="style/js/ajax.js"></script>
    <script type="text/javascript" src="style/js/scripts.js"></script>

<?php
}

function CabeceraPagina()
{
    ?>

    <header>
        <div id="logo"><a href="index.html"><img src="style/images/logo.png" alt="Mundial 2014"></a></div>

        <nav>
            <ul class="menu">
                <li><a href="index.php">Inicio</a></li>
                <li>
                    <a href="porras.php">Porras</a>
                    <ul>
                        <li><a href="#">Submenu1</a></li>
                        <li><a href="#">Submenu2</a></li>
                        <li><a href="#">Submenu3</a></li>
                        <li><a href="#">Submenu4</a></li>
                    </ul>
                </li>
                <li><a href="usuarios.php">Usuarios</a></li>
                <li><a href="clasificacion.php">Clasificacion</a></li>
                <li><a href="contacto.php">Contacto</a></li>
                <li><a href="lib/usuarios/alta_usuario.php">Alta</a></li>
            </ul>
        </nav>
    </header>

<?php
}

function PiePagina()
{
    ?>

    <footer>
        <div class="footer-box one-third">
            <h3>Popular Posts</h3>
            <ul class="popular-posts">
                <li>
                    <a href="#"><img src="style/images/art/s1.jpg" alt=""/></a>
                    <h5><a href="#">Dolor Commodo Consectetur</a></h5>
                    <span>26 Aug 2011 | <a href="#">21 Comments</a></span>
                </li>

                <li>
                    <a href="#"><img src="style/images/art/s2.jpg" alt=""/></a>
                    <h5><a href="#">Dolor Commodo Consectetur</a></h5>
                    <span>26 Aug 2011 | <a href="#">21 Comments</a></span>
                </li>

                <li>
                    <a href="#"><img src="style/images/art/s3.jpg" alt=""/></a>
                    <h5><a href="#">Dolor Commodo Consectetur</a></h5>
                    <span>26 Aug 2011 | <a href="#">21 Comments</a></span>
                </li>

            </ul>
        </div>
        <div class="footer-box one-third">
            <h3>About</h3>

            <p>Donec id elit non mi porta gravida at eget metus. Donec ullamcorper nulla non metus auctor fringilla.</p>

            <p>Lorem Ipsum Dolor Sit
                Moon Avenue No:11/21
                Planet City, Earth<br>
                <br>
                <span class="lite1">Fax:</span> +555 797 534 01<br>
                <span class="lite1">Tel:</span> +555 636 646 62<br>
                <span class="lite1">E-mail:</span> name@domain.com</p>


        </div>

        <div class="footer-box one-third last">
            <h3>Custom Text</h3>

            <p>Nullam quis risus eget urna mollis ornare vel eu leo. Maecenas faucibus mollis interdum. Etiam porta sem
                malesuada magna mollis euismod. Nulla vitae elit. </p>

            <p>Donec ullamcorper nulla non metus auctor fringilla. Maecenas faucibus mollis interdum. Curabitur blandit
                tempus porttitor.</p>
        </div>
    </footer>
<?php
}
?>