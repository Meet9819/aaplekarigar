<?php
// initialize shopping cart class
include 'Cart.php';
$cart = new Cart;


$mysql_hostname = "localhost";
$mysql_user = "aaplekar_handi";
$mysql_password = "loveyoudad9820102993";
$mysql_database = "aaplekar_handicraft";

$prefix = "";

$bd = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password, $mysql_database) or die("Could not connect database");
//mysql_select_db($mysql_database, $bd) or die("Could not select database");

if (isset($_REQUEST['action']) && !empty($_REQUEST['action'])) {
    if ($_REQUEST['action'] == 'addToCart' && !empty($_REQUEST['id'])) {

        $variant = strtoupper(trim($_REQUEST['variant']));
        $unit = strtoupper(trim($_REQUEST['unit']));
        $productID = $_REQUEST['id'];
        $order_qty = (int) $_REQUEST["qty"] ?? 1;

        // get product details
        $query = '';
        if (empty($variant)) {
            $query = $bd->query("SELECT * FROM products WHERE id = " . $productID);
        } else {
            $query = $bd->query("SELECT
                    `p`.`img`,
                    `p`.`id`,
                    `p`.`name`,
                    `p`.`productcode`,
                    `pp`.`price`,
                    `pp`.`type`,
                    `p`.`hsncode`,
                    `p`.`stock`,   
                    `p`.`gst`,
					`pp`.`mrp` AS `mrp`,
                    `pp`.`units`
                FROM
                    `products` `p`
                INNER JOIN
                    `productprice` `pp`
                ON
                    `p`.`id` = `pp`.`productid`
                WHERE
                    `p`.`id` = {$productID}
                AND
                    (upper(`pp`.`type`) = '{$variant}')
                AND (upper(`pp`.`units`) = '{$unit}')");
        }

        $row = $query->fetch_assoc();

        if ($query->num_rows) {
            $itemData = array(
                'imagurl' => $row['img'],
                'id' => $row['id'],
                'name' => $row['name'],
                'productcode' => $row['productcode'],
                'units' => $row['units'],
                'stock' => $row['stock'], 
                'gst' => $row['gst'],
                'mrp' => (empty($variant) || !empty($row['mrp'])) ? $row['mrp'] : 0,
                'price' => (empty($variant) || !empty($row['price'])) ? $row['price'] : $row['originalprice'],
                'hsncode' => $row['hsncode'],
                'qty' => $order_qty,
            );

            $itemData["variant"] = $variant;

            $insertItem = $cart->insert($itemData);
            $redirectLoc = $insertItem ? 'viewcart.php' : 'index.php';
        } else {

        }
    } elseif ($_REQUEST['action'] == 'updateCartItem' && !empty($_REQUEST['id'])) {
        $itemData = array(
            'rowid' => $_REQUEST['id'],
            'qty' => $_REQUEST['qty'],
        );
        $updateItem = $cart->update($itemData);
        echo $updateItem ? 'ok' : 'err';die;
    } elseif ($_REQUEST['action'] == 'removeCartItem' && !empty($_REQUEST['id'])) {
        $deleteItem = $cart->remove($_REQUEST['id']);
        header("Location: viewcart.php");
    } elseif ($_REQUEST['action'] == 'placeOrder' && $cart->total_items() > 0 && !empty($_SESSION['sessCustomerID'])) {
        // insert order details into database
        $insertOrder = $db->query("INSERT INTO orders (customer_id, total_price, created, modified) VALUES ('" . $_SESSION['sessCustomerID'] . "', '" . $cart->total() . "', '" . date("Y-m-d H:i:s") . "', '" . date("Y-m-d H:i:s") . "')");

        if ($insertOrder) {
            $orderID = $db->insert_id;
            $sql = '';
            // get cart items
            $cartItems = $cart->contents();
            foreach ($cartItems as $item) {
                $sql .= "INSERT INTO order_items (order_id, product_id, quantity) VALUES ('" . $orderID . "', '" . $item['id'] . "', '" . $item['qty'] . "');";
            }
            // insert order items into database
            $insertOrderItems = $db->multi_query($sql);

            if ($insertOrderItems) {
                $cart->destroy();
                header("Location: orderSuccess.php?id=$orderID");
            } else {
                header("Location: checkout.php");
            }
        } else {
            header("Location: checkout.php");
        }
    } else {
        header("Location: index.php");
    }
} else {
    header("Location: index.php");
}
