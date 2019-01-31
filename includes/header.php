<!DOCTYPE html>
<html><head><title>Student Data</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"     href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
 <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.1/angular.min.js"></script> 
 <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.1/angular-route.js"></script>

<style>
/* inverse footer borrowed from: https://gist.github.com/nnja/6253189 via Mark Prather @ JCC*/
.footer {
  background-color: #1b1b1b;
  background-image: -moz-linear-gradient(top, #222222, #111111);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#222222), to(#111111));
  background-image: -webkit-linear-gradient(top, #222222, #111111);
  background-image: -o-linear-gradient(top, #222222, #111111);
  background-image: linear-gradient(to bottom, #222222, #111111);
  background-repeat: repeat-x;
  border-color: #252525;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff222222', endColorstr='#ff111111', GradientType=0);
  color: white;
  padding: 5px;
}
</style> 
</head>
<body>

<nav class="navbar navbar-inverse">
<div class="container-fluid">
    <div class="navbar-header">
        <a class="navbar-brand" href="#">Student Data</a>
    </div>
    <div>
       <ul class="nav navbar-nav">
           <li class="active"><a href="#all_students">All Students</a></li>
           <li><a href="#get_gpa">Display GPA</a></li>
           <li><a href="#add_student">Add a Student</a></li>
           <li><a href="#edit_student">Edit Student</a></li>
       </ul>
    </div>
</div>
</nav>    <!-- end nav-bar -->
  

