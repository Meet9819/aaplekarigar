<?php

require_once "db.php";
//
$DB_HOST = 'localhost';
$DB_USERNAME = 'aaplekar_handi';
$DB_PASSWORD = 'loveyoudad9820102993';
$DB_NAME = 'aaplekar_handicraft';

try {
    $db = new PDO("mysql:host={$DB_HOST};dbname={$DB_NAME}", $DB_USERNAME, $DB_PASSWORD);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $userID = (int) trim($_POST['userID']);
    $lastname = trim($_POST['lastname']);
    $state = trim($_POST['state']);
    $pincode = (int) trim($_POST['pincode']);
    $address = trim($_POST['address']);
    $country = trim($_POST['country']);
    $shiptoaddress = trim($_POST['shiptoaddress']);
    $shiptostate = trim($_POST['shiptostate']);
    $shiptopincode = trim($_POST['shiptopincode']);
    $shiptocountry = trim($_POST['shiptocountry']);

    if (!isset($errMSG)) {
        $stmt = $db->prepare("UPDATE
                `tbl_users`
            SET
                `lastname` = :lastname,
                `state` = :state,
                `address` = :address,
                `pincode` = :pincode,
                `country` = :country,
                `shiptoaddress` = :shiptoaddress,
                `shiptostate` = :shiptostate,
                `shiptopincode` = :shiptopincode,
                `shiptocountry` = :shiptocountry
            WHERE
                `userID` = :userID");

        $stmt->bindParam(':pincode', $pincode);
        $stmt->bindParam(':lastname', $lastname);
        $stmt->bindParam(':userID', $userID);
        $stmt->bindParam(':state', $state);
        $stmt->bindParam(':address', $address);
        $stmt->bindParam(':country', $country);
        $stmt->bindParam(':shiptoaddress', $shiptoaddress);
        $stmt->bindParam(':shiptostate', $shiptostate);
        $stmt->bindParam(':shiptopincode', $shiptopincode);
        $stmt->bindParam(':shiptocountry', $shiptocountry);

        if (!$stmt->execute()) {
            $errMSG = "Failed to save shipping details! Please try again";
            return;
        }
    }
    ?>
    <script>
        alert('Shipping details saved successfully! Processing order please wait!');
    </script>
    <?php
    $name = $con->real_escape_string($_POST['name']);
    $email = $con->real_escape_string($_POST['email']);
    $phone = $con->real_escape_string($_POST['phone']);
    $product_name = $con->real_escape_string($_POST['product_name']);
    $product_price = $con->real_escape_string($_POST['product_price']);
    $address = $con->real_escape_string($_POST['address']);
    $productcode = $con->real_escape_string($_POST['productcode']);
    $billno = $con->real_escape_string($_POST['billno']);
    $created = $con->real_escape_string($_POST['created']);
    $datee = $con->real_escape_string($_POST['datee']);

  
     $stmt = $db->prepare("INSERT INTO `payment` 
        (`name`, `email`, `phone`, `product_name`, `product_price`, `address`, `productcode`, `billno`, `created`, `modeofpayment`, `datee`) 
        VALUES(:payee_name, :payee_email, :payee_mobile, :product, :price, :address, :code, :bill_no, :created, :mode, :datee)");

    if ($stmt->execute(array(
        ":payee_name" => $name, 
        ":payee_email" => $email, 
        ":payee_mobile" => $phone, 
        ":product" => $product_name, 
        ":price" => $product_price, 
        ":address" => $address, 
        ":code" => $productcode, 
        ":bill_no" => $billno, 
        ":created" => $created, 
        ":mode" => "COD",
        ":datee" => $datee
    ))) { 


   //thankyou.php?payment_id=MOJO0725G05A74708182&payment_status=Credit&payment_request_id=cec24aab382041629a9a9c8d01e9ada1


        header("Location: instamojo/thankyoucod.php?payment_status=Success&mode=COD&payment_id=$billno&payment_request_id=COD$billno&emailidofbuyer=$email");
    } else {
        header("Location: instamojo/thankyou.php?payment_status=Failed&mode=COD");
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}
