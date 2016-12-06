<!DOCTYPE html>
<html>

	<head>

		<meta charset = "utf-8">
		<title> Employee Overview </title>
		<link rel = "stylesheet" type = "text/css" href="semantic/semantic.min.css">
		<link href="Libraries/font_opensans.css" rel="stylesheet">
		<script src="semantic/semantic.js"></script>
		<script src="semantic/semantic.min.js"></script>
		<link rel="stylesheet" type="text/css" href="Libraries/semantic_ui_css.css">
		<link rel="stylesheet" type="text/css" href="Libraries/semantic_ui_modal.css">
		<script src="Libraries/jquery_1.11.1.js"></script>
		<script src="Libraries/semantic_ui_ajax.js"></script>
		<script src="Libraries/semantic_ui_ajax_modal.js"></script>

		<?php include ("modal.php"); ?>

	</head>

	<style>
	*{
		font-family: 'Open Sans', sans-serif;
	}
	</style>


<body style="background-color: #f7fff0;">

<!-- Side Navigation Bar\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->
	<div class="ui fixed vertical inverted menu" style="width: 250px !important; height: 1813px !important; left: 0px; top: 50px; background-color: #373737;">
		<a class="item" href="/introduction/getting-started.html" style ="padding: 25px; font-weight: 300;">
		    <img class="ui avatar image" src="assets/images/overview_light.png" style="color: #373737">
	<span>Overview</span>
		</a>
		<a class="item" href="/introduction/getting-started.html" style ="padding: 25px; font-weight: 300; font-size: 16px; background-color: #a5db75; width: 260px;" >

		   <img class="ui avatar image" src="assets/images/person_dark.png">
	<span style="color:#373737;">Employee Profiles</span>
		</a>
		<a class="item" href="/introduction/getting-started.html" style ="padding: 25px; font-weight: 300; ">
		   <img class="ui avatar image" src="assets/images/person.png">
	<span>Modify Employees</span>
		</a>

	</div>
<!-- Side Navigation Bar\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->

<!-- Upper Navigation Bar\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->

	<div class="ui fixed inverted menu" style = "background-color: #373737;">
	    <div class="ui container">
	      <a href="#" class="header item" >
	        <img class="logo" src="assets/images/logo.png">
	        &nbsp; St. Jude Thaddeus International School
	      </a>
	      <a href="Employee_profile.html" class="active item" style="font-weight: 300;">Employees</a>
	      <a href="Attendance_employee_attendance.html" class="item" style="font-weight: 300;">Attendance</a>
	      <a href="#" class="item" style="font-weight: 300;">Payroll</a>

	      	 <a href="#" class="right item" style="font-weight: 300;">  <img class="logo" src="assets/images/person.png"> &nbsp;  Logged in as Admin</a>
	     	 <a href="#" class="item" style="font-weight: 300;">Logout</a>

	    </div>
 	</div>

<!-- Upper Navigation Bar\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->

<!-- Content\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->

	<div class = "ui container" >
		<div class = "ui grid">
		<div class="sixteen wide column"></div>
		<div class="sixteen wide column"></div>
		<div class="sixteen wide column"></div>
 		  <div class="one wide column"></div>
 		 <div class = "fourteen wide column">
 		 	<div class="ui segments" style="border:0;">
 		 		<div class="ui segment" style="width: 100%; background-color: #a5db75; color: white; text-align: left; font-weight: 600; ">

 		 			<div class="ui grid">



										<div class="three wide column">
										<p style="margin-top: 10px;">
										EMPLOYEE PROFILE
										</p>
										</div>
										<div class="nine wide column"></div>
										<div class="two wide column">
										<div class="ui right aligned category search focus">
								        <div class="ui icon input">
								          <input class="prompt" type="text" placeholder="Search Employee..." autocomplete="off">
								          <i class="search icon"></i>
								        </div>
								        <div class="results transition hidden"><div class="category"><div class="name">Passwords</div><a class="result"><div class="content"><div class="title">hhhhhh</div></div></a><a class="result"><div class="content"><div class="title">hhhh</div></div></a><a class="result"><div class="content"><div class="title">hhhhh</div></div></a></div></div>
								      </div>
								      <div class="one wide column"></div>
								 		</div>
						</div>
				</div>


 		 		<div class="ui padded segment" style="width: 100%; background-color: #f5f5f5; border:0;">
 		 			<div class="ui grid">
 		 				<div class="six wide column">
   					 <h3 class="ui header">Summary of School Employees</h3>
     				 <p>General Information and Statistics</p>
     				 	</div>
     				 	<div class="seven wide column"></div>
     				 	<div class="three wide column">

     				 	<div class="ui primary test button" style="background-color: #4CC3FF; color:white;">Add Employee </div>
     				 	</div>
     				 </div>
      				<div class = "ui container" >
				<div class = "ui equal width grid" style="text-align: center; "></div>

<!-- Content Profile View\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->
<div class="ui grid">

		<?php

			include("PHP/Class/empclass.php");

			$load_employee = new ManageEmployeeClass();

			$load_employee -> loademp();

		?>

</div>


</div>

				</div>
			</div>


  			</div>
 		</div>
 		</div>
 		<div class="one wide column"></div>
		</div>
	</div>



<!-- Content\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->

<!-- Contenasdsat\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->



<div class="ui modal" style="margin-top: -207.82px;">

	<div class="header">

		<div class="ui grid">

			<div class="thirteen wide column">
				Employee's Information
			</div>

			<div class="three wide column"	style="position: relative; right:-100px; margin-top: 2px;">

				<div class="actions">
					<div class="ui red deny icon button" style="padding: 5px 5px 5px 5px;">
						<i class="remove icon"></i>
					</div>
				</div>

			</div>

		</div>

    </div>
		    <div class="image content">
			      <div class="ui medium image">

			        <img src="assets/images/default_pic.png">

			      </div>
					      <div class="description">
					        <div class="ui header">Select a Photo</div>
								<form action="PHP/EmpProcess/save_emp.php" class="ui form"="save_emp.php" method="post" enctype="multipart/form-data" style="overflow:scroll; overflow-x:hidden; height: 300px; width: 900px;">Select image to upload:<br /><br />


	    							    		<input style="width: 209px;" type="file" name="fileToUpload" id="fileToUpload">

								    <h4 class="ui dividing header" style="margin-left: 10px; margin-right: 10px;">Information</h4>


								    <div class="field" style="margin-left: 10px; margin-right: 10px;">
								        <label>Name</label>
									        <div class="two fields">
											          <div class="field">
											            <input type="text" name="emp_fn" placeholder="First Name">
											          </div>

											          <div class="field">
											            <input type="text" name="emp_ln" placeholder="Last Name">
											          </div>
								        	</div>
								    </div>

								    <div class="field" style="margin-left: 10px; margin-right: 10px;">
								        <label>Address</label>
								        <div class="fields">
									          <div class="sixteen wide field">
									           	 <input type="text" name="emp_add" placeholder="Street Address">
									          </div>
								        </div>
								     </div>

								    <div class="two fields" style="margin-left: 1px; margin-right: 1px;">
								    	<div class="eight wide field">
								        <label>Nationality</label>
									     <input type="text" name="emp_nat" placeholder="Nationality">
									     </div>
									    <div class="eight wide field">
 										<label>Position</label>
										<input type="text" name="emp_pos" placeholder="Position">
										</div>
								     </div>

								      <div class="actions">
									<input class="ui positive icon button" type="submit" name="submit" value="SUBMIT" style="position: relative; left:500px;">

		    						</div>


								</form>
					      </div>
   		    </div>
</div>

<script>

			function set_modal(getid,i,element_id){

				$.ajax({

					url: "PHP/AjaxProcess/set_emp_modal.php",
					type: "POST",
					data: {id: getid, return: i},
					success: function(resultdata) {

						$(element_id).val($.trim(resultdata));

					}

				});

			}

			function showmodal(getid){

				var element_id = ["#emp_fn","#emp_ln","#emp_add","#emp_nat","#emp_pos","#emp_desc"];

				for (i = 1; i <=6; i++){

					set_modal(getid,i,element_id[i-1]);
					
				}

				$('.ui.modal.edit').modal('show');

			}

			function delete_emp(getid) {

					$.ajax({

					type: "POST",
					url: "PHP/AjaxProcess/delete_emp.php",
					data: {id: getid},

					success: function(data){

						location.reload();

					}

				});

			}


$('.ui.modal')
  .modal('attach events', '.test.button', 'show');

</script>

</body>
</html>
