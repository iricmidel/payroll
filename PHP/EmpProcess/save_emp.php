
    <?php

    include ("../Class/empclass.php");

    if (isset($_POST["submit"])){

      if ((isset($_POST["emp_fn"]) && !empty($_POST["emp_fn"]))
          && (isset($_POST["emp_ln"]) && !empty($_POST["emp_ln"]))
          && (isset($_POST["emp_add"]) && !empty($_POST["emp_add"]))
          && (isset($_POST["emp_nat"]) && !empty($_POST["emp_nat"]))
          && (isset($_POST["emp_pos"]) && !empty($_POST["emp_pos"]))
          && (file_exists($_FILES["fileToUpload"]["tmp_name"]))){

          $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);

          if($check !== false) {

      			$target_dir = "../../uploads/";
      			$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
      			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

      			if (file_exists($target_file)
      				|| ($_FILES["fileToUpload"]["size"] > 5000000)
      				|| ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" )) {

      				echo "Sorry, Error Occured While Uploading File.";

      			}
      			else{

      			  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      				  echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";

      				  $save_Emp_Details = new ManageEmployeeClass();

                $save_Emp_Details -> saveemp($_POST["emp_fn"],$_POST["emp_ln"],$_POST["emp_add"],$_POST["emp_nat"],$_POST["emp_pos"],basename( $_FILES["fileToUpload"]["name"]));


      				} else
      					echo "Sorry, there was an error uploading your file.";

    			  }

    		}
          else
              echo "failed file not picture";

      }//END OF IF
      else
        echo "INPUT ALL DATA!!!";

    }//END OF POST SUBMIT

    ?>
