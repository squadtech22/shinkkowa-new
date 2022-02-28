<?php 
	class DbConnect {
		private $host = 'localhost';
		private $dbName = 'shinkyowa';
		private $user = 'shinkyowa';
		private $pass = 'h6Wlb@{RKqz(';

		public function connect() {
			try {
				$conn = new PDO('mysql:host=' . $this->host . '; dbname=' . $this->dbName, $this->user, $this->pass);
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				return $conn;
			} catch( PDOException $e) {
				echo 'Database Error: ' . $e->getMessage();
			}
		}
	}
	
	if(isset($_POST['make'])) {
		$db = new DbConnect;
		$conn = $db->connect();
        
        $make = $_POST['make'];
        
		$stmt = $conn->prepare("SELECT DISTINCT model from vehicle WHERE make = '$make'");
		$stmt->execute();
		
		$models = $stmt->fetchAll(PDO::FETCH_ASSOC);
		
		foreach($models as $model) {
		    echo "<option>".$model['model']."</option>";
		}
	}
	
	if(isset($_POST['model'])) {
		$db = new DbConnect;
		$conn = $db->connect();
        
        $model = $_POST['model'];
        
		$stmt = $conn->prepare("SELECT DISTINCT year from vehicle WHERE model = '$model'");
		$stmt->execute();
		
		$years = $stmt->fetchAll(PDO::FETCH_ASSOC);
		
		foreach($years as $year) {
		    echo "<option>".$year['year']."</option>";
		}
	}
	
	if(isset($_POST['year'])) {
		$db = new DbConnect;
		$conn = $db->connect();
        
        $year = $_POST['year'];
        
		$stmt = $conn->prepare("SELECT DISTINCT color from vehicle WHERE year = '$year'");
		$stmt->execute();
		
		$colors = $stmt->fetchAll(PDO::FETCH_ASSOC);
		
		foreach($colors as $color) {
		    echo "<option>".$color['color']."</option>";
		}
	}
	
	if(isset($_POST['color'])) {
		$db = new DbConnect;
		$conn = $db->connect();
        
        $color = $_POST['color'];
        
		$stmt = $conn->prepare("SELECT DISTINCT countrystock from vehicle WHERE color = '$color'");
		$stmt->execute();
		
		$countries = $stmt->fetchAll(PDO::FETCH_ASSOC);
		
		foreach($countries as $country) {
		    echo "<option>".$country['countrystock']."</option>";
		}
	}
	
	function loadMakes() {
		$db = new DbConnect;
		$conn = $db->connect();

		$stmt = $conn->prepare("SELECT DISTINCT make from vehicle order by make asc");
		$stmt->execute();
		$makes = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $makes;
	}
 ?>