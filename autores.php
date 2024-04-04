<!DOCTYPE html>
<html data-bs-theme="light" lang="es" dir="ltr">
  <head>
    <title>Pagina de Autores</title>
    <?php
      include ("templeate/head.php");
    ?>    
  </head>
  <body>
       <!--Navegador-->
        <?php
            include("templeate/Navegador.php");
        ?> 

        <section class="container" style="padding: 100px;">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID_AUTOR</th>
                        <th scope="col">APELLIDO</th>
                        <th scope="col">NOMBRE</th>
                        <th scope="col">PAIS</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "connexion/connexion.php"; // Asegúrate de que este archivo existe y contiene la conexión a la base de datos
                    $sql = $connexion->query("SELECT id_autor, apellido, nombre, pais FROM autores");
                    while ($datos = $sql->fetch_object()) {
                        echo "<tr>";
                        echo "<th>" . $datos->id_autor . "</th>";
                        echo "<td>" . $datos->apellido . "</td>";
                        echo "<td>" . $datos->nombre . "</td>";
                        echo "<td>" . $datos->pais . "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
    </section>

        <!--Pie de Pagina-->
        <?php
            include("templeate/Pie_dePagina.php");
        ?>
  </body>

</html>