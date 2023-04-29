<!DOCTYPE html>
<html>
<title>DATA</title>
<style>
    table {
    
    border-collapse: collapse;
    width: 100%;
    color: #8B008B;
    font-family: "Gabriola";
    font-size: 25px;
    text-align: center;
    }
    th {
    background-color: #FFB6C1;
    color: #4B0082;
    }
    tr:nth-child(even) {background-color: #FFEFD5}
    tr:nth-child(odd) {background-color: #D8BFD8}
</style>
</head>
<body>

<table>
    <tr>
        <th>ID</th>
        <th>STATUS</th>
        <th>DATE</th>
        <th>TIME</th>
    </tr>
    <?php
    session_start();
    include "dbconnect.php";
    $sql= "SELECT id,status,date,time from sensorstt";
    $result= $conn-> query($sql);
    if($result->num_rows>0)
    {
        while($row = $result ->fetch_assoc())
        {
            echo "<tr><td>".$row["id"]."</td><td>"
                           .$row["status"]."</td><td>"
                           .$row["date"]."</td><td>"
                           .$row["time"]."</td></tr>";

        }
        echo "</table>";
    }
    else{
        echo "0 result>";
    }
    $conn-> close();
    ?>
    <a href="logout.php">Logout</a>
</table>
</body>
</html>