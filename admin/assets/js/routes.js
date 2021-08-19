app.config(function($routeProvider) {
  $routeProvider
  .when("/index", {
    templateUrl : "index.html",
    controller :"loginCtrl"
  })  
  .when("/main", {
    resolve:{
      "check": function($http,$window){
        var checkSession = [];
        //get value from session
        $http.get('model/checkSessionUser.php')
        .then(function(response){
          checkSession=response.data.records;
          // if login ==false then show login  form
          if (checkSession[0],loggIn == 'false')
          {$window.location.href='index.html';}
        });//end http.get
      }
    },
    templateUrl : "main.php",
    controller :"loginCtrl"
  })  
  .when("/city", {
    resolve:{
      "check": function($http,$window){
        var checkSession = [];
        //get value from session
        $http.get('model/checkSessionUser.php')
        .then(function(response){
          checkSession=response.data.records;
          // if login ==false then show login  form
          if (checkSession[0],loggIn == 'false')
          {$window.location.href='index.html';}
        });//end http.get
      }
    },
    templateUrl : "view/city.html",
    controller :"myCtrl"
  })
  .when("/details_city", {
    resolve:{
      "check": function($http,$window){
        var checkSession = [];
        //get value from session
        $http.get('model/checkSessionUser.php')
        .then(function(response){
          checkSession=response.data.records;
          // if login ==false then show login  form
          if (checkSession[0],loggIn == 'false')
          {$window.location.href='index.html';}
        });//end http.get
      }
    },
    templateUrl : "view/details_city.html",
    controller : "myCtrl"
  })
  .when("/primac", {
    resolve:{
      "check": function($http,$window){
        var checkSession = [];
        //get value from session
        $http.get('model/checkSessionUser.php')
        .then(function(response){
          checkSession=response.data.records;
          // if login ==false then show login  form
          if (checkSession[0],loggIn == 'false')
          {$window.location.href='index.html';}
        });//end http.get
      }
    },
    templateUrl : "view/primac.html",
    controller : "myCtrl"
  })
  .when("/details_primac", {
    resolve:{
      "check": function($http,$window){
        var checkSession = [];
        //get value from session
        $http.get('model/checkSessionUser.php')
        .then(function(response){
          checkSession=response.data.records;
          // if login ==false then show login  form
          if (checkSession[0],loggIn == 'false')
          {$window.location.href='index.html';}
        });//end http.get
      }
    },
    templateUrl : "view/details_primac.html",
    controller : "myCtrl"
  })
  .when("/products", {
    resolve:{
      "check": function($http,$window){
        var checkSession = [];
        //get value from session
        $http.get('model/checkSessionUser.php')
        .then(function(response){
          checkSession=response.data.records;
          // if login ==false then show login  form
          if (checkSession[0],loggIn == 'false')
          {$window.location.href='index.html';}
        });//end http.get
      }
    },
    templateUrl : "view/products.html",
    controller : "myCtrl"
  })
  .when("/details_products", {
    resolve:{
      "check": function($http,$window){
        var checkSession = [];
        //get value from session
        $http.get('model/checkSessionUser.php')
        .then(function(response){
          checkSession=response.data.records;
          // if login ==false then show login  form
          if (checkSession[0],loggIn == 'false')
          {$window.location.href='index.html';}
        });//end http.get
      }
    },
    templateUrl : "view/details_products.html",
    controller : "myCtrl"
  })
  .when("/company", {
    resolve:{
      "check": function($http,$window){
        var checkSession = [];
        //get value from session
        $http.get('model/checkSessionUser.php')
        .then(function(response){
          checkSession=response.data.records;
          // if login ==false then show login  form
          if (checkSession[0],loggIn == 'false')
          {$window.location.href='index.html';}
        });//end http.get
      }
    },
    templateUrl : "view/company.html",
    controller : "myCtrl"
  })
  .when("/details_company", {
    resolve:{
      "check": function($http,$window){
        var checkSession = [];
        //get value from session
        $http.get('model/checkSessionUser.php')
        .then(function(response){
          checkSession=response.data.records;
          // if login ==false then show login  form
          if (checkSession[0],loggIn == 'false')
          {$window.location.href='index.html';}
        });//end http.get
      }
    },
    templateUrl : "view/details_company.html",
    controller : "myCtrl"
  })
  .when("/category", {
    resolve:{
      "check": function($http,$window){
        var checkSession = [];
        //get value from session
        $http.get('model/checkSessionUser.php')
        .then(function(response){
          checkSession=response.data.records;
          // if login ==false then show login  form
          if (checkSession[0],loggIn == 'false')
          {$window.location.href='index.html';}
        });//end http.get
      }
    },
    templateUrl : "view/category.html",
    controller : "myCtrl"
  })
  .when("/details_category", {
    resolve:{
      "check": function($http,$window){
        var checkSession = [];
        //get value from session
        $http.get('model/checkSessionUser.php')
        .then(function(response){
          checkSession=response.data.records;
          // if login ==false then show login  form
          if (checkSession[0],loggIn == 'false')
          {$window.location.href='index.html';}
        });//end http.get
      }
    },
    templateUrl : "view/details_category.html",
    controller : "myCtrl"
  })
  .when("/users", {
    resolve:{
      "check": function($http,$window){
        var checkSession = [];
        //get value from session
        $http.get('model/checkSessionUser.php')
        .then(function(response){
          checkSession=response.data.records;
          // if login ==false then show login  form
          if (checkSession[0],loggIn == 'false')
          {$window.location.href='index.html';}
        });//end http.get
      }
    },
    templateUrl : "view/users.html",
    controller : "myCtrl"
  })
  .when("/details_users", {
    resolve:{
      "check": function($http,$window){
        var checkSession = [];
        //get value from session
        $http.get('model/checkSessionUser.php')
        .then(function(response){
          checkSession=response.data.records;
          // if login ==false then show login  form
          if (checkSession[0],loggIn == 'false')
          {$window.location.href='index.html';}
        });//end http.get
      }
    },
    templateUrl : "view/details_users.html",
    controller : "myCtrl"
  })
  .when("/prodazba", {
    resolve:{
      "check": function($http,$window){
        var checkSession = [];
        //get value from session
        $http.get('model/checkSessionUser.php')
        .then(function(response){
          checkSession=response.data.records;
          // if login ==false then show login  form
          if (checkSession[0],loggIn == 'false')
          {$window.location.href='index.html';}
        });//end http.get
      }
    },
    templateUrl : "view/prodazba.html",
  controller : "myCtrl"
  })
  .when("/details_prodazba", {
    resolve:{
      "check": function($http,$window){
        var checkSession = [];
        //get value from session
        $http.get('model/checkSessionUser.php')
        .then(function(response){
          checkSession=response.data.records;
          // if login ==false then show login  form
          if (checkSession[0],loggIn == 'false')
          {$window.location.href='index.html';}
        });//end http.get
      }
    },
    templateUrl : "view/details_prodazba.html",
  controller : "myCtrl"
})
});

// app.config(function($routeProvider) {
//   $routeProvider
//   .when("/white", {
//     templateUrl : "white.htm",
//    })
//   .when("/red", {
//     templateUrl : "red.htm"
//    })
//   .when("/green", {
//     templateUrl : "green.htm"
//   })
//   .when("/blue", {
//     templateUrl : "blue.htm"
//   });
// });