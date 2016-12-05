
			<?php

					include("../Connection/connection.php");

					$id=$_POST['id'];

					$query = "UPDATE tblemployee SET empStatus = 0 WHERE empID = '$id'";

					$con->query($query);

					$con->close();

			 ?>
