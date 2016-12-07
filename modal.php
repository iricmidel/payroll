
	<div class="ui modal edit" style="margin-top: -207.82px;">

		<div class="header">

			<div class="ui grid">

				<div class="thirteen wide column">
					Employee's Information
				</div>

				<div class="three wide column"	style="position: relative; right:-100px; margin-top: 1px;">

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

				<form action="PHP/EmpProcess/update_emp.php" class="ui form"="save_emp.php" method="post" enctype="multipart/form-data" style="overflow:scroll; overflow-x:hidden; height: 300px; width: 900px;">Select image to upload:<br /><br />


					<input style="width: 209px;" type="file" name="fileToUpload" id="fileToUpload">

					<h4 class="ui dividing header" style="margin-left: 10px; margin-right: 10px;">Information</h4>


					<div class="field" style="margin-left: 10px; margin-right: 10px;">
						<label>Name</label>
						<div class="two fields">
							<div class="field">
								<input type="text" name="emp_fn" placeholder="First Name" id="emp_fn">
							</div>

							<div class="field">
								<input type="text" name="emp_ln" placeholder="Last Name" id="emp_ln">
							</div>
						</div>
					</div>

					<div class="field" style="margin-left: 10px; margin-right: 10px;">
						<label>Address</label>
						<div class="fields">
							<div class="sixteen wide field">
								<input type="text" name="emp_add" placeholder="Street Address" id="emp_add">
							</div>
						</div>
					</div>

					<div class="two fields" style="margin-left: 1px; margin-right: 1px;">
						<div class="eight wide field">
							<label>Nationality</label>
							<input type="text" name="emp_nat" placeholder="Nationality" id="emp_nat">
						</div>
						<div class="eight wide field">
							<label>Position</label>
							<input type="text" name="emp_pos" placeholder="Position" id="emp_pos">
						</div>


					</div>

					<div class="field" style="margin-left: 10px; margin-right: 10px;">
						<label>Description</label>
						<div class="fields">
							<div class="sixteen wide field">
								<input type="text" name="emp_add" placeholder="Description" id="emp_desc">
							</div>
						</div>
					</div>

					<div class="actions">
						<input class="ui positive icon button" type="submit" name="submit" value="SUBMIT" style="position: relative; left:500px;">

					</div>


				</form>
			</div>
		</div>
	</div>
