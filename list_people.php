<?php
require("connect_db.php");

$sql = "SELECT id, fname, lname, age, sex, marry_status FROM survey";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    if($row["sex"]=="m"){
        if($row["age"]>=15){
            echo "นาย".$row["fname"]." ".$row["lname"]." <a href='edit_people.php?id=".$row["id"]."'>Edit</a><br>";
        }
        else{
            echo "ด.ช.".$row["fname"]." ".$row["lname"]." <a href='edit_people.php?id=".$row["id"]."'>Edit</a><br>";
        }
    }else{
        if($row["age"]>=15){
            if($row["marry_status"]=="m"){
                echo "นาง".$row["fname"]." ".$row["lname"]." <a href='edit_people.php?id=".$row["id"]."'>Edit</a><br>";
            }else{
                echo "น.ส.".$row["fname"]." ".$row["lname"]." <a href='edit_people.php?id=".$row["id"]."'>Edit</a><br>";
            }
           
        }
        else{
            echo "ด.ญ.".$row["fname"]." ".$row["lname"]." <a href='edit_people.php?id=".$row["id"]."'>Edit</a><br>";
        }
    }
  }
} else {
  echo "0 results";
}
$conn->close();
?>