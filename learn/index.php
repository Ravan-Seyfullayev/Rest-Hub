<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rest Hub</title>
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Password</th>
        </tr>
        <?php 
    $conn = mysqli_connect('localhost', 'root', '', 'table_learn'); 
    $sql = "SELECT id, name, password from table_learn";    
    $result = $conn-> query($sql);
     if ($result-> num_rows > 0){
         while ($row = $result-> fetch_assoc()) {
             echo "<tr><td>". $row["id"]. "</td><td>". $row["name"] . "</td><td>". $row["password"]. "</td></tr>";  
         }
         echo "</table>";
     }
     else {
         echo "0 result";
     }
     $conn-> close();
?>
<div class="main">
</div>
    </table>

</body>

</html>