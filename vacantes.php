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
    <div class="about-section">
        <div class="inner-width">
            <h1>Tienes una idea? Trabajemos juntos!</h1>
            <div class="border"></div>
            <div class="about-section-row">
                <div class="about-section-col">
                    <div class="about-img">
                        <img src="img/v1.jpg" alt="">
                    </div>
                </div>
                <div class="about-section-col">
                    <div class="about">
                        <form method="post" name="contacto" onsubmit="return validar_contacto()">
                            <div class="form-group row">
                              <label for="inputEmail3" class="col-sm-2 col-form-label">Nombre</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputEmail3" name="nombre" required>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="inputPassword3" class="col-sm-2 col-form-label">Teléfono</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputPassword3" name="telefono" required>
                              </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label" >E-mail</label>
                                <div class="col-sm-10">
                                  <input type="email" class="form-control" id="inputPassword3" name="correo" required>
                                </div>
                              </div>

                            <div class="form-group row">
                              <div class="col-sm-10">
                                <input type="submit" class="btn btn-outline-dark rounded-pill my-2 ml-2 my-sm-0"
                                style="width: 120px; font-weight: 700;" name="send" value="Enviar" >
                              </div>
                            </div>
                          </form>
            </div>
        </div>
    </div>

    <?php
include_once('roda_vacantes.php')
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

    

    }
</script>

<!--CONTENIDO-->

<?php 

include_once('footer.php')

?>