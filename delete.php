<?php
include_once 'connect.php';
$sql = "DELETE FROM MyGuests WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($conn, $sql)) {
      echo "<script>window.location.href='retrieve.php'; </script>";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
} 
mysqli_close($conn);
?> 