 <!DOCTYPE html>
<html>
<head>
<title>Person Detail</title>
<meta charset="utf-8" />
</head>
<body>
<?php
function out_put(){
    $conn = new PDO("mysql:host=mysql.truman.edu;dbname=kd2331CS315", "kd2331", "eidoosis");
   // $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM test ORDER BY Age");
    $stmt->execute();
     
    echo <<<END

     <p>Here are all the person sorted by Age:</p>

    <table>
    <tr>
    <th>ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Age</th>
    </tr>
END;

        while ( $row = $stmt->Fetch(PDO::FETCH_ASSOC))
      // This magically sets $xyz to the value of the column named
          // xyz in the current query.
          // extract($row);
          // If extract is not used, achieve the same effect by doing
          //  $row["xyz"]
          // Also, mysql_fetch_row returns a regular positional array
          // instead of an associative array.

{

    print "<tr><td>{$row['ID']}</td><td>{$row['FirstName']}</td><td>{$row['LastName']}</td><td>{$row['Age']}</td></tr>";
      }
    print "</table>";
}
out_put();
?>
</body>
</html> 
