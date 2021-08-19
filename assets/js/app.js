var app = angular.module('myApp', ["ngRoute"]);
app.controller('myCtrl', function($scope,$http) {
  
//inicijalizacija
$scope.success=false;
$scope.error=false;

function postJSON(dataObject){
  $http({
    method:"post",
    url:'model/insert.php',
    data: dataObject,
    headers:{'Content-Type':'application/x-www-form-irlencoded'}
  });
}

$scope.translate_word=[];
$http.get('translate/translate_ENG.php')
.then(function (response){$scope.translate_word = response.data.records;});


$scope.translate = function(language){
  $http.get("translate/translate_"+language+".php")
  .then(function (response)
  {$scope.translate_word=response.data.records;});
}

/******************************************************************************/
/****************************      JSON       *********************************/
/******************************************************************************/

//show users
$scope.users = [];
$http.get("model/select.php?table_name=users").then(function (response)
{$scope.users = response.data.records});

//show city
$scope.city = [];
$http.get("model/select.php?table_name=city").then(function (response)
{$scope.city = response.data.records});

//show primac
$scope.primac = [];
$http.get("model/select.php?table_name=primac").then(function (response)
{$scope.primac = response.data.records});

//show products
$scope.products = [];
$http.get("model/select.php?table_name=products").then(function (response)
{$scope.products = response.data.records});

//show company
$scope.company = [];
$http.get("model/select.php?table_name=company").then(function (response)
{$scope.company = response.data.records});

//show category
$scope.category = [];
$http.get("model/select.php?table_name=category").then(function (response)
{$scope.category = response.data.records});

//show prodazba
$scope.prodazba = [];
$http.get("model/select.php?table_name=prodazba").then(function (response)
{$scope.prodazba = response.data.records});






/******************************************************************************/
/****************************    FUNCTION     *********************************/
/******************************************************************************/

// Delete od Form za site html -------
$scope.deleteRow=function(table_name,pk_value){
  var deleteJSON=[{"table_name":table_name,"pk_value":pk_value}];
  console.log(deleteJSON);
  $http({
    method:"post",
    url:'model/delete.php',
    data:deleteJSON,
    headers:{'Content-Type':'aplication/x-www-form-urlencoded'}
  })
}
//Insert Primac Form ---------------
$scope.details_primac_fun = function(primac_first_name,primac_last_name,primac_adresa,primac_telefon,city_id)
{
         //alert("zdravo "+eu+""+marka_name+""+country+""+edb+""+adresa);
        // console.log("zdravo "+eu+""+marka_name+""+country+""+edb+""+adresa);
  var primacJSON=
  [
    {"primac_first_name":primac_first_name,"primac_last_name":primac_last_name,"primac_adresa":primac_adresa,"primac_telefon":primac_telefon,"city_id":city_id,"table_name":"primac"}
  ]
  console.log(primacJSON);
  postJSON(primacJSON);
  $scope.error=false;
  $scope.success=true;   
}

// Insert Company Form -------
$scope.details_company_fun = function(company_name,company_adresa,company_mesto,company_telefon,company_logo)
{ var companyJSON= 
  [ 
    {"company_name":company_name,"company_adresa":company_adresa,"company_mesto":company_mesto,"company_telefon":company_telefon,"company_logo":company_logo,"table_name":"company"} 
  ]
  console.log(companyJSON);
  postJSON(companyJSON);
  $scope.error=false;
  $scope.success=true;
}
//Insert Modeli Form ------
$scope.details_products_fun = function(product_name,product_cover,product_price_n,product_price_p,product_description,product_text,company_id,category_id)
{ var productsJSON=
  [
    {"product_name":product_name,"product_cover":product_cover,"product_price_n":product_price_n,"product_price_p":product_price_p,"product_description":product_description,"product_text":product_text,"company_id":company_id,"category_id":category_id, "table_name":"products"} 
  ]
  console.log(productsJSON);
  postJSON(productsJSON);
  $scope.error=false;
  $scope.success=true;
}
//Insert Category Form -------
$scope.details_category_fun = function(category_name)
{ var categoryJSON= 
  [ 
    {"category_name":category_name,"table_name":"category"} 
  ]
  console.log(categoryJSON);
  postJSON(categoryJSON);
  $scope.error=false;
  $scope.success=true;
}

//Insert Users Form -------
$scope.details_users_fun = function(user_first_name,user_last_name,user_mobile,user_email,user_password)
{ var userJSON= 
  [ 
    {"user_first_name":user_first_name,"user_last_name":user_last_name,"user_mobile":user_mobile,"user_email":user_email,"user_password":user_password,"table_name":"users"} 
  ]
  console.log(userJSON);
  postJSON(userJSON);
  $scope.error=false;
  $scope.success=true;
}

//Insert City Form -------
$scope.details_city_fun = function(city_name,city_region)
{ var cityJSON= 
  [ 
    {"city_name":city_name,"city_region":city_region,"table_name":"city"} 
  ]
  console.log(cityJSON);
  postJSON(cityJSON);
  $scope.error=false;
  $scope.success=true;
}

//funkcija za Formi da vraka gresno popolneto-----
$scope.error_fun = function() //ne parametarska funkcija
{
  $scope.success=false;
  $scope.error=true;
}


// logout function 
$scope.logout_function=function(){
  $http({
  method:"post",
  url:'logout.php',
  })
  window.location="http://localhost/giftshop/index.html"
}


// Login vo view papka
function postJSON(dataObject){
  $http({
    method:"post",
    url:'model/login_proc_user.php',
    data: dataObject,
    headers:{'Content-Type':'application/x-www-form-urlencoded'}
  }).then(function(response){
  //console.log("User login")
   var checkSession = response.data.records;

   console.log("User login: "+checkSession[0].login_user_status);
   if(checkSession[0].login_user_status=="true"){
    // console.log("tuka");
     window.location="http://localhost/giftshop/main.php";
   } if(checkSession[0].login_status !="true"){
     window.location="http://localhost/giftshop/index.html"
   }
  });
}
$scope.login_function = function(user_first_name,user_password){
//console.log(user_first_name+" - "+user_password);

var userJSON =
[{ "username":user_first_name,
   "user_password":user_password}];
  postJSON(userJSON);
}
});