<?php

class viewemployee extends employee {

public function emp_count(){
		$datas = $this-> getAllemployee();
		$c=0;
		foreach ($datas as $data) {
			$c=$c+1;
			
		}
		echo $c;
	}

	public function bank_count(){
		$datas = $this-> getallbanks();
		$c=0;
		foreach ($datas as $data) {
			$c=$c+1;
			
		}
		echo $c;
	}
	public function branch_count(){
		$datas = $this-> getallbranches();
		$c=0;
		foreach ($datas as $data) {
			$c=$c+1;
			
		}
		echo $c;
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

				$banks = $this-> getallbank($bank_id);
				foreach ($banks as $bank) {
			
					$bank_name= $bank['bank_name'];
					
			
			

		}
			
			

		}

		if (isset($data['emp_photo'])){
		 	$emp_photo=$emp_photo;
		}
		else{
			$emp_photo="images/thumb.png";
		}	

		if($edit == $emp_id){
echo'<tr class="progress progress-xs progress-striped active">
<form action="update.php?id='.$emp_id.'" method="post" enctype="multipart/form-data">
<td><input type="file"  id="image" name="image"></td>
<td>'.$emp_id.'</td>
<td><input type="text" value="'.$emp_name.'" name="name"></td>
<td><input type="text" value="'.$emp_email.'" name="email"></td>
<td><input type="text" value="'.$emp_address.'" name="add"></td>
<td><select name="branch" ><option value='.$emp_branch_id.'>'.$bank_name.' - '.$branch_name.'</option>'; $this -> select_option("bank_branch","branch_id","branch_name"); echo'</select></td>
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
<td>'.$bank_name.' - '.$branch_name.'</td>
<td><a href="employee.php?edit='.$emp_id.'"<span class="label label-success">Edit</span></a></td>
<td><a href="view.php?id='.$emp_id.'"<span class="label label-info">View</span></a></td>
<td><a href="employee.php?del='.$emp_id.'"<span class="label label-danger">Delete</span></a></td>
</tr>';

}
		}
	}
}

public function select_option($table,$value,$option){
		$datas = $this-> getoptions3("bank_branch");
		$bank_id=null;
		foreach ($datas as $data) {
			$bank_id=$data['bank_id'];
			$branch_name=$data['branch_name'];
			$branch_id=$data['branch_id'];

			$banks = $this-> getoptions2("bank",$bank_id);
			$bank_name = null;
			foreach ($banks as $bank) {
				$bank_name = $bank['bank_name'];	
			}

			echo '<option value="'.$branch_id.'">'.$bank_name.'-'.$branch_name.'</option>';	

			
		}
	}

public function select_optionform(){
		$datas = $this-> getbank();
		$bank_id=null;
		foreach ($datas as $data) {
			$bank_id=$data['bank_id'];
			$bank_name=$data['bank_name'];
		
			echo '<option value="'.$bank_id.'">'.$bank_name.'</option>';	

			
		}
	}

public function select_option3($table,$value,$option){
		$datas = $this-> getoptions($table);
		$bank_id=null;
		foreach ($datas as $data) {
			$bank_id=$data['bank_id'];
			$banks = $this-> getoptionsreg("bank");
			$bank_name = null;
			foreach ($banks as $bank) {
				$bank_name = $bank['bank_name'];	
			}

			echo '<option value="'.$data[''.$value.''].'">'.$data[''.$option.''].'</option>';	

			
		}
	}

public function select_option2($table,$value,$option,$op){
		$datas = $this-> getoptions2($table,$op);
		foreach ($datas as $data) {



			echo '<option value="'.$data[''.$value.''].'"> '.$data[''.$option.''].'</option>';	



			
		}
	}

public function select_optionbranch($op){
		$datas = $this-> getoptionsbr($op);
		foreach ($datas as $data) {



			echo '<option value="'.$data['branch_id'].'"> '.$data['branch_name'].'</option>';	



			
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
	
	public function all_updater($table,$key,$name,$id,$where)
	{
     	
			 $this->updater($table,$key,$name,$id,$where);
		}
	

	
public function bank_detail($edit){
	$banks = $this-> getallbanks();
	
	foreach ($banks as $bank) {
			
		$bank_id= $bank['bank_id'];
		$bank_name= $bank['bank_name'];

		
		
		if($edit == $bank_id){
echo'<tr class="progress progress-xs progress-striped active">
<form action="bank_update.php?id='.$bank_id.'" method="post" enctype="multipart/form-data">
<td>'.$bank_id.'</td>
<td><input type="text" value="'.$bank_name.'" name="name"></td>
<td><input type="submit" class="btn-primary" value="Save"></td>
<td><a href="bank.php"<span class="label label-warning">cancel</span></a></td>
</form>
</tr>';

}
else{
	echo'<tr>
<td>'.$bank_id.'</td>
<td>'.$bank_name.'</td>
<td><a href="bank.php?edit='.$bank_id.'"<span class="label label-success">Edit</span></a></td>
<td><a href="bank.php?del='.$bank_id.'"<span class="label label-danger">Delete</span></a></td>
</tr>';

}
		}
	
	}

		public function bank_update($key,$name,$id){
     	
			 $this->update_bank($key,$name,$id);
		}

		public function Insert_bank($bank_name){
     	
			 $this->insert_to_bank($bank_name);
		}


public function branch_detail($edit){
	$branches = $this-> getallbranches();
	
	foreach ($branches as $branch) {
			
		$branch_id=  $branch['branch_id'];
		$branch_name=  $branch['branch_name'];
		$bank_id=  $branch['bank_id'];
		$branch_address=  $branch['branch_address'];
		$bank_name =null;
		$banks = $this-> getallbank($bank_id);
				foreach ($banks as $bank) {
			
					$bank_name= $bank['bank_name'];			

		}


		
		
		if($edit == $branch_id){
echo'<tr class="progress progress-xs progress-striped active">
<form action="branch_update.php?id='.$branch_id.'" method="post" enctype="multipart/form-data">

<td>'.$branch_id.'</td>
<td>'.$bank_name.'</td>
<td><input type="text" value="'.$branch_name.'" name="name"></td>
<td><input type="text" value="'.$branch_address.'" name="add"></td>
<td><input type="submit" class="btn-primary" value="Save"></td>
<td><a href="branch.php"<span class="label label-warning">cancel</span></a></td>
</form>
</tr>';

}
else{
	echo'<tr>
<td>'.$branch_id.'</td>
<td>'.$bank_name.'</td>
<td>'.$branch_name.'</td>
<td>'.$branch_address.'</td>
<td><a href="branch.php?edit='.$branch_id.'"<span class="label label-success">Edit</span></a></td>
<td><a href="branch.php?del='.$branch_id.'"<span class="label label-danger">Delete</span></a></td>
</tr>';

}
		}
	
	}


	public function select_bank_option(){

			$datas = $this-> getbank();
			foreach ($datas as $data) {
					echo '<option value="'.$data['bank_id'].'"> '.$data['bank_name'].'</option>';	



			
		
	}

	
}

	public function Insert_branch($branch_name,$branch_address,$branch_bank){

		$this -> insert_to_branch($branch_name,$branch_address,$branch_bank);

}

public function branch_update($key,$name,$id){
     	   
			 $this-> update_branch($key,$name,$id);
		}


}
