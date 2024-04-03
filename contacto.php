<!DOCTYPE html>
<html data-bs-theme="light" lang="es" dir="ltr">
    <head>

        <!-- ===============================================-->
        <!--Document Title-->
        <!-- ===============================================-->
        <title>Formulario de Contacto</title>

        <?php
            include ("templeate/head.php");
        ?>
    </head>
    <body>

        <!--Navegador-->
        <?php
            include("templeate/Navegador.php");
        ?>

        <!--Formulario de Contacto-->
        <?php
            // Incluye la clase 
            require("app/comentario.php"); 

            // Incluir formulario
			include ("templeate/Formulariodecontacto.php");
            
            $db = new PDO("mysql:host=sql206.infinityfree.com;dbname=if0_36205570_libreria;charset=utf8mb4", "if0_36205570", "zKFcAHBi9SuEY2e");
            $formulario_contacto = new ContactForm($db);

            // Obtén los datos del formulario
            $nombre = $_POST['nombre'];
            $correo = $_POST['correo'];
            $asunto = $_POST['asunto'];
            $comentario = $_POST['comentario'];
            // Guarda los datos en la base de datos
            $resultado = $formulario_contacto->guardarDatos($nombre, $correo, $asunto, $comentario);
            echo $resultado;
        ?>

        <!--Pie de Pagina-->
        <?php
            include("templeate/Pie_dePagina.php");
        ?>


    </body>
</html>