
	<?php

			session_start();


			include("../Class/empclass.php");

			$update_emp = new ManageEmployeeClass();

			echo $_SESSION["id_to_update"];

			echo $_POST["emp_fn"];

			echo (basename($_FILES["fileToUpload"]["name"]);

	 ?>
