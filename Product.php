<?php

class Product
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function getProductsByOrderId($orderId)
    {
        $sql = "select 
            p.product_name,
            p.description,
            p.price,
            p.picture

            from products as p

            join order_product as op
            on p.id = op.product_id

            join orders as o
            on o.id = op.order_id

            where o.id = ?";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute([$orderId]);

        return $stmt->fetchAll();
    }
}