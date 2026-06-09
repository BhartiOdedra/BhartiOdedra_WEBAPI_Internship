<?php

$conn = mysqli_connect("localhost","root","","intern");

$sql = "SELECT * FROM product";
$result = mysqli_query($conn,$sql);

$xml = new DOMDocument("1.0","UTF-8");
$xml->formatOutput = true;

$products = $xml->createElement("products");
$xml->appendChild($products);

while($row = mysqli_fetch_assoc($result))
{
    $product = $xml->createElement("product");

    $product->appendChild(
        $xml->createElement("pid",$row['pid'])
    );

    $product->appendChild(
        $xml->createElement("pname",$row['pname'])
    );

    $product->appendChild(
        $xml->createElement("price",$row['price'])
    );

    $product->appendChild(
        $xml->createElement("qty",$row['qty'])
    );

    $products->appendChild($product);
}

$xml->save("products.xml");

echo "<h2>XML File Created Successfully</h2>";
echo "<a href='products.xml'>View XML File</a>";

?>