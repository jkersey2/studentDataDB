<?php
include "includes/header.php";
?>  
<!-- header include file -->
<div ng-app = "stuApp">
  <div class="container">
    <div ng-view>
    </div>    
    <!-- partial pages substituted here -->
  </div>   
  <!-- end class= 'container' -->
</div>   
<!-- end stuApp -->
<script>
  var app = angular.module('stuApp', ['ngRoute']);
  app.config(function($routeProvider) {
    $routeProvider 
      .when('/', {
      templateUrl : 'partials/all_students.html',    // route for the home page
      controller : 'allCtrl'
    }
           )
      .when('/all_students', {
      templateUrl : 'partials/all_students.html',
      controller : 'allCtrl'
    }
           )
      .when('/get_gpa', {
      templateUrl : 'partials/get_gpa.html',
      controller : 'gpaCtrl'
    }
           )
      .when('/add_student', {
      templateUrl : 'partials/add_student.html',    // add a student to db
      controller : 'addCtrl'
    }
           )
      .when('/edit_student', {
      templateUrl : 'partials/edit_student.html',    // edit a student record
      controller : 'editCtrl'
    }
           )
      .otherwise({
      redirectTo: '/'       // any other URL goes to home
    }
                );
  }
            );
  /*   a controller for each page  */
  app.controller('allCtrl', function($scope, $http) {
    $http.get("getStudentData.php")         
      .then(function (response) {
      $scope.students = response.data;
    }
           );
  }
                );
  app.controller('gpaCtrl', function ($scope, $http) {
    $http.get("getGpa.php")       
      .then(function(response) {
      $scope.gpa = response.data;
    }
           );
  }
                );
  app.controller('addCtrl', function($scope, $http) {
    $scope.addStudent = function() {
      params = "sql=insert";
      params += "&student_id=" + $scope.student_id;
      params += "&first_name=" + $scope.first_name;
      params += "&last_name=" + $scope.last_name;
      params += "&hrs_completed=" + $scope.hrs_completed;
      params += "&hrs_attempted=" + $scope.hrs_attempted;
      params += "&gpa_points=" + $scope.gpa_points;
      params += "&major=" + $scope.major;
      params += "&advisor_id=" + $scope.advisor_id;
      params += "&email=" + $scope.email;
      url = "getStudentData.php?" + params;
      $http.get(url).then(function (response) {
        $scope.status = response.statusText;
      }
                         );
    };
  }
                );
  app.controller('editCtrl', function($scope, $http) {
    $scope.getRecord = function(){
      $scope.stuIndex = 0;
      params = "student_id=" + $scope.student_id;
      url = "getRecord.php?" + params;
      $http.get(url).then(function (response) {
        $scope.students = response.data;
        $scope.student = $scope.students[$scope.stuIndex];
      }
                         );
    }
    $scope.updateRecord = function() {
      $http({
        method  : 'POST',
        url     : 'getRecord.php',
        data    : $scope.students,
      }
           ).then(function(data) {
        $scope.msg = "Update Successful!";
      }
                  , function(error) {
        alert(error);
        $scope.students = response.data;
        $scope.student = $scope.students[$scope.stuIndex];
      }
                 );
    }
    $scope.deleteRecord = function() {
      // This works
      params = "sql=delete";
      //  tempID = $scope.students[$scope.stuIndex].student_id;
      params += "&student_id=" + $scope.student_id;
      url = "getRecord.php?" + params;
      $http.get(url)
        .then(function (response) {
        $scope.students = response.data;
        $scope.student = $scope.students[$scope.stuIndex];
        $scope.stuIndex += $scope.student_id;
        $scope.msg = "Delete Successful!";
      }
             );
    };
  }
                );
</script>
<?php
include "includes/footer.php";
?>   
<!-- footer include file -->
