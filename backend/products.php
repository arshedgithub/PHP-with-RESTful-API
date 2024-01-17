<?php

require "./connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_REQUEST['name']);
    $quantity = htmlspecialchars($_REQUEST['quantity']);
    $price = htmlspecialchars($_REQUEST['price']);

    if (empty($name) || empty($price)) {
        $err = "required fields are empty.";
        return;
    } 

}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    
    $query = 'SELECT * FROM products';
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "Name: " . $row["name"]. " Quantity: " . $row["quantity"]. " price: " . $row["price"]. "<br>";
        }
    } else {
        echo "0 results";
    }
 
}

?>