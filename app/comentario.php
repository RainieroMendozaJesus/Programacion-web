<?php
class ContactForm {
    private $db; // Objeto de conexión a la base de datos

    public function __construct($db) {
        $this->db = $db;
    }

    public function guardarDatos($nombre, $correo, $asunto, $comentario) {
        // Validar los datos
        if (strlen($nombre) < 3 || strlen($comentario) < 10 || strlen($comentario) > 50) {
            return "Error: Datos inválidos.";
        }

        // Proceder a guardar en la base de datos
        $sql = "INSERT INTO contacto (fecha, correo, nombre, asunto, comentario) VALUES (NOW(), ?, ?, ?, ?)";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("ssss", $correo, $nombre, $asunto, $comentario);

        if ($stmt->execute()) {
            return "El comentario ha sido recibido.";
        } else {
            return "Error al guardar el comentario.";
        }
    }
}