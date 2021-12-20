<?php
    require_once 'config/connect.php';

    $product_id = $_GET['id'];
    $product = mysqli_query($connect, "SELECT * FROM `products` WHERE `id` = '$product_id'");
    $product = mysqli_fetch_assoc($product);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Products</title>
</head>
<body>
<h3>Update new Products</h3>
<form action="vendor/create.php" method="POST">
    <input type="hidden" name="id" value="<?= $product['id'] ?>">
    <p>Title</p>
    <input type="text" name="title" value="<?= $product['title'] ?>">
    <p>Description</p>
    <textarea name="description"><?= $product['description'] ?></textarea>
    <p>Price</p>
    <input type="number" name="price" value="<?= $product['price'] ?>"> <br> <br>
    <input type="submit" name="submit" value="update">
</form>
</body>
</html>





<?php












?>