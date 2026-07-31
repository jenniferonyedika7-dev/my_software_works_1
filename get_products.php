<?php

require_once "Database.php";
require_once "Product.php";

$ord = $_GET['order_id'];

$db  = new Database();
$conn = $db->connect();

$product = new Product($conn);
$products = $product->getProductsByOrderId($ord);

//var_dump(print_r($products, 1), 1);

?>

<!DOCTYPE html>
<html>

<head>

    <title>Products</title>

    <style>
        body {
            font-family: Arial;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .card {
            width: 300px;
            border: 1px solid #ccc;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
        }

        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .card-body {
            padding: 15px;
        }

        .price {
            color: green;
            font-weight: bold;
        }
    </style>

</head>

<body>





</body>

</html>