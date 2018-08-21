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
