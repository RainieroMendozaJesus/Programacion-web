<?php
if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["email"]) && !empty($_POST["name"]) && !empty($_POST["subject"]) && !empty($_POST["comment"])) {
        
        $email = $_POST["email"];
        $name = $_POST["name"];
        $subject = $_POST["subject"];
        $comment = $_POST["comment"];

        
        include "connexion/connexion.php"; 
        $sql = $connexion->prepare("INSERT INTO contacto (correo, nombre, asunto, comentario) VALUES (?, ?, ?, ?)");
        $sql->bind_param("ssss", $email, $name, $subject, $comment);

        if ($sql->execute()) {
            echo '<div class="alert alert-success">Mensaje registrado correctamente</div>';
        } else {
            echo '<div class="alert alert-danger">El mensaje no se pudo registrar correctamente</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Alguno de los campos está vacío</div>';
    }
}
?>
