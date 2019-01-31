<?php 
   include("dbConnect.php");
   $data = json_decode(file_get_contents("php://input"));
   $sid = $data->student_id;
   $fname= $data->first_name;
   $lname = $data->last_name;
   $comp = $data->hrs_completed;
   $attp = $data->hrs_attempted;
   $pts = $data->gpa_points;
   $maj = $data->major;
   $adv = $data->advisor_id;
   $em = $data->email;

   $q = "INSERT INTO tblstudents (firstName) VALUES ('$firstName')";
   $db->query($q);
  


   $sql = "INSERT INTO students VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)";
   $st = $conn->prepare($sql);
   $st->execute(array($sid, $fname, $lname, $comp, $attp, $pts, $maj, $adv, $em)); // prepared statement
   echo "Record Inserted";

?>