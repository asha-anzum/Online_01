# Online_01
<?php
	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");


	$results = mysqli_query( $connect, "SELECT * FROM Appoinment" )
		or die("Can not execute query");

	echo "<table border> \n";

	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $f0 </td>";
		echo "<td> $f1 </td>";
		echo "<td> <a href = 'update_input.php?id=$id&f0=$f0&f1=$f1'> Update </a> </td>";
		echo "</tr> \n";
	}

	echo "</table> \n";

	echo "<p><a href=create_input.php>CREATE a new record</a>";
?>
