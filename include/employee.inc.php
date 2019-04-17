<?php
class employee extends dbbank {
		
	protected function getAllemployee(){

		$sql = 'SELECT * FROM employee WHERE status=1';
		$result = $this->connect() -> query($sql);
		$numRows =$result -> num_rows;
		if ($numRows > 0){
			while ($row =$result->fetch_assoc()){
				$data[] = $row;
			}
			return $data;
		}
	}

	protected function getemployee($emp_id){

		$sql = 'SELECT * FROM employee WHERE emp_id='.$emp_id.'';
		$result = $this->connect() -> query($sql);
		$numRows =$result -> num_rows;
		if ($numRows > 0){
			while ($row =$result->fetch_assoc()){
				$data[] = $row;
			}
			return $data;
		}
	}


		protected function getbranch($branch_id){

		$sql = 'SELECT * FROM bank_branch WHERE branch_id='.$branch_id.' ';
		$result = $this->connect() -> query($sql);
		$numRows =$result -> num_rows;
		if ($numRows > 0){
			while ($row =$result->fetch_assoc()){
				$data[] = $row;
			}
			return $data;
		}
	}

	protected function getallbank($bank_id){

		$sql = 'SELECT * FROM bank WHERE bank_id='.$bank_id.' ';
		$result = $this->connect() -> query($sql);
		$numRows =$result -> num_rows;
		if ($numRows > 0){
			while ($row =$result->fetch_assoc()){
				$data[] = $row;
			}
			return $data;
		}
	}

		protected function getbank(){

		$sql = 'SELECT * FROM bank WHERE status=1';
		$result = $this->connect() -> query($sql);
		$numRows =$result -> num_rows;
		if ($numRows > 0){
			while ($row =$result->fetch_assoc()){
				$data[] = $row;
			}
			return $data;
		}
	}
	protected function getoptions($table){

			$sql = "SELECT * FROM bank WHERE status=1 ";
			$result = $this->connect() -> query($sql);
			$numRows =$result -> num_rows;
			if ($numRows > 0){
				while ($row =$result->fetch_assoc()){
					$ids[] = $row;
				}
				return $ids;
			}
		}

protected function getoptions2($table,$op){

			$sql = 'SELECT * FROM '.$table.' WHERE bank_id='.$op.'';
			$result = $this->connect() -> query($sql);
			$numRows =$result -> num_rows;
			if ($numRows > 0){
				while ($row =$result->fetch_assoc()){
					$ids[] = $row;
				}
				return $ids;
			}
		}
		protected function getoptionsbr($op){

			$sql = "SELECT * FROM bank_branch WHERE bank_id='.$op.' AND status=1";
			$result = $this->connect() -> query($sql);
			$numRows =$result -> num_rows;
			if ($numRows > 0){
				while ($row =$result->fetch_assoc()){
					$ids[] = $row;
				}
				return $ids;
			}
		}

		protected function getoptions3($table){

			$sql = 'SELECT * FROM bank_branch WHERE status=1';
			$result = $this->connect() -> query($sql);
			$numRows =$result -> num_rows;
			if ($numRows > 0){
				while ($row =$result->fetch_assoc()){
					$ids[] = $row;
				}
				return $ids;
			}
		}
		protected function getoptionsfilter($table,$filter_id){
			

			$sql = 'SELECT * FROM bank_branch WHERE status=1 AND branch_id != '.$filter_id.'';
			$result = $this->connect() -> query($sql);
			$numRows =$result -> num_rows;
			if ($numRows > 0){
				while ($row =$result->fetch_assoc()){
					$ids[] = $row;
				}
				return $ids;
			}
		}

		protected function getoptions4($table,$op){

			$sql = 'SELECT * FROM '.$table.' WHERE status=0';
			$result = $this->connect() -> query($sql);
			$numRows =$result -> num_rows;
			if ($numRows > 0){
				while ($row =$result->fetch_assoc()){
					$ids[] = $row;
				}
				return $ids;
			}
		}



protected function insert_to_Employee($emp_name, $emp_email, $emp_photo, $emp_address, $emp_password,$branch_id){

		
		
		$query ="INSERT INTO employee(emp_name,`emp_email`,emp_photo,emp_address,emp_password,branch_id, status) VALUES ('$emp_name','$emp_email','$emp_photo','$emp_address','$emp_password',$branch_id,1)";
						$conn = $this->connect() ;
		
		mysqli_query($conn, $query);
			
				echo "Error occurred: " . mysqli_error($conn);



}		


protected function update_Employee($key, $name,$id){
				
		$query ="UPDATE employee SET $key ='$name' WHERE emp_id ='$id'";
		$conn = $this->connect() ;
		
		mysqli_query($conn, $query);
			
				echo "Error occurred: " . mysqli_error($conn);



}

protected function updater($table,$key, $name,$id,$where){
				
		$query ="UPDATE $table SET $key ='$name' WHERE $where ='$id'";
		$conn = $this->connect() ;
		
		mysqli_query($conn, $query);
			
				echo  "Error occurred: " . mysqli_error($conn);



}

protected function select_branch($table,$col){

		$sql = 'SELECT name * FROM bank_branch';
		$result = $this->connect() -> query($sql);
		$numRows =$result -> num_rows;
		if ($numRows > 0){
			while ($row =$result->fetch_assoc()){
				$data[] = $row;
			}
			foreach ($data as $key) {
			 	
			 } $data;

		}
	}

	protected function getallbanks(){

		$sql = 'SELECT * FROM bank WHERE status="1"';
		$result = $this->connect() -> query($sql);
		$numRows =$result -> num_rows;
		if ($numRows > 0){
			while ($row =$result->fetch_assoc()){
				$data[] = $row;
			}
			return $data;
		}
	}

protected function update_bank($key, $name,$id){
				
		$query ="UPDATE bank SET $key ='$name' WHERE bank_id ='$id'";
		$conn = $this->connect() ;
		
		mysqli_query($conn, $query);
			
				echo "Error occurred: " . mysqli_error($conn);



}


protected function insert_to_bank($bank_name){

		
		
		$query ="INSERT INTO bank(bank_name,status) VALUES ('$bank_name',1)";
						$conn = $this->connect() ;
		
		mysqli_query($conn, $query);
			
				echo "Error occurred: " . mysqli_error($conn);



}

	protected function getallbranches(){

		$sql = 'SELECT * FROM bank_branch WHERE status="1"';
		$result = $this->connect() -> query($sql);
		$numRows =$result -> num_rows;
		if ($numRows > 0){
			while ($row =$result->fetch_assoc()){
				$data[] = $row;
			}
			return $data;
		}
	}

	protected function insert_to_branch($branch_name,$branch_address,$branch_bank){

		
		
		$query ="INSERT INTO bank_branch(branch_name,branch_address,bank_id,status) VALUES ('$branch_name','$branch_address','$branch_bank',1)";
		$conn = $this->connect() ;
		
		mysqli_query($conn, $query);
			
				echo "Error occurred: " . mysqli_error($conn);



}	

protected function update_branch($key, $name,$id){
				
		$query ="UPDATE bank_branch SET $key ='$name' WHERE branch_id ='$id'";
		$conn = $this->connect() ;
		
		mysqli_query($conn, $query);
			
				echo "Error occurred: " . mysqli_error($conn);



}
}