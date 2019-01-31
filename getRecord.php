<?php
require_once("includes/dbConnect.php");
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
//if(isset($_GET['sql']) && $_GET['sql']=='getStu') {
//	$data = json_decode(file_get_contents("php://input"));
$sid = $_GET['student_id'];
$q = "SELECT * FROM students WHERE student_id = '$sid'"; 
$rows= $conn->query($q);
$all_students = $rows->fetchAll(PDO::FETCH_ASSOC);
$students = json_encode($all_students);  // creates an array of row objects
echo $students;
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
$request_data = file_get_contents("php://input");
$jsonDataDecoded = json_decode($request_data, true); 
$conn->beginTransaction(); 
foreach ( $jsonDataDecoded as $row ) {           
$sid = $row['student_id'];
$fn = $row['first_name']; 
$ln = $row['last_name'];
$comp = $row['hrs_completed']; 
$attp = $row['hrs_attempted'];
$pts = $row['gpa_points'];
$maj = $row['major'];
$advis = $row['advisor_id'];
$em = $row['email'];
$sql = "UPDATE students SET first_name = ?, last_name = ?, hrs_completed = ?, hrs_attempted = ?, gpa_points = ?, major = ?, advisor_id = ?, email = ? WHERE student_id = '$sid'";
$st = $conn->prepare($sql);
$st->execute(array($fn, $ln, $comp, $attp, $pts, $maj, $advis, $em)); // prepared statement

}
$conn->commit();   // commit the transaction
echo "New records created successfully";
}
elseif(isset($_GET['sql']) && $_GET['sql']=='delete') { 
$sid = $_GET['student_id'];
$sql = "DELETE FROM students WHERE student_id = $sid";
$r = $conn->exec( $sql );
}
?>