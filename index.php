<?php
require 'db.php';

$stmt = $conn->query("SELECT * FROM photos ORDER BY created_at DESC");
$photos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo Gallery</title>
    <link rel="stylesheet" href="css.php">
</head>
<body>
    <h1>Photo Gallery Application</h1>

    <!-- Upload Form -->
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="text" name="title" placeholder="Image Title" required>
        <input type="file" name="image" accept="image/*" required>
        <button type="submit">Upload</button>
    </form>

    <!-- Gallery -->
    <h2>Gallery</h2>
    <?php if (empty($photos)): ?>
        <p class="no-photos">No photos uploaded yet.</p>
    <?php else: ?>
        <div class="gallery">
            <?php foreach ($photos as $photo): ?>
                <div class="gallery-item">
                    <img src="<?php echo $photo['image_path']; ?>" alt="<?php echo $photo['title']; ?>">
                    <p><?php echo $photo['title']; ?></p>
                    <a href="delete.php?id=<?php echo $photo['id']; ?>">Delete</a>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</body>
</html>
