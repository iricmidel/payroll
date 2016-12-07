
		<?php

			class ManageEmployeeClass{

				public function saveemp($fn,$ln,$add,$nat,$pos,$desc,$pic){

					include ("../Connection/connection.php");

					$query = "INSERT INTO tblemployee (empFN,empLN,empAdd,empNat,empPos,empPic,empDesc)
									VALUES ('$fn','$ln','$add','$nat','$pos','$pic','$desc')";


					if ($con->query($query) == TRUE){


						echo "SUCCESS";

					}

				}//END OF SAVEEMP

				public function loademp(){

					include ("PHP/Connection/connection.php");

					$query = "SELECT * FROM tblemployee WHERE empStatus = 1";

					$result = $con->query($query);

					if ($result->num_rows > 0){

						while($row = $result->fetch_assoc()){

							?>

								<div class="four wide column">
									<div class="ui card">

											<div class="image">
												<img src="uploads/<?php echo $row["empPic"] ?>" style= "height: 150px">
											</div>

											<div class="content">

												<div class="header" style="height: 40px"><?php echo $row["empLN"] . ", " . $row["empFN"] ?> </div> <!-- EMP NAME -->

												<div class="meta">
													<span class="date"><?php echo $row["empPos"] ?></span> <!-- EMP POS -->
												</div>

												<div class="description">
													<?php echo $row["empDesc"] ?> <!-- EMP DESC -->
												</div>

											</div>

											<div class="extra content">

												<center>
												<button class="ui green basic button" onclick="showmodal(<?php echo $row['empID']; ?>)">Edit <!-- put onclick=ajax code store id in session here 1st check if can execute modal then store id in session then show modal-->
												</button>
												<button class="ui red basic button" onclick="if(confirm('Are you sure you want to delete client?')) delete_emp(<?php echo $row['empID']; ?>);">Delete
												</button>
												</center>

											</div>

									</div>
								</div>

							<?php

						}

					}

				}//END OF LOADEMP

				public function updateemp($fn,$ln,$add,$nat,$pos,$desc,$pic,$id){

					include ("../Connection/connection.php");

					if ($pic == ""){

							$query = "UPDATE tblemployee SET empFN='$fn',empLN='$ln',empAdd='$add',
											empNat='$nat', empPos='$pos', empDesc='$desc' WHERE empID = '$id'";

					}else {

						$query = "UPDATE tblemployee SET empFN='$fn',empLN='$ln',empAdd='$add',
										empNat='$nat', empPos='$pos', empDesc='$desc', empPic=$pic WHERE empID = '$id'";

					}

					if ($con->query($query) == TRUE){

						echo "SUCCESS";

					}

				}

			}//END OF CLASS


		 ?>
