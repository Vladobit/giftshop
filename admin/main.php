<?php

session_start();
if (($_SESSION['login_status'] == "false") || ($_SESSION['login_id'] =="")){
    header('location:./index.html');exit();}


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Giftshop A/B Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--povikan gotov CSS Bootstrap-->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <!--Angular script --->
  <script src="assets/js/angular.min.js"></script>
  <script src="assets/js/angular-route.js"></script>
  <script src="assets/js/app.js"></script>
  <script src="assets/js/routes.js"></script> 

</head>
<body ng-app="myApp" ng-controller="myCtrl">
<header>
  
  <nav class="navbar navbar-expand-sm navbar-dark" style="background-color:darkslateblue;">
    <!-- Brand -->
    <img class="img-thumbnail " style="width: 120px;" src="logot1.png" alt="Logo">
  
      <!-- Links -->
      <ul class="navbar-nav" style="font-size: 1.5rem;">
      <!-- <li class="nav-item"><a class="nav-link" href="#!alerts">Alerts</a></li>
      <li class="nav-item"><a class="nav-link" href="#!button">Button</a></li> -->
         
      <!-- Dropdown Primac -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Primac</a>
        <div class="dropdown-menu">
        <a class="dropdown-item" href="#!primac">Primac</a>
        <a class="dropdown-item" href="#!details_primac">Nov Primac</a></div></li>
       
        <!-- Dropdown Users -->
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Users</a>
        <div class="dropdown-menu">
        <a class="dropdown-item" href="#!users">User List</a>
        <a class="dropdown-item" href="#!details_users">New Users</a></div></li>

        <!-- Dropdown City -->
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Cities</a>
        <div class="dropdown-menu">
        <a class="dropdown-item" href="#!city">City List</a>
        <a class="dropdown-item" href="#!details_city">New City</a></div></li>
      
  
      <!-- Dropdown category -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Category</a>
        <div class="dropdown-menu">
        <a class="dropdown-item" href="#!category">Categories</a>
        <a class="dropdown-item" href="#!details_category">New Category</a></div></li>
         
        <!-- Dropdown company -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Company</a>
        <div class="dropdown-menu">
        <a class="dropdown-item" href="#!company">Companies</a>
        <a class="dropdown-item" href="#!details_company">New Company</a></div></li>

         <!-- Dropdown prodazba -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Prodazba</a>
        <div class="dropdown-menu">
        <a class="dropdown-item" href="#!prodazba">Prodazba</a>
        <a class="dropdown-item" href="#!details_">New Company</a></div></li>
     
        <!-- Dropdown product -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Products</a>
        <div class="dropdown-menu">
        <a class="dropdown-item" href="#!products">Products</a>
        <a class="dropdown-item" href="#!details_products">New Product</a></div></li>
          <!--Login out button-->
        <li class="float-right mt-2">
          
          <button type="submit" class="btn mb-2 text-white font-weight-bold" style="background-color: rebeccapurple;" ng-click="logout_function()">Login</button></li>
    </ul>
    </ul>
      </ul>
  </nav>
</header>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
          <div ng-view></div>
        </div><!--end col-sm-12-->
    </div><!--end row-->
</div><!-- end container-fluid-->

 

<footer>
</footer>

</body>
</html>