<!DOCTYPE html>
<html data-bs-theme="light" lang="es" dir="ltr">
  <head>
    <title>Pagina de Libros</title>
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
                        <th scope="col">ID_TITULO</th>
                        <th scope="col">TITULO</th>
                        <th scope="col">TIPO</th>
                        <th scope="col">PRECIO</th>
                        <th scope="col">NOTAS</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "connexion/connexion.php"; // Asegúrate de que este archivo existe y contiene la conexión a la base de datos
                    $sql = $connexion->query("SELECT id_titulo, titulo, tipo, precio, notas FROM titulos");
                    while ($datos = $sql->fetch_object()) {
                        echo "<tr>";
                        echo "<th>" . $datos->id_titulo . "</th>";
                        echo "<td>" . $datos->titulo . "</td>";
                        echo "<td>" . $datos->tipo . "</td>";
                        echo "<td>" . $datos->precio . "</td>";
                        echo "<td>" . $datos->notas . "</td>";
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