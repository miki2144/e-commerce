<?php
include"../product/db.php";

if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
    $fileTmpPath = $_FILES['imag']['tmp_name'];
    $fileName = $_FILES['imag']['name'];
    $fileSize = $_FILES['imag']['size'];
    $fileType = $_FILES['imag']['type'];
    
    // Define the allowed file types
    $allowedFileTypes = ['imag/jpeg', 'imag/png', 'imag/gif'];
    
    // Validate file type
    if (in_array($fileType, $allowedFileTypes)) {
        // Set the upload directory
        $uploadFileDir = './uploaded_images/';
        $dest_path = $uploadFileDir . $fileName;

        // Move the file to the specified directory
        if (move_uploaded_file($fileTmpPath, $dest_path)) {
            echo "File is successfully uploaded.";
        } else {
            echo "There was an error moving the uploaded file.";
        }
    } else {
        echo "Invalid file type. Only JPG, PNG, and GIF files are allowed.";
    }
} else {
    echo "No file uploaded or there was an upload error.";
}


$id = $_GET['id'];
$sql = "SELECT * FROM customers WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$product = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $imag = $_POST['imag'];

    $sql = "UPDATE custom SET name = ?, email = ?, password = ?, imag=? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssdi", $name, $email, $password,$imag, $id);
    $stmt->execute();
    $stmt->close();
    header("Location: index.php");
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Edit Product</h2>
    <form method="POST">
    <div class="mb-3">
            <label for="name" class="form-label">customer Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">EMAIL</label>
            <input name="email" class="form-control" required></textarea>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" step="0.01" required>
        </div>
        <div class="imag">
        <img src="uploads/<?php echo basename($_FILES["image"]["name"]); ?>" alt="Uploaded Image">
        </div>
        <button type="submit" class="btn btn-primary">Update customer</button>
    </form>
</div>
</body>
</html>

