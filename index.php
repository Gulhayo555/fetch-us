<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body >
<h2>Ro'yxat</h2>




<?
    $host = "localhost";
    $dbname = "registr";
    $dbuser= "root";
    $pass = "";
    
    $conn = new mysqli($host, $dbuser, $pass, $dbname);


    if ($conn->connect_error){
        die("ulanishda xato :" . $conn->connect_error);
    } 
    $sql = "SELECT * FROM  users";
    $result = $conn->query($sql);

    while ($row=$result->fetch_assoc()) {
        
     echo "<tr>
             <td>" . $row["id"] ."</td><br/>
             <td>Ismi:  " . $row["name"] . "</td><br/>
             <td>Familyasi:  " . $row["lastN"] . "</td><br/>
             <td>yo'nalishi:  " . $row["course"] . "</td><br/>
             </tr>";
    }


?>    

</body>
</html>