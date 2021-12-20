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
            </tr>
            <?php
    }
?>
</table>
<h3>Add new product</h3>
<form action="" method="POST">
    <p>title</p>
    <input type="text" name="title">
    <p>description</p>
    <textarea name="description"></textarea>
    <p>price</p>
    <input type="number" name="price"> <br> <br>
    <input type="submit" name="submit" value="add new product">
</form>
</body>
</html>