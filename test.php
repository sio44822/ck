<?PHP
$servername = "localhost";
$username = "joomla";
$password = "ck2014";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

/*SQL query
$sql = "SELECT * FROM device";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo  $row["product"]. " | " . $row["product_type"]. " | " . $row["purchase_date"]. " | " . $row["supplier"]. " | " . $row["location"]. " | " . $row["remark"]. "<br>";
  }
} else {
  echo "0 results";
}
*/
 /*
  methods: {
    processForm: function() {
      //POST FORM
      var bodyFormData = new FormData()
      bodyFormData.append('name',this.name);

      
      axios({
        method:'post',
        url:'./sql_select.php',
        data:bodyFormData,
        headers:{'Content-Type':'multipart/formdata'}
      }).then(function(response){
        console.log("respone:");
        console.log(response);
      });
      
      //GET FORM
      
      axios({
        method:"get",
        url:"./sql_select.php",
        params:{
          name2:this.name
        }
      }).then(function(response){
        console.log(response);
      });
      
    }
    }
    */

$conn->close();

?>
<!doctype html>
<html lang="zh-tw">
<head>
	<!-- CSS only -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

	<!-- JS, Popper.js, and jQuery -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/dashboard/">
	<link href="../test/assets/bootstrap/bootstrap.min.css" rel="stylesheet">

      <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/axios/0.15.3/axios.min.js"></script>
<script src="../test/assets/bootstrap-bundle.js" ></script>

</head>
 <body>
<div id="app">
  <form  method="post" @submit.prevent="processForm">
<input type="text" v-model="name"/>
<input type="submit">
</form>
    </div>

 <script>
  
  var result
  var app =new Vue({
    el:"#app",
    data:{
      name : "",
    },

  });


</script>
</body>
</html>