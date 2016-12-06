	<?php

	$id = $_POST["id"];
	$return = $_POST["return"];

	include ("../Connection/connection.php");

	$query = "SELECT * FROM tblemployee WHERE empID = $id";

	$result = $con->query($query);

	if ($result->num_rows > 0 ){

		while ($row = $result->fetch_assoc()){

			switch ($return) {

				case 1:

				echo $row["empFN"];
				break;

				case 2:

				echo $row["empLN"];
				break;

				case 3:

				echo $row["empAdd"];
				break;

				case 4:

				echo $row["empNat"];
				break;

				case 5:

				echo $row["empPos"];
				break;

				case 6:

				echo $row["empDesc"];
				break;


			}

		}

	}

	$con->close();

	?>
