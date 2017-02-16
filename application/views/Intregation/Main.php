<!--<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">-->
 
  <script src="<?php echo base_url();?>css/angular-ui-bootstrap-modal.js"></script>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" ng-controller="inregation">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>        
        <strong>Intregation</strong>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>  
        <li class="active">Intregation</li>
      </ol>
      <br/>       
    </section> 

 

    <!-- Main content -->
    <section class="content">
							<div modal="showModal" close="cancel()" class="modal-content">
									<div class="modal-header">
										<h4>Modal Dialog</h4>
									</div>
									<div class="modal-body">
										<p>Example paragraph with some text.</p>
									</div>
									<div class="modal-footer">
									  <button class="btn btn-success" ng-click="ok()">Okay</button>
									  <button class="btn" ng-click="cancel()">Cancel</button>
									</div>
						    </div>
	<div class="container">
			<div class="row row-centered">
			   
			  
			   <div class="col-xs-6 col-centered col-min">
			   <h3>Connect account with Revenue advizer</h3>
			   <div class="content">
			    <div class="row " style="border: 1px solid #ecf0f5;padding: 11px 5px 17px 20px;background: #d1d7de;">
					  <div class="col-sm-2"><i class="fa fa-shopping-cart fa-2x"></i></div>
					  <div class="col-sm-4">Shopify Store</div>
					  <div class="col-sm-6"><button ng-click="showComplex()">Connect Shopify Store</button></div>
					</div>
			      <div class="row " style="border: 1px solid #ecf0f5;padding: 11px 5px 17px 20px;background: #d1d7de;">
					  <div class="col-sm-2"><i class="fa fa-facebook-official fa-2x"></i></div>
					  <div class="col-sm-4">Facebook Account</div>
					  <div class="col-sm-6"><button>Connect Facebook Account</button></div>
			   </div>
					
			   </div>
			   
			   </div>
			   
			   <div class="col-xs-6 col-centered col-min">
			   <h3>Currently Intregated Account with Revenue advizer</h3>
			   <div class="content">
			    <div class="row " style="border: 1px solid #ecf0f5;padding: 11px 5px 17px 20px;background: #d1d7de;">
					  <div class="col-sm-2"><i class="fa fa-shopping-cart fa-2x"></i></div>
					  <div class="col-sm-4">Shopify Store</div>
					  <div class="col-sm-6"><button>Connect Shopify Store</button></div>
					</div>
			      <div class="row " style="border: 1px solid #ecf0f5;padding: 11px 5px 17px 20px;background: #d1d7de;">
					  <div class="col-sm-2"><i class="fa fa-facebook-official fa-2x"></i></div>
					  <div class="col-sm-4">Facebook Account</div>
					  <div class="col-sm-6"><button>Connect Facebook Account</button></div>
			   </div>
					
			   </div>
			   
			   </div>
			   
			   
			   
			</div>
    </div>
	
	<?php
/* 	
$shop = "alldayfreeshipping";
$api_key = "deca518b2c5181bb52090e5b9a52d256";
$scopes = "read_orders,write_products";
$redirect_uri = "http://localhost/generate_token.php";

// Build install/approval URL to redirect to
$install_url = "https://" . $shop . ".myshopify.com/admin/oauth/authorize?client_id=" . $api_key . "&scope=" . $scopes . "&redirect_uri=" . urlencode($redirect_uri);

// Redirect
header("Location: " . $install_url);
die();
  */
 
	?>
 
		
    </section>
    <!-- /.content -->
  </div>
  <script>
var app = angular.module("myApp", ["ui.bootstrap.modal"]);
app.controller("inregation", function($scope,$http) {
  
  $scope.showComplex = function () {
	  $scope.showModal = true;
  }
  $scope.ok = function() {
  $scope.showModal = false;
};

$scope.cancel = function() {
  $scope.showModal = false;
};
  
 /*  ModalService.showModal({
      templateUrl: "complex/complex.html",
      controller: "ComplexController",
      inputs: {
        title: "A More Complex Example"
      }
    }).then(function(modal) {
      modal.element.modal();
      modal.close.then(function(result) {
        $scope.complexResult  = "Name: " + result.name + ", age: " + result.age;
      });
    }); */
  
});
</script>
  <style>
.row-centered {
    text-align:center;
}
.col-centered {
    display:inline-block;
    float:none;
    /* reset the text-align */
   /* text-align:left;*/
    /* inline-block space fix */
   /* margin-right:-4px;*/
       margin-right: 16%;
}
.item {
    width:100%;
    height:100%;
	/*border:1px solid #cecece;*/
    padding:16px 8px;
	/*background:#ededed;
	background:-webkit-gradient(linear, left top, left bottom,color-stop(0%, #f4f4f4), color-stop(100%, #ededed));
	background:-moz-linear-gradient(top, #f4f4f4 0%, #ededed 100%);
	background:-ms-linear-gradient(top, #f4f4f4 0%, #ededed 100%);*/
}

/* content styles */
.item {
	display:table;
}


  </style>