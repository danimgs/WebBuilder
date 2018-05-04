<?php
/*
Developer:  Ehtesham Mehmood
Site:       PHPCodify.com
Script:     Angularjs Login Script using PHP MySQL and Bootstrap
File:       index.php
 */
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="robots" content="noindex">
        <title>Angularjs Login Script using PHP MySQL and Bootstrap</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>

    </head>
<body ng-app="AngularJSLogin" ng-controller="AngularLoginController as angCtrl">

  <div class="container">
      <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
          
          <div class="panel panel-info" >
          <!--slider-->
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img class="d-block w-100" src="./imagenes/slider1.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="./imagenes/slider2.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="./imagenes/slider3.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            </div>

                  <div class="panel-heading">
                      <div class="panel-title text-center">INICIO DE SESION BETBUILDER</div>

                  </div>

                  <div style="padding-top:30px" class="panel-body" >
                  
                      <form name="login" ng-submit="angCtrl.loginForm()" class="form-horizontal" method="POST">
                        <!-- <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default"><h3>@</h3></span>
                            </div>
                            <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                        </div> -->
                        <div class="input-group input-group-lg mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-lg"><h3>@</h3></span>
                            </div>
                            <input type="text" class="form-control" aria-label="Large" placeholder="Email" aria-describedby="inputGroup-sizing-sm" required autofocus ng-model="angCtrl.inputData.email">
                        </div>

                          <!-- <div style="margin-bottom: 25px" class="input-group">
                                      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                      <input type="email" id="inputemail" class="form-control" required autofocus ng-model="angCtrl.inputData.email">
                          </div> -->
                          <div class="input-group input-group-lg mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><img src="./imagenes/password.jpg" width="20px" heigth="20px"></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1" required ng-model="angCtrl.inputData.password">
                        </div>

                          <!-- <div style="margin-bottom: 25px" class="input-group">
                                      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                      <input type="password" id="inputpassword" class="form-control" required ng-model="angCtrl.inputData.password">
                          </div> -->
                          <div class="form-group">
                              <!-- Button -->
                              <div class="col-sm-12 controls">
                                  <button type="submit" class="btn btn-primary pull-left"><i class="glyphicon glyphicon-log-in"></i> Log in</button>
                              </div>
                          </div>
                              <div class="alert alert-danger" ng-show="errorMsg">
                                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                      ×</button>
                                  <span class="glyphicon glyphicon-hand-right"></span>&nbsp;&nbsp;{{errorMsg}}
                              </div>
                          </form>
                      </div>
                  </div>
      </div>
  </div>
<script>
	angular.module('AngularJSLogin', [])
	.controller('AngularLoginController', ['$scope', '$http', function($scope, $http) {
		this.loginForm = function() {

			var user_data='user_email=' +this.inputData.email+'&user_password='+this.inputData.password;

			$http({
				method: 'POST',
				url: 'login.php',
				data: user_data,
				headers: {'Content-Type': 'application/x-www-form-urlencoded'}
			})
			.success(function(data) {
        console.log(data);
				if ( data.trim() === 'correct') {
					window.location.href = 'welcome_dashboard.html';
				} else {
					$scope.errorMsg = "Invalid Email and Password";
				}
			})
		}

	}]);
	</script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    </body>
</html>
