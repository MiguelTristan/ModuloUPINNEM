<!DOCTYPE html>
<html lang="en">

<head>
    <?php include ('./dotk/00head/analitycs.html'); ?>
    <?php include ('./dotk/00head/cabecera.html'); ?>
    <?php include ('./dotk/00head/estilos.html'); ?>
</head>

<body>

    <a id="arriba"></a>
    <header>
        <!-- Logos e imagen de hidalgo -->
        <?php include ('../lib18/seph/hf/header.html'); ?>

        <nav>
            <!-- Menu principal superior -->
            <?php include ('../lib18/coreFRONTx/01header/nav/menu-superior/menu.html'); ?>
        </nav>

    </header>

    <!-- Menu menu-pegajoso DarkDesign -->
    <?php include ('./dotk/01header/02begajoso/menu-pegajoso.html'); ?>

    <main class="main container">

        <div class="text-center mb-3">
            <img src="./images/upinem.jpg" alt="upinnem" class="rounded img-fluid">
        </div>

        <!-- presentacion upinnem -->
        <hr/>
    
        <div class="alert alert-primary text-center" id="id_presentacion" role="alert">Presentación</div>
        <p class="text-justify">
            UNIDAD POLITÉCNIA DE INNOVACIÓN Y DESARROLLO EMPRESARIAL La Unidad Politécnica de Innovación y Desarrollo Empresarial (UPINNEM) es el centro de incubación y negocios de la Universidad Politécnica, que mediante acciones de fomento al emprendimiento, apoya a investigadores, alumnos, empresarios, emprendedores y público en general que quieran convertir ideas, resultados de investigación, proyectos y empresas en NEGOCIOS EXITOSOS que fortalezcan el desarrollo del Estado y del País. A través del Fortalecimiento de la cultura y la práctica de la innovación en el ámbito académico, empresarial y social; la transferencia de resultados académicos y de investigación; la prestación de servicios tecnológicos, de asistencia técnica y acompañamiento de proyectos productivos y la incubación de empresas tradicionales y de base tecnológica, la UPINNEM propicia el surgimiento de emprendedores con una nueva cultura empresarial, acorde a las necesidades tecnológicas actuales, que garanticen la sustentabilidad de su negocio y la generación de empleos, que les permita obtener productos y servicios competitivos a nivel nacional e internacional.
        </p>


        <!-- video upinnem -->
        <div class="embed-responsive embed-responsive-16by9">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/1bJRLG2-hV0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen class="embed-responsive-item"></iframe>
        </div>

        <!-- mision y vision -->
        <hr/>
        <div class="alert alert-primary text-center" role="alert" id="id_mision">
            Acerca de
        </div>
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-objetivo-tab" data-toggle="tab" href="#nav-objetivo" role="tab" aria-controls="nav-objetivo" aria-selected="true"><i class="fas fa-chess"></i> Objetivo</a>
                <a class="nav-item nav-link" id="nav-mision-tab" data-toggle="tab" href="#nav-mision" role="tab" aria-controls="nav-mision" aria-selected="false"><i class="fas fa-flag"></i> Misión</a>
                <a class="nav-item nav-link" id="nav-vision-tab" data-toggle="tab" href="#nav-vision" role="tab" aria-controls="nav-vision" aria-selected="false"><i class="fas fa-low-vision"></i> Visión</a>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-objetivo" role="tabpanel" aria-labelledby="nav-objetivo-tab">La Unidad Politécnica de Innovación y Desarrollo Empresarial (UPINNEM), tiene como objetivo Fomentar y Promover el Espíritu Emprendedor, Innovación, Gestión y Desarrollo Tecnológico, así como la Incubación de Empresas, fortaleciendo al desarrollo de nuestra zona de influencia y del Estado.</div>
            <div class="tab-pane fade" id="nav-mision" role="tabpanel" aria-labelledby="nav-mision-tab">La UPINNEM tiene como misión implementar estrategias de negocios innovadoras a través de la incubación de empresas de base tecnológica, con el fin de transferir los avances científicos, académicos y de investigación que impulsen la creación de nuevas empresas y así colaborar en el desarrollo sustentable de nuestra región y el estado.</div>
            <div class="tab-pane fade" id="nav-vision" role="tabpanel" aria-labelledby="nav-vision-tab">Ser reconocida como unidad integral del quehacer Universitario de la UPP generadores de riqueza y desarrollo económico para la comunidad a través de la creación y fortalecimiento de empresas exitosas, de base tecnológica, apoyadas en la transferencia e innovación tecnológica.</div>
        </div>

        <hr/>

        <!-- Modelo UUPP -->
        <div class="alert alert-primary text-center" role="alert" id="uupp">
            Modelo de incubación de las UUPP
        </div>
        <div class="card mb-3">
            <img class="card-img-top img-fluid" src="./images/incupols.gif" alt="uupp">
            <div class="card-body">

                <p class="card-text">La UPINNEM opera con un modelo de incubación propio y apto para cubrir los requerimientos y características de Incubación de las Universidades Politécnicas por lo que se crea en el año 2012 el Modelo “INCUPOLS”, reconocido por la Secretaría de Economía.

                    <p class="card-text"><small class="text-muted">Ventajas del Modelo de Incubación de las UPOLS:</small>
                        <small class="text-muted">
                         <ul>
                            <li>Generar un Modelo de Incubación de base tecnológica que impulse la creación de empresas sustentables y competitivas. </li>
                            <li>Fortalecer la cultura empresarial de los estudiantes de las Universidades Politécnicas así como de la región o zona de influencia. </li>
                            <li>Generación de una cartera de proyectos tecnológicos atractivos y que representen opciones de inversión. </li>
                            <li>Atender de forma prioritaria los problemas locales y regionales de investigación, innovación y desarrollo tecnológico. </li>
                        </ul>
                        </small>
                    </p>
                </p>

            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Fases del modelo de incubación</h5>
                <p class="card-text"></p>

            </div>
            <img class="card-img-bottom img-fluid" src="./images/cascada.gif" alt="fases-del-modelo">
        </div>

        <!-- Separador -->
        <hr/>


        <!-- Servicios uupp -->
        <div class="alert alert-primary text-center" role="alert" id="id_servicios">
            Servicios
        </div>
        <div class="card-deck mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">La Unidad Politécnica de Innovación y Desarrollo Empresarial (UPINNEM), cuenta con un equipo de consultores especializados en: elaboración de Planes de Negocios, Administración, Mercadotecnia, Diseño Gráfico, Procesos Productivos, Finanzas, Aspectos Jurídicos y Legales, y asesoría en acercamiento a fuentes de financiamiento; los cuales en su conjunto le ofrecen los siguientes servicios:</p>
                    <img class="card-img" src="./images/servicios.gif" alt="servicios">

                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="./images/servicios-adicionales.jpg" alt="servicio-adicional">
                <div class="card-body">
                    <h5 class="card-title">Servicios adicionales</h5>
                    <p class="card-text">El Modelo de las UUPP ofrece la posibilidad de brindar servicios adicionales a la incubación los cuales se van incorporando y diseñando acorde a la demanda de las empresas, tales como: hospedaje temporal, oficina virtual, gestión de propiedad intelectual, desarrollo de un portal comercial, Cursos, talleres y conferencias en el ámbito académico, empresarial y social, entre otros. Para conocer más acerca de nosotros y de los servicios que ofrecemos, contáctanos!!</p>
                </div>
            </div>
        </div>


        <!-- Multimedia -->
        <div class="embed-responsive embed-responsive-21by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/uIIAAHJjmvc" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
        
        <hr/>

        <!-- Contacto -->
        <div class="alert alert-primary text-center" role="alert" id="contacto">
            Contacto
        </div>
        <img src="../lib18/images/logo-upp-15.jpg" class="rounded mx-auto d-block" alt="UPPachuca">
        <h1 class="text-center">Universidad Politécnica de Pachuca</h1>
        <br/>
        <h2 class="text-center">Unidad Politécnica de Innovación y Desarrollo Empresarial Universidad Politécnica de Pachuca</h2>
        <br/>
        <p class="text-center">Carr. Pachuca- Cd. Sahagún Km. 20 Rancho Luna, Ex Hacienda de Santa Bárbara Zempoala Hidalgo.</p>
        <br/>
        <p class="text-center">Correo: upinnem@upp.edu.mx</p>
        <br/>
        <p class="text-center">Tel: (01771) 5477510 ext 2447</p>
        <br/>
        <h2 class="text-center">M.C.E. Jannet Rodríguez Ruiz</h2>
        <p class="text-center">Coordinadora de UPINNEM</p>
        <p class="text-center">Correo: jannet@upp.edu.mx</p>

        <!-- seccion -->
        <div>

            <hr class="featurette-divider">
            <!-- Menu con todos los sitios y mini sitios de la página -->
            <?php include ('../lib18/coreFRONTx/main/tmenu-footer/menufooter.php'); ?>

        </div>

    </main>

    <footer>
        <!-- footer de gobierno del estado -->
        <?php include ('../lib18/seph/hf/footer.html'); ?>
    </footer>

    <!-- Librerias javascript -->
    <?php include ('../lib18/coreFRONTx/09js/java.html'); ?>

    <!-- Script para dar la animacion al boton flotante que lleva arriba -->
    <a href="#" class="back-to-top">Volver arriba</a>
    <script src="../lib18/coreFRONTx/10boton-arriba/script.js"></script>

</body>

</html>
