
<!doctype html>
<html lang="zh-tw">
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <meta name="description" content="">
	    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
	    <meta name="generator" content="Jekyll v4.1.1">
	    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/dashboard/">
		<link href="./assets/bootstrap/bootstrap.min.css" rel="stylesheet">
<link href="./assets/jquery.fancybox.min.css" rel="stylesheet">
<SCRIPT src="./assets/jquery.fancybox.min.js"></SCRIPT>
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/axios/0.15.3/axios.min.js"></script>


	</head>
  <body>
	    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow" data-po="po1">
		  <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">Company name</a>

		</nav>

		<div class="container-fluid" id="app">
		   <h1 class="font-weight-light text-center text-lg-left mt-4 mb-0">設備展示</h1>
		   <input type="text"  v-model="loca" v-on:keyup.enter="loadimg">
		   <button v-on:click="loadimg" class="btn btn-primary">選擇</button>

  			<hr class="mt-2">
			<div class="row text-center text-lg-left" >
				
				<div class="col-lg-3 col-md-4 col-12 mb-3" v-for="photo in photos">
			      <a data-fancybox="gallery" :href="'./設備圖片/'+location+'/'+photo.item" >
			            <img class=" img-thumbnail" :src="'./設備圖片/'+location+'/'+photo.item" alt="">
			          </a>
			    </div>
			    	
			</div>
		</div>

 <script>
 	var app= new Vue({
 		el:"#app",
 		data:{
 			loca:"104",
 			location:"",
 			photos:[],
 		},
 		methods:{
 			loadimg:function(){
 				var vm = this
 				var bodyFormData=new FormData();
 				bodyFormData.append('location',this.loca);
 				this.location=this.loca;
 				axios({
 					method:"post",
 					data:bodyFormData,
 					url:'img_select.php',
 					headers:{'Content-Type':'multipart/formdata'}
 				}).then(function(response){
 					console.log(response);		
 					console.log(response.data[0]);		
 					vm.photos=response.data;

 				})
 				}
 			}
 	});
 </script>
</body>
</html>