<?php

class viewemployee extends employee {

public function emp_ids(){
		$datas = $this-> getAllemployee();
		foreach ($datas as $data) {
			$emp_id= $data['emp_id'];
			echo $emp_id;
		}
	}

	public function emp_id(){
		$datas = $this-> getAllemployee();
		foreach ($datas as $data) {
			$emp_id= $data['emp_id'];
			echo $emp_id;
		}
	}


	public function emp_name(){
		$datas = $this-> getAllemployee();
		foreach ($datas as $data) {
			
			$emp_name= $data['emp_name'];
			

		}
	}

public function emp_detail($edit){
		$datas = $this-> getAllemployee();
		if(isset($datas)){
		foreach ($datas as $data) {
			$emp_id= $data['emp_id'];
			$emp_name= $data['emp_name'];
			$emp_email= $data['emp_email'];
			$emp_photo= $data['emp_photo'];		
			$emp_address= $data['emp_address'];		
			$emp_branch_id= $data['branch_id'];
			$emp_password= $data['emp_password'];
			$branch_name=null;
			$bank_id=null;
			$bank_name=null;

			$branches= $this-> getbranch($emp_branch_id);
			foreach ($branches as $branch) {
			
			$branch_name= $branch['branch_name'];
			$bank_id= $branch['bank_id'];

				$banks = $this-> getbank($bank_id);
				foreach ($banks as $bank) {
			
					$bank_name= $bank['bank_name'];
					
			
			

		}
			
			

		}
		if($edit == $emp_id){
echo'<tr class="progress progress-xs progress-striped active">
<form action="update.php?id='.$emp_id.'" method="post" enctype="multipart/form-data">
<td><input type="file" value="'.$emp_photo.'" name="image"></td>
<td>'.$emp_id.'</td>
<td><input type="text" value="'.$emp_name.'" name="name"></td>
<td><input type="text" value="'.$emp_email.'" name="email"></td>
<td><input type="text" value="'.$emp_address.'" name="add"></td>
<td><select name="bank" ><option value='.$bank_id.'>'.$bank_name.'</option>'; $this -> select_option("bank","bank_id","bank_name"); echo'</select></td>
<td><select name="branch" ><option value='.$bank_id.'>'.$branch_name.'</option>'; $this -> select_option2("bank_branch","branch_id","branch_name",$bank_id); echo'</select></td>
<td><input type="password" value="'.$emp_password.'" name="pass"></td>

<td><input type="submit" class="btn-primary" value="Save"></td>
<td><a href="employee.php"<span class="label label-warning">cancel</span></a></td>
</form>
</tr>';

}
else{
	echo'<tr>
<td><img src="'.$emp_photo.'" height="50"></td>
<td>'.$emp_id.'</td>
<td>'.$emp_name.'</td>
<td>'.$emp_email.'</td>
<td>'.$emp_address.'</td>
<td>'.$bank_name.'</td>
<td>'.$branch_name.'</td>
<td><a href="employee.php?edit='.$emp_id.'"<span class="label label-success">Edit</span></a></td>
<td><a href="view.php?id='.$emp_id.'"<span class="label label-info">View</span></a></td>
<td><a href="employee.php?del='.$emp_id.'"<span class="label label-danger">Delete</span></a></td>
</tr>';

}
		}
	}
}

public function select_option($table,$value,$option){
		$datas = $this-> getoptions($table);
		foreach ($datas as $data) {

			echo '<option value="'.$data[''.$value.''].'"> '.$data[''.$option.''].'</option>';	

			
		}
	}

public function select_option2($table,$value,$option,$op){
		$datas = $this-> getoptions2($table,$op);
		foreach ($datas as $data) {

			echo '<option value="'.$data[''.$value.''].'"> '.$data[''.$option.''].'</option>';	

			
		}
	}

public function show_profile($emp_id){
		$datas = $this-> getemployee($emp_id);
		if(isset($datas)){
		foreach ($datas as $data) {
			$emp_id= $data['emp_id'];
			$emp_name= $data['emp_name'];
			$emp_email= $data['emp_email'];
			$emp_photo= $data['emp_photo'];		
			$emp_address= $data['emp_address'];		
			$emp_branch_id= $data['branch_id'];
			$branch_name=null;
			$bank_id=null;
			$bank_name=null;

			$branches= $this-> getbranch($emp_branch_id);
			foreach ($branches as $branch) {
			
			$branch_name= $branch['branch_name'];
			$bank_id= $branch['bank_id'];

				$banks = $this-> getbank($bank_id);
				foreach ($banks as $bank) {
			
					$bank_name= $bank['bank_name'];			

		}
	}
			
		echo'	


<div class="col-md-12">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="'.$emp_photo.'"  alt="User profile picture">

              <h3 class="profile-username text-center">'.$emp_name.'</h3>

              <p class="text-muted text-center">ID '.$emp_id.'</p>
			            
              <div class="row">
              	<div class="col-xs-12">
              		<div class="profile-user-info">
						<p>Email address </p>
						<h5>'.$emp_email.'</h5>
						<p>Address </p>
						<h5>'.$emp_address.'</h5>
						<p>Bank</p>
						<h5>'.$bank_name.'</h5> 
						<p>Branch</p>
						<h5>'.$branch_name.'</h5>
						
					</div>
             	</div>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>';




}}}


	public function Insert($emp_name, $emp_email, $emp_photo, $emp_address, $emp_password,$branch_id){
     	
			 $this->insert_to_Employee($emp_name, $emp_email, $emp_photo, $emp_address, $emp_password,$branch_id);
		}
	public function update($key,$name,$id){
     	
			 $this->update_Employee($key,$name,$id);
		}
	


}


