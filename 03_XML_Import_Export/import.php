<?php
$xml = simplexml_load_file("products.xml");
?>

<!DOCTYPE html>
<html>
<head>
    <title>XML Import</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>XML Data</h2>

<table>

<tr>
    <th>ID</th>
    <th>Product Name</th>
    <th>Price</th>
    <th>Qty</th>
</tr>

<?php

foreach($xml->product as $row)
{
?>

<tr>
    <td><?php echo $row->pid; ?></td>
    <td><?php echo $row->pname; ?></td>
    <td><?php echo $row->price; ?></td>
    <td><?php echo $row->qty; ?></td>
</tr>

<?php
}
?>

</table>

</body>
</html>