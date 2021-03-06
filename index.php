<?php
require_once 'config/connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>
<style>
    th, td
    {
        padding: 10px;
    }
    th
    {
        background: #606060;
        color: white;
    }
    td
    {
        background: #b5b5b5;
        color: black;
    }
</style>
<body>
<table>
<tr>
    <th>ID</th>
    <th>Title</th>
    <th>Description</th>
    <th>Price</th>
</tr>

<?php
    $products = mysqli_query($connect, "SELECT * FROM `products`");
    $products = mysqli_fetch_all($products);
    foreach ($products as $product)
    {
        ?>
            <tr>
                <td><?= $product[0] ?></td>
                <td><?= $product[1] ?></td>
                <td><?= $product[3] ?></td>
                <td><?= $product[2] ?>$</td>
                <td><a style="color:midnightblue" href="../CRUD/update.php?id=<?= $product[0] ?>">Update</a></td>
                <td><a style="color:chocolate" href="vendor/delete.php?id=<?= $product[0] ?>">Delete</a></td>
            </tr>
            <?php
    }
?>
</table>
<h3>Add new product</h3>
<form action="vendor/create.php" method="POST">
    <p>Title</p>
    <input type="text" name="title">
    <p>Description</p>
    <textarea name="description"></textarea>
    <p>Price</p>
    <input type="number" name="price"> <br> <br>
    <input type="submit" name="submit" value="add new product">
</form>
</body>
</html>