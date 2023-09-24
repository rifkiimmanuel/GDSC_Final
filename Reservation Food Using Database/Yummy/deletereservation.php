<?php
// include database connection file
include_once("config.php");

//Get id from URL to delete that reservation
$reservation_id = $_GET['reservation_id'];

// delete reservation row from table based on given ID
$result = mysqli_query($conn, "DELETE FROM `reservation` WHERE reservation_id = '$reservation_id'");

// Check if the delete query was successful
if($result) {
  // Redirect to Home, so that latest reservation list will be displayed
  header("Location:indexreservation.php");
  exit;
} else {
  // Display error message
  echo "Error deleting reservation: " . mysqli_error($conn);
}
?>
