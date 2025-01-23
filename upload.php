<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $image = $_FILES['image'];

    if (!empty($title) && $image['error'] === 0) {
        $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
        if (in_array($image['type'], $allowedTypes)) {
            $uploadDir = 'uploads/';
            $filePath = $uploadDir . basename($image['name']);

            if (move_uploaded_file($image['tmp_name'], $filePath)) {
                $stmt = $conn->prepare("INSERT INTO photos (title, image_path) VALUES (:title, :image_path)");
                $stmt->execute(['title' => $title, 'image_path' => $filePath]);
                header("Location: index.php");
            } else {
                echo "Failed to upload file.";
            }
        } else {
            echo "Invalid file type.";
        }
    } else {
        echo "Please provide a title and a valid image.";
    }
}
?>
