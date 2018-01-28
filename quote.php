 <!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = $_GET["q"];
try {
$conn = new PDO("mysql:host=mysql.truman.edu;dbname=kd2331CS315", "kd2331", "eidoosis");
   // $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = "SELECT * FROM project1 WHERE products LIKE '%q%'"
    $stmt = $conn->prepare($query);
    $stmt->execute();
} catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
echo "<table>
<tr>
<th>ID</th>
<th>Name</th>
<th>E-Mail</th>
<th>Address</th>
<th>Zip</th>
<th>Phone</th>
</tr>";
while($row = $stmt->Fetch(PDO::FETCH_ASSOC)) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['mail'] . "</td>";
    echo "<td>" . $row['address'] . "</td>";
    echo "<td>" . $row['zip'] . "</td>";
    echo "<td>" . $row['phone'] . "</td>";
    echo "</tr>";
}
echo "</table>";
?>
</body>
</html>