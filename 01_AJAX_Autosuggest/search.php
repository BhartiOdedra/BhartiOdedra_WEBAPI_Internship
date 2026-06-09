<?php
include("db.php");
$mode = isset($_GET['mode']) ? $_GET['mode'] : '';

if($mode == '')
{
    exit("Please select a mode");
}

$mode = $_GET['mode'];

$query = "SELECT * FROM internship WHERE mode='$mode'";

$result = mysqli_query($conn,$query);

echo "<table border='1' cellpadding='10'>";
echo "<tr>";
echo "<th>Name</th>";
echo "<th>Email</th>";
echo "<th>Contact</th>";
echo "<th>Mode</th>";
echo "</tr>";

while($row = mysqli_fetch_assoc($result))
{
    echo "<tr>";
    echo "<td>".$row['stud_name']."</td>";
    echo "<td>".$row['email']."</td>";
    echo "<td>".$row['contact']."</td>";
    echo "<td>".$row['mode']."</td>";
    echo "</tr>";
}
echo "</table>";

?>