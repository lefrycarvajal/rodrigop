<?php

include_once('header.php')

?>


<!--CONTENIDO-->

<!--banner-->

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="img/2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="img/3.jpg" class="d-block w-100" alt="...">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- contenido -->
<div class="contact-section">
    <div class="inner-width2">
        <h1>Contáctanos</h1>
        <form method="post" name="contacto" onsubmit="return validar_contacto()">
        <input type="text" class="nombre" placeholder="Nombre" name="nombre" required>
        <input type="email" class="email" placeholder="Correo electrónico" name="correo" required>
        <input type="text" class="telefono" placeholder="Teléfono" name="telefono" required>
        <input type="text" class="asunto" placeholder="Asunto" name="asunto">
        <textarea rows="1" class="mensaje" placeholder="Mensaje" name="mensaje" required></textarea>
        <br>
        <input type="submit" class="c-button" name="enviar" value="Enviar">
        </form>
    </div>
</div>
<?php
include_once('roda_registro.php')
?>
<script>
    function validar_contacto() {

        if (document.contacto.nombre.value == "") {
            alert('Ingrese un nombre.');
            return false
        }

        if (document.contacto.correo.value == "") {
            alert('Ingrese un correo.');
            return false
        }

        if (document.contacto.telefono.value == "") {
            alert('Ingrese un telefono.');
            return false
        }

        if (document.contacto.asunto.value == "") {
            alert('debes colocar un asunto.');
            return false
        }



        if (document.contacto.mensaje.value.length < 10) {
            alert('Coloca mas de 10 caracteres')
            return false;
        }





    }
</script>




<!--CONTENIDO-->

<?php

include_once('footer.php')

?>
