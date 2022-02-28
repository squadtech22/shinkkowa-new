<?php

    session_start();
    if(!isset($_SESSION["user"])) {
        header("location: index.php");
    }
    
    $servername = "localhost";
    $username = "shinkyowa";
    $password = "h6Wlb@{RKqz(";
    $dbname = "shinkyowa";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    $stockType = $_GET['id'];
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "SELECT * from vehicle order by id desc";
    $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Cars List</title>
	<link rel="stylesheet" type="text/css" href="../stylesheet/bootstrap.min.css">
    <style>
        #cars {
          font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }
        
        #cars td, #cars th {
          border: 1px solid #ddd;
          padding: 8px;
        }
        
        #cars tr:nth-child(even){background-color: #f2f2f2;}
        
        #cars tr:hover {background-color: #ddd;}
        
        #cars th {
          padding-top: 12px;
          padding-bottom: 12px;
          text-align: left;
          background-color: #50B2FC;
          color: white;
        }

        #top
	    {
	        height: 120px;
	        display: block;
	        text-align: center;
	        line-height: 120px;
	        background-color: #50B2FC;
	        position: relative;
	    }
	    
	    #top img
	    {
	        height: 50px;
	        width: 300px;	        
	    }
	    
	    #top div a
        {
            display: block;
            background-color: #BDC3C7;
            width: 100px;
            text-decoration: none;
            color: white;
            border-radius: 4px;
            text-align: center;
            height: 35px;
            line-height: 35px;
            font-weight: bold;
            font-size: 16px;
            margin-bottom: 15px;
            position: absolute;
            top: 5px;
            right: 5px;
        }
        
        #top div a:hover
        {
            background-color: #A6ACAF;
        }

    </style>
</head>

<body>
    
    <div id="top">
        <img src="../images/logo.png">
        <div style="padding-bottom: 5px;">
        <a href="action.php">Home</a>
        </div>
    </div>
    
<table id="cars">
<tr>
<th>Chasis No</th>
<th>Make</th>
<th>Model</th>
<th>Year</th>
<th>Milage</th>
<th>Color</th>
<th>Country Stock</th>
<th>Stock Type</th>
<th>Pricefob</th>
<th>Enabled</th>
</tr>

<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
if($i%2==0)
$classname="even";
else
$classname="odd";
?>
<tr>
<td><?php echo $row["chasisno"]; ?></td>
<td><?php echo $row["make"]; ?></td>
<td><?php echo $row["model"]; ?></td>
<td><?php echo $row["year"]; ?></td>
<td><?php echo $row["milage"]; ?></td>
<td><?php echo $row["color"]; ?></td>
<td><?php echo $row["countrystock"]; ?></td>
<td><?php echo $row["stocktype"]; ?></td>
<td><?php echo $row["pricefob"]; ?></td>
<td><?php echo $row["enabled"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>

</body>
</html>