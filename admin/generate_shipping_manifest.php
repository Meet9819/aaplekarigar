<?php
session_start();

if (!isset($_SESSION["username"]) || $_SESSION["username"] !== "sadhana")    {
    die();
}

$billno = $_GET["billno"];

if(empty($billno) && !isset($billno))   {
    die();
}

require_once "db.php";

// set today's date
date_default_timezone_set('Asia/Kolkata');
$current_date = date('d/m/y');

$query = "SELECT `user`, `awb_no`, `credit_ref`, `state` FROM `bluedart` where `credit_ref` IN (";

foreach($billno as $val)   {
    $query .= "\"" . $val . "\",";
}

$query = substr_replace($query ,"", -1);
$query .= ")";

$awb = mysqli_query($con, $query);

?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <base href="/admin/">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>
            Shipping Manifest-<?php echo $current_date; ?>
        </title>
        <style>
            @font-face {
                font-family: '3Of9Barcode';
                src: url('assets/fonts/3of9/3of93Of9Barcode.eot?#iefix') format('embedded-opentype'), url('assets/fonts/3of9/3Of9Barcode.woff') format('woff'), url('assets/fonts/3of9/3Of9Barcode.ttf') format('truetype'), url('assets/fonts/3of9/3Of9Barcode.svg#3Of9Barcode') format('svg');
                font-weight: normal;
                font-style: normal;
            }
            
            @media print {
                @page   {
                    margin: 0;
                }
                
                body { 
                    font-size: 10px !important;
                }
                
                #print-btn {
                    display: none;
                }
            }
        </style>
    </head>
    <body style="font-family: Helvetica Narrow, sans-serif; font-size: 14px;">
        <div>
            <table style="table-layout: fixed; border: 2px solid black; padding: 1rem;">
                <tr>
                    <td>
                        <!--general info table-->
                        <table style="table-layout: fixed; border-collapse: collapse; width: 100%;">
                            <thead>
                                <tr>
                                    <th style="width: 10%; border: 1px solid black; padding: 5px;">Manifest sheet for: Grocer Point</th>
                                    <th style="width: 10%; border: 1px solid black; padding: 5px;">Date:   <?php echo $current_date; ?></th>
                                    <th style="width: 10%; border: 1px solid black; padding: 5px;">Courier: BlueDart</th>
                                    <th style="width: 10%; border: 1px solid black; padding: 5px;">Generated By: Akshay Vora</th>
                                </tr>
                            </thead>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <!--shipping maifest table-->
                        <table style="table-layout: fixed; border-collapse: collapse; width: 100%; margin-top: 2rem; text-align: center;">
                            <thead>
                                <tr>
                                    <th style="width: 3%; border: 1px solid black; padding: 2px;">Sr No.</th>
                                    <th style="width: 10%; border: 1px solid black; padding: 2px;">AWB No.</th>
                                    <th style="width: 6%; border: 1px solid black; padding: 2px;">Reference No.</th>
                                    <th style="width: 10%; border: 1px solid black; padding: 2px;">Attention</th>
                                    <th style="width: 5%; border: 1px solid black; padding: 2px;">State</th>
                                    <th style="border: 1px solid black; padding: 2px;">Contents</th>
                                    <th style="width: 4%; border: 1px solid black; padding: 2px;">Weight (kg)</th>
                                    <th style="width: 5%; border: 1px solid black; padding: 2px;">Product Type</th>
                                    <th style="border: 1px solid black; padding: 2px;">Barcode (AWB No.)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $count=1;
                                    while($row = mysqli_fetch_array($awb))  {
                                        echo "<tr>";
                                        echo "<td style=\"width: 3%; border: 1px solid black; padding: 2px;\">" . $count . "</td>";
                                        echo "<td style=\"width: 10%; border: 1px solid black; padding: 2px;\">" . $row["awb_no"] . "</td>";
                                        echo "<td style=\"width: 6%; border: 1px solid black; padding: 2px;\">". $row["credit_ref"] . "</td>";
                                        echo "<td style=\"width: 10%; border: 1px solid black; padding: 2px;\">" . $row["user"] . "</td>";
                                        echo "<td style=\"width: 5%; border: 1px solid black; padding: 2px;\">" . $row["state"] . "</td>";
                                        echo "<td style=\"border: 1px solid black; padding: 2px;\">";
                                        $orders = mysqli_query($con, "SELECT `name` FROM `o` WHERE `billno`=" . $row["credit_ref"]);
                                        while($inner_row = mysqli_fetch_array($orders)) {
                                            echo $inner_row["name"] . ",<br />";
                                        }
                                        echo "</td>";
                                        echo "<td style=\"width: 4%;border: 1px solid black; padding: 2px;\">0.1</td>";
                                        echo "<td style=\"width: 5%; border: 1px solid black; padding: 2px;\">product</td>";
                                        echo "<td style=\"border: 1px solid black; padding: 2px;\"><span style=\"font-family: '3Of9Barcode'; font-size: 1.7rem\">" . $row["awb_no"] . "</span></td>";
                                        echo "</tr>";
                                        ++$count;
                                    }
                                ?>
                            </tbody>
                        </table>    
                    </td>
                </tr>
            </table>
        </div>
        <div style="margin: 3rem;display: flex;align-items: center;justify-content: center;">
            <button id="print-btn" style="font-size: 2rem;" onclick="window.print();">Print Label</button>
        </div>
    </body>
</html>