<?PHP
include 'mysql_conf.php';

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
$conn->close();
*/



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
		<link href="./test/assets/bootstrap/bootstrap.min.css" rel="stylesheet">
		<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
		<script src="./assets/jquery/jquery-3.5.1.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.15.3/axios.min.js"></script>

	


	    <style>


	    </style>
	    <!-- Custom styles for this template -->



	</head>
  <body>

	    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow" data-po="po1">
		  <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">資訊設備</a>
		  		  <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="../test/imgpage.php">PICUTRE</a>
		</nav>


		<div class="container-fluid" id="app">
		  <div class="row">
		    <div class="col-lg-12 table-responsive">
		        <table class="table table-striped table-sm table-hover " name="devicetable">
			        <thead >
			            <tr>
			            	<th v-for="header in headers">
			            		{{header.text}}
			            	</th>
			            </tr>
			            <tr>
			            	<th>
			            		<input type="text" class="form-control form-control-sm"   v-model="location" v-on:keyup.enter="search">
			            	</th>
			            	<th >
			            		<input type="text" class="form-control form-control-sm" v-model="tag" v-on:keyup.enter="search">
			            	</th>
			            	<th>
			            		<input type="text" class="form-control form-control-sm" v-model="product" v-on:keyup.enter="search">
			            	</th>
			            	<th>
			            		<input type="date" v-model="purchase_date" v-on:keyup.enter="search" class="form-control form-control-sm"></th>
			            	<th>
			            		<input type="text" v-model="supplier" v-on:keyup.enter="search" class="form-control form-control-sm"></th>
			            	<th><button v-on:click="search" class="btn btn-primary">search</button><button v-on:click="search" class="btn btn-success" >全部</button></th>
			            </tr>
			        </thead>
		            <tbody id="tbody">
			            <?php
/*			          	    $sql = "SELECT * FROM device;";
							$result = $conn->query($sql);
							if ($result->num_rows > 0) {
							  // output data of each row
							  while($row = $result->fetch_assoc()) {
							    echo  "<tr><td>".$row["tag"]. "</td>" ."<td>".$row["product"]. "</td>" ."<td>".$row["product_type"]. "</td>" ."<td>".$row["purchase_date"]. "</td>" ."<td>".$row["supplier"]."<td>".$row["location"]. "</td></tr>";
							  }
							} else {
							  echo "0 results";
							}
							$conn->close();*/
			            ?> 
		          	</tbody>
		        	</table>
		 		</div>
		 	</div>
				<div class="col-lg-12">
					<?PHP
						/*
						$tag="123";
						$product="456";
						$product_type="";
						$purchase_date="";
						$supplier="";
						$location="";

						if ((empty($tag)&&empty($product)&&empty($product_type)&&empty($purchase_date)&&empty($supplier)&&empty($location))==0){
							$sql = "SELECT * FROM device where ";
							if(empty($tag)==0)
								$sql=$sql."`tag` like `%".$tag."%` ";
							//and `product` like `%%` and `product_type` like `%%` and `purchase_date` like `%%` and `supplier` like `%%` and `location` like `%%` ";
							if(empty($product)==0)
								$sql=$sql."`product` like `%".$product."%` ";
							$sql=$sql.";";
						}else{
							$sql = "SELECT * FROM device ;";
						}
						    	echo $sql;
						    	echo "</br>";
						    	$sql=$sql."abc";
						    	echo $sql;
						    	echo "</br>";*/

					?>
					
				</div>
		</div>

<script>
	//var device='[{"id":"1","tag":"CKS02222","product":"DELL OptiPlex 9020 SFF","product_type":"\u672a\u6709","purchase_date":"2014-08-20","supplier":"\u601d\u7dad","location":"101 \u6559\u52d9\u8655","remark":""},{"id":"2","tag":"CKS02219","product":"DELL OptiPlex 9020 SFF","product_type":"none","purchase_date":"2014-08-20","supplier":"\u601d\u7dad","location":"101 \u6559\u52d9\u8655","remark":""}]';

			            	var app =new Vue({
			            		el:"#app",
			            		data:{
			            			headers:[
			            				{text:"位置"},
			            				{text:"編號"},
			            				{text:"型號"},
										//{text:"類別"},
			            				{text:"購買日期"},
			            				{text:"供應商"},
			            				{text:""},
			            			],		          					
			            			tag:"",
			            			product:"",
			            			//product_type:"",
			            			purchase_date:"",
			            			supplier:"",
			            			location:""
		          				
			            		},
			            		methods:{
			            			search:function(){
			            				var bodyFormData = new FormData();
      									bodyFormData.append('tag',this.tag);
      									bodyFormData.append('product',this.product);
      									bodyFormData.append('purchase_date',this.purchase_date);
      									bodyFormData.append('supplier',this.supplier);
      									bodyFormData.append('location',this.location);
			            				axios({
									        method:'post',
									        data:bodyFormData,
									        url:'./sql_select.php',
									        //data:bodyFormData,
									        headers:{'Content-Type':'multipart/formdata'}
									      }).then(function(response){
									        console.log("respone:");
									        //console.log(response.data);
									        document.getElementById('tbody').innerHTML=response.data;
  

									      });
			            			}
			            		}
			            	});


</script>

</body>
</html>