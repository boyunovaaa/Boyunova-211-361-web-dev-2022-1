<?php
include "dbconnect.php";

$sql = mysqli_query($conn, 'SELECT * FROM `Определение`');
  while ($result = mysqli_fetch_array($sql)) {
	echo '<dl>'.'<dt>' .$result['Термин'].'</dt>'.'<dd>'. $result['Определение'].'</dd>'.'</dl>';
  }


?>