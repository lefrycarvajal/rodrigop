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
        <h1>SOBRE MI</h1>
        <div class="border"></div>
        <div class="about-section-row">
            <div class="about-section-col">
                <div class="about-img">
                    <img src="img/about.jpeg" alt="">
                    <h4>Rodrigo Arturo Breton</h4>
                </div>
            </div>
            <div class="about-section-col">
                <div class="about">
                    <p>
                        Soy Rodrigo Breton un estudiante de Tecnologo en Multimedia apasionado por la creatividad y por el trabajo que conlleva este.
                    </p>

                    <p>
                        Empece a estudiar derecho en otra institutcion pero pronto me di cuenta de que aquello "no era lo m??o", as?? que decid?? encaminar mis estudios de marketing por algo m??s creativo. He realizado varios cursos de dise??o gr??fico y dise??o web pero mi formaci??n es totalmente autodidacta. Me considero una persona con una mente inquieta a la que le gusta aprender por s?? misma, cada proyecto es un nuevo reto para aprender y crecer profesionalmente.
                    </p>

                    <p>
                    En la actualidad desarrallo mi trabajo como freelance, tanto en proyectos personales como para otras empresas.
                    </p>
                </div>
                <div class="skills">
                    <div class="skill">
                        <div class="title">Dise??o Web</div>
                        <div class="progress">
                            <div class="progress-bar p1"><span>60%</span></div>
                        </div>
                    </div>



                    <div class="skill">
                        <div class="title">Publicidad</div>
                        <div class="progress">
                            <div class="progress-bar p2"><span>100%</span></div>
                        </div>
                    </div>


                    <div class="skill">
                        <div class="title">Dise??o Grafico</div>
                        <div class="progress">
                            <div class="progress-bar p3"><span>90%</span></div>
                        </div>
                    </div>
                    <div class="skill">
                        <div class="title">Ilustraci??n</div>
                        <div class="progress">
                            <div class="progress-bar p4"><span>100%</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!--CONTENIDO-->

<?php

include_once('footer.php')

?>