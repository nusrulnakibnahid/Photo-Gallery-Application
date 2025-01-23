<?php
require 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $stmt = $conn->prepare("SELECT image_path FROM photos WHERE id = :id");
    $stmt->execute(['id' => $id]);
    $photo = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($photo) {
        unlink($photo['image_path']); // Delete the file from the server

        $stmt = $conn->prepare("DELETE FROM photos WHERE id = :id");
        $stmt->execute(['id' => $id]);
    }
}

header("Location: index.php");
?>
