<?PHP
function fullsql(){
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}

		$tag="";
		$product="";
		$product_type="";
		$purchase_date="";
		$supplier="";
		$location="";
		/*
	    $sql = "SELECT * FROM device where `tag` like `%%` and `product` like `%%` and `product_type` like `%%` and `purchase_date` like `%%` and `supplier` like `%%` and `location` like `%%` ";
	    */
	    $sql = "SELECT * FROM device ;";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
		  // output data of each row
		  
		  while($row = $result->fetch_assoc()) {
		    echo  "<tr><td>".$row["tag"]. "</td>" ."<td>".$row["product"]. "</td>" ."<td>".$row["product_type"]. "</td>" ."<td>".$row["purchase_date"]. "</td>" ."<td>".$row["supplier"]."<td>".$row["location"]. "</td></tr>";
		  }

		} else {
		  echo "0 results";
		}
		$conn->close();
}



?>