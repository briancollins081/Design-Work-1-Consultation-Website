<table class="table table-striped table-responsive table-bordered table-hover">
	<thead>
		<th>Username</th>
		<th>Firstname</th>
		<th>Lastname</th>
		<th>Email</th>
		<th>Phone</th>
		<th>Registration</th>
		<th>Set Profession</th>
		<th>###</th>
	</thead>
	<tbody>
		<?php 
			$query1="SELECT * FROM tbusers WHERE userid >=1";
			$result1=mysqli_query($conn,$query1);
			$num1=mysqli_num_rows($result1);
			if($num1>0){
				while($row1=mysqli_fetch_assoc($result1)){
		 ?>
		<form action="" method="" class="form-horizontal form-responsive">
		<tr>
			<td>
				<div class="form-group">
					<div class="input-group">
						<input type="text" name="username" id="username" value="<?php echo $row1['username']; ?>" class="form-control">
					</div>
				</div>
			</td>
			<!-- <td>
				<div class="form-group">
					<div class="input-group">
						<input type="text" name="password" id="password" value="<?php echo $row1['password']; ?>"" class="form-control" disabled>
					</div>
				</div>
			</td> -->
			<td>
				<div class="form-group">
					<div class="input-group">
						<input type="text" name="firstname" id="firstname" value="<?php echo $row1['fname']; ?>"" class="form-control">
					</div>
				</div>
			</td>
			<td>
				<div class="form-group">
					<div class="input-group">
						<input type="text" name="lastname" id="lastname" value="<?php echo $row1['lname']; ?>"" class="form-control">
					</div>
				</div>
			</td>
			<td>
				<div class="form-group">
					<div class="input-group">
						<input type="text" name="email" id="email" value="<?php echo $row1['email']; ?>"" class="form-control">
					</div>
				</div>
			</td>
			<td>
				<div class="form-group">
					<div class="input-group">
						<input type="text" name="phone" id="phone" value="<?php echo $row1['phone']; ?>"" class="form-control">
					</div>
				</div>
			</td>
			<td>
				<div class="form-group">
					<div class="input-group">
						<input type="text" name="registration" id="registration" value="<?php echo $row1['regdate']; ?>"" class="form-control" disabled>
					</div>
				</div>
			</td>
			<td>
				<div class="form-group">
					<div class="input-group">
						<select name="professionid" id="professionid" class="form-control">
							<?php 
								$query="SELECT * FROM tbprofession WHERE professionid>=1";
								$result=mysqli_query($conn,$query);
								$num=mysqli_num_rows($result);
								if($num>0){
									while ($row=mysqli_fetch_assoc($result)) {
										$val=$row['professionid']; $str=$row['name'];
							 ?>
							<option value="<?php echo "$val"; ?>" class="form-control"><?php echo "$str"; ?></option>
							<?php 
								}
							}
							 ?>
						</select>
					</div>
				</div>
			</td>
			<td colspan="8"><input type="submit" name="edituser" class="btn btn-primary" value="Submit"></td>
		</tr>
		</form>
		<?php 
			}
		}
		 ?>
	</tbody>
</table>
