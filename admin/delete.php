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
    
    $id = $_GET['id'];
    
    $sql = "DELETE FROM vehicle_details WHERE vehicleid = '$id'";
    $conn->query($sql);
    
    $sql = "DELETE FROM stock_type WHERE vehicleid = '$id'";
    $conn->query($sql);
    
    $sql = "DELETE FROM stock_country WHERE vehicleid = '$id'";
    $conn->query($sql);
    
    $sql = "DELETE FROM offers WHERE vehicleid = '$id'";
    $conn->query($sql);
    
    $sql = "SELECT * FROM images WHERE vehicleid = '$id'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        unlink('../upload/'.$row['image']);
      }
    }
    
    $sql = "DELETE FROM images WHERE vehicleid = '$id'";
    $conn->query($sql);
    
    $sql = "DELETE FROM vehicle WHERE id = '$id'";

    if ($conn->query($sql) === TRUE) {
		echo "<script> alert ('Car record deleted!'); </script>";
		
		echo "<script>window.location = 'retrieve.php';</script>";
		
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

?>