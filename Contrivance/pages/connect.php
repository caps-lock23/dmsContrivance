<?php
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $product = $_POST['product'];
    $amount = $_POST['amount'];
    $size = $_POST['size'];
    $deliveryAddress = $_POST['deliveryAddress'];

    //db connection
    $conn = new mysqli('localhost', 'root', '', 'contrivance');
    if($conn->connect_error){
        die('Connection Failed :' . $conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into orderdetails(firstName, lastName, contact, email, product, amount, size, deliveryAddress)
            values (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssiss", $firstName, $lastName, $contact, $email, $product, $amount, $size, $deliveryAddress);
        $stmt->execute();
        echo "Order Successful";
        $stmt->close();
        $conn->close();
}?>
