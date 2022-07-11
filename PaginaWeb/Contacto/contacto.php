<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../index.css">
    <script src = "../index.js"></script>
    <title>Contacto</title>
</head>
<body>
    <header>
        <div class = "logo-header">
            <img src = "../img/Logo.png">
            <a href = "../index.php">Inicio</a>
            <a href = "../Servicios/servicios.html">Servicio</a>
            <a href = "../Contacto/contacto.php">Contacto</a>
        </div>
    </header>

    <?php
        include("formulario.php");
    ?>

    <form method="post">
        <section class="formulario-contacto">
        <h4>Formulario</h4>
            <input class="input-contacto" type="text" name="nombresphp" placeholder="Nombre completo">
            <input class="input-contacto" type="email" name="correophp" placeholder="Correo">
            <textarea class="input-contacto" name="mensajephp" placeholder = "Mensaje" rows="5"></textarea>
            <button class="boton-contacto" type="submit" name="enviarphp">Enviar</button>
        </section>
    </form>

    

    <footer class="footer-posicion">
        <h3>Diseñado por Alejandro Vigi | Copyright 2022</h3>
        <section class="footer-img">
            <a href="https://www.facebook.com/marcoalejandro.vigigarduno"><img src= "../img/face.png"></a>
            <a href="https://twitter.com/Alejandro_Vigi?t=cH9hoSRKnasI3ja_qty_VQ&s=09"><img src= "../img/tw.png"></a>
            <a href="https://www.instagram.com/alejandro_vigi/"><img src= "../img/insta.png"></a>
            <a href="https://wa.me/525518602484"><img src= "../img/what.png"></a>
            <a href="https://www.linkedin.com/"><img src= "../img/link.png"></a>
        </section>
    </footer>


</body>
</html>