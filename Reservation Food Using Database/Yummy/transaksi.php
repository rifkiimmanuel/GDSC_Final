<?php
// Create database connection using config file
include_once("config.php");

// Fetch all unpaid orders
$sql = "SELECT order_detail.order_id, order_detail.total_order, order_detail.order_unit_price, reservation.Name_cust, order_detail.food_id, order_detail.reservation_id, order_detail.payment, order_detail.ChangeMoney, order_detail.status, reservation.table_id
        FROM order_detail
        JOIN reservation ON order_detail.reservation_id = reservation.reservation_id
        WHERE order_detail.status = 'notyetpaid'";
$result = mysqli_query($conn, $sql);
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>TRANSAKSI</title>
</head>
<body>
    <h2>belum bayar</h2>
    <table border="1">
        <tr>
            <th>Table Number</th>
            <th>Pemesan</th>
            <th>Price</th>
            <th> transaksi</th>
        </tr>
        <?php
        while ($order_detail = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $order_detail['table_id'] . "</td>";
            echo "<td>" . $order_detail['Name_cust'] . "</td>";
            echo "<td>" . $order_detail['order_unit_price'] . "</td>";
            echo "<td><a href='indextransaksi.php?ID=" . $order_detail['order_id'] . "'>Transaksi</a> |</td>";
            echo "</tr>";
        }
        ?>
    </table>
<br>
    </br>
    <?php
    // Fetch all paid orders
    $sql = "SELECT order_detail.order_id, order_detail.total_order, order_detail.order_unit_price, reservation.Name_cust, order_detail.food_id, order_detail.reservation_id, order_detail.payment, order_detail.ChangeMoney, order_detail.status, reservation.table_id
            FROM order_detail
            JOIN reservation ON order_detail.reservation_id = reservation.reservation_id
            WHERE order_detail.status = 'alredypay'";
    $result = mysqli_query($conn, $sql);
    ?>
    
    <h2>Riwayat Transaksi</h2>
    <table border="1">
        <tr>
            <th>Reservation ID</th>
            <th>Pemesan</th>
            <th>Price</th>
            <th>Nomor Meja</th>
        </tr>
        <?php
        while ($order_detail = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $order_detail['reservation_id'] . "</td>";
            echo "<td>" . $order_detail['Name_cust'] . "</td>";
            echo "<td>" . $order_detail['order_unit_price'] . "</td>";
            echo "<td>" . $order_detail['table_id'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
