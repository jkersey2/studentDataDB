<?php
require_once("includes/dbConnect.php");
$sql    = "SELECT students.student_id AS id, students.last_name AS lname, ROUND(students.gpa_points/students.hrs_attempted, 1) AS gpa, advisors.name AS adname, advisors.email AS em
FROM advisors, students 
WHERE students.advisor_id = advisors.advisor_id
ORDER BY gpa";
$result = $conn->query($sql);
$rows   = $result->fetchAll(PDO::FETCH_ASSOC);
$output = json_encode($rows);
echo $output;
?>