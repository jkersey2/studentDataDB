<?php
require_once("includes/dbConnect.php");
function returnStudents() {
global $conn; 
$sql = "SELECT * FROM students"; 
$rows = $conn->query( $sql );      // get the table rows 
$all_students = $rows->fetchAll(PDO::FETCH_ASSOC);
$output = json_encode($all_students);  // creates an array of row objects
echo $output;
}
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
if(isset($_GET['sql']) && $_GET['sql']=='insert'){
$id = $_GET['student_id'];
$fn = $_GET['first_name']; 
$ln = $_GET['last_name'];
$comp = $_GET['hrs_completed'];
$attp = $_GET['hrs_attempted'];
$pts = $_GET['gpa_points']; 
$maj = $_GET['major'];
$advis = $_GET['advisor_id']; 
$em = $_GET['email'];
//$insert_data = array($id, $fn, $ln, $comp, $attp, $pts, $maj, $advis, $em);
$sql = "INSERT INTO students VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)";
$st = $conn->prepare($sql);
$st->execute(array($id, $fn, $ln, $comp, $attp, $pts, $maj, $advis, $em)); // prepared statement
echo "Record Inserted";
returnStudents();
}
else {
returnStudents();
}
} 
?>