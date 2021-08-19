<?php

session_start();
if (($_SESSION['login_status'] == "false") || ($_SESSION['login_id'] == "")) {
  header('location:./index.html');
  exit();
}

?>
<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Giftshop</title>




  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

  <!--  Bootstrap css file  -->
  <link rel="stylesheet" href="./assets/css/bootstrap.min.css">

  <!--  font awesome icons  -->
  <!-- <link rel="stylesheet" href="./assets/css/all.min.css"> -->

  <!--  custom css file  -->
  <link rel="stylesheet" href="./assets/css/style.css">
  <script src="./assets/js/jquery.min.js"></script>

  <!--  Bootstrap js file  -->
  <script src="./assets/js/bootstrap.min.js"></script>

  <!---Angular JS-->
  <script src="./admin/assets/js/angular.min.js"></script>
  <script src="./assets/js/angular-route.js"></script>
  <script src="./assets/js/app.js"></script>
  <script src="./assets/js/routes.js"></script>
  <script src="./assets/js/popper.min.js"></script>

</head>

<body ng-app="myApp" ng-controller="myCtrl">


  <!--  ======================= Start Header Area ============================== -->
  <header data-spy="scroll" data-target=".izbor" class="header_area ">
    <div class="row" style="background-color:darkslateblue;">
      <div class="col-md-7 d-flex">
        <a href="" class="text-white font-weight-bold mt-1 ml-3" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fas fa-user mx-2"></i>{{translate_word[0].Regitration}}</a>
        <input type="username" class="form-control-sm w-25 mt-1 ml-1" name="user_first_name" placeholder="username" id="user_first_name" ng-model="user_first_name">
        <input type="password" class="form-control-sm w-25 mt-1 ml-1" name="user_password" placeholder="password" id="user_password " ng-model="user_password">
        <button type="submit" class="btn  mb text-white font-weight-bold" ng-click="login_function(user_first_name,user_password)">{{translate_word[0].Login}}</button>
      </div>
      <div class="col-md-5">
        <a href="" class=" float-right text-white font-weight-bold mt-1 mr-3">{{translate_word[0].Help}}</a>
        <img ng-click="translate('MKD')" class="mt-0 ml-1" src="./uploads/mf32.png" alt="mk flag">
        <img ng-click="translate('ENG')" class="mt-0" src="./uploads/uk32.png" alt="uk flag">
        <a href="#" class=" float-right text-white font-weight-bold mt-1 ml-1 mr-5"><i class="fas fa-shopping-cart mx-2"></i>{{translate_word[0].Cart}}</a>
      </div>
    </div>
    <div class="row flex-row">
      <div class="col-md-4">
        <img src="./uploads/logot1.png" alt="logo">
      </div>
      <div class="col-md-8 text-center font-weight-bolder font-italic mt-2">
        <h2 style="color:#8c3897; font-size: 3rem;">ПРОНАЈДЕТЕ СОВРШЕН ПОДАРОК ВО СЕКОЕ ВРЕМЕ</h2>
      </div>
    </div>
    <div class="row flex-row" style="background-color:#8c3897">
      <div class="col-md-6 text-center font-weight-bolder font-italic mt-2 justify-content-center">
        <label style="text-decoration: none;font-size: xx-large;color:white;margin-right: 20px;">Select:</label>
        <a href="#!main" style="text-decoration: none;font-size: xx-large;color:white;margin-right: 20px;">All Products</a>
        <a href="#!topdeals" style="text-decoration: none;font-size: xx-large;color:white;margin-right: 20px;">Top Deals</a>
        <a href="#!topproducts" style="text-decoration: none;font-size: xx-large;color:white; margin: 5px;">Top Products</a>
      </div>
    </div>

  </header>
  <!--  =============xx========== End Header Area ===============xx=============== -->
  <!--  ======================== Start Baner Area ============================== -->
  <div id="carouselExampleSlidesOnly" class="carousel slide mb-1 mt-1" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="card-deck">
          <div class="row mx-auto" ng-repeat="company in company">
            <div class="card">
              <img src="./uploads/{{company.company_logo}}" class="img-thumbnail" alt="logo1">
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="card-deck">
          <div class="row mx-auto" ng-repeat="company in company">
            <div class="card">
              <img src="./uploads/{{company.company_logo}}" class="img-thumbnail" alt="...">
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="card-deck">
          <div class="row mx-auto" ng-repeat="company in company">
            <div class="card">
              <img src="./uploads/{{company.company_logo}}" class="img-thumbnail" alt="...">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-12 text-center font-weight-bolder font-italic mt-2" style="background-color:#8c3897">
    <h1 style="color:white">ИСПОРАКА НА ПОДАРОЦИ НИЗ ЦЕЛА МАКЕДОНИЈА</h1>
  </div>
  <!--  =============xx========== End Baner Area ===============xx=============== -->

  <main class="site-main">
    <!--  ======================= Start Main Area ================================ -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12">
          <div ng-view>
            <!--  ======================== Product Area ==============================  -->
            <div style="background-color:#8c3897">
              <h2 style="margin: 5px;color: white;font-size:3rem;padding: 2px;"> All Products</h2>
            </div>



            <div class="row mx-auto justify-content-around">
              <div class="col-md-3" ng-repeat="products in products | filter :{category_id:SearchBycategory_id}">
                <div class="card mb-2" style="width: 18rem;">
                  <img class="card-img-top img-thumbnail" src="./uploads/{{products.product_cover}}" alt="Card Logo">
                  <div class="card-body">
                    <h5 class="card-title ">{{products.product_name}}</h5>
                    <p class="card-text">Цена.....<span style="font-size: 1.5rem; font-weight: bolder;"> {{products.product_price_p}}</span> денари</p>
                    <a href="#" class="btn font-weight-bold text-center text-white" style="background-color: #8c3897;"> Додај во корпа</a>
                  </div>
                </div>
              </div>
            </div>

            <!--  =====xx=================== End Product Area =========xx=====================-->

          </div>
        </div>
        <!--end col-sm-12-->
      </div>
      <!--end row-->
    </div><!-- end container-fluid-->







    <!--========================== Start Registracija modal ===============================-->

    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="container-fluid rounded bg-light border-dark">
            <div class="row text-center">
              <h2 class="text-center" style="font-size: 3rem;color: darkslateblue;">Нов Корисник<br /><img class="img-fluid w-50 " src="./uploads/logot1.png" alt="Logo"></h2>
            </div>
            <div class="alert alert-success" ng-show="success">Успешно внесен!</div>
            <form name="myForm">
              <div class="d-flex justify-content-around">
                <div class="form-group">
                  <label for="user_first_name">Име:</label>
                  <input type="text" class="form-control " placeholder="Име" id="user_first_name" name="user_first_name" ng-model="user_first_name">
                </div>
                <div class="form-group">
                  <label for="user_last_name">Презиме:</label>
                  <input type="text" class="form-control " placeholder="Презиме" id="user_last_name" name="user_last_name" ng-model="user_last_name">
                </div>
                <div class="form-group">
                  <label for="user_mobile">Мобилен:</label>
                  <span class="alert alert-danger" ng-show="myForm.user_mobile.$invalid">Внесете 9 бројки</span>
                  <input type="number" class="form-control " placeholder="Мобилен" id="user_mobile" ng-minlength="9" ng-maxlenght="9" name="user_mobile" ng-model="user_mobile">
                </div>
              </div>
              <div class="d-flex justify-content-around">
                <div class="form-group">
                  <label for="user_email">Емаил:</label>
                  <input type="text" class="form-control " placeholder="Емаил" id="user_email" name="user_email" ng-model="user_email">
                </div>
                <div class="form-group">
                  <label for="user_password">Лозинка:</label>
                  <input type="password" class="form-control " placeholder="Лозинка" id="user_password" name="user_password" ng-model="user_password">
                </div>
              </div>
              <div class="d-flex justify-content-around">
                <div class="alert alert-danger" ng-show="error">Form is not correct</div>
                <button type="button" class="btn  mb-2 text-white" style="background-color: #8c3897;" ng-click="
               (myForm.user_mobile.$valid) ?
               details_users_fun(user_first_name,user_last_name,user_mobile,user_email,user_password) : error_fun()">ВНЕСИ</button>
                <button type="button" class="btn mb-2 text-white" style="background-color: #8c3897;" data-dismiss="modal">ЗАТВОРИ</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!--========================== Start Registracija modal ===============================-->


    <!--  ======================= Start Banner Area =======================  -->

    <div class="container mt-4 text-light text-center">
      <div class="row " style="background-color: #8c3897;">
        <div class="col-md-4">
          <h5 class=" my-2 font-weight-bolder"><i class="fas fa-truck mr-2"></i> ДОСТАВА - МАКЕДОНИЈА</h5>
        </div>
        <div class="col-md-4">
          <h5 class="my-2 font-weight-bolder"><i class="fab fa-speakap mr-2"></i> ПОДРШКА</h5>
        </div>
        <div class="col-md-4">
          <h5 class="my-2 font-weight-bolder"><i class="fas fa-undo-alt mr-2"></i> НАВРЕМЕНА ИСПОРАКА</h5>
        </div>
      </div>
    </div>

    <!--  ======================= End Banner Area =======================  -->

    <!--  ========================== Subscribe me Area ============================  -->
    <section class="subscribe-us-area">
      <div class="container subscribe">
        <div class="row">
          <div class="col-lg-12 text-center subscribe-title">
            <h4 class="text-uppercase">Get Update From anywhere</h4>
            <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam,
              consequuntur.</p>
          </div>
        </div>
        <div class="d-sm-flex justify-content-center">
          <form class="w-50">
            <div class="row d-flex flex-row flex-wrap">
              <div class="col input-textbox">
                <input type="text" id="txtemail" class="form-control" placeholder="Email">
              </div>
              <div class="col">
                <div class="btn-submit">
                  <button type="submit" class="btn btn-success float-right">Subscribe</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>
    <!--  ========================== End Subscribe me Area ============================  -->


  </main>
  <!--  ======================= End Main Area ================================ -->

  <!--  ======================= Start Footier Area ================================ -->


  <footer class="footer-area
        <div class=" container">
    <div class="">
      <div class="site-logo text-center py-4">
        <a href="#"><img src="./uploads/logot1.png" alt="logo"></a>
      </div>
      <div class="social text-center">
        <h5 class="text-uppercase">СЛЕДЕТЕ</h5>
        <a href="#"><i class="fab fa-facebook"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
      </div>
      <div class="copyrights text-center">
        <p class="para">
          Copyright ©2019 All rights reserved | Made by
          <a href="#"><span style="color:#8c3897;">Vladimir Sotiroski</span></a>
        </p>
      </div>
    </div>
    </div>
  </footer>

  <!--  ======================= End Footer Area ================================ -->



</body>

</html>