<?php
class employee extends dbbank {
		
	protected function getAllemployee(){

		$sql = 'SELECT * FROM employee';
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


		protected function getbank($bank_id){

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
	protected function getoptions($table){

			$sql = 'SELECT * FROM '.$table.'';
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

protected function insert_to_Employee($emp_name, $emp_email, $emp_photo, $emp_address, $emp_password,$branch_id){

		
		
		$query ="INSERT INTO employee(emp_name,`emp_email`,emp_photo,emp_address,emp_password,branch_id, status) VALUES ('$emp_name','$emp_email','$emp_photo','$emp_address','$emp_password',$branch_id,1)";
						$conn = $this->connect() ;
		
		mysqli_query($conn, $query);
			
				echo "Error occurred: " . mysqli_error($conn);



}		


protected function update_Employee($key, $name,$id){

		
		
		$query ="UPDATE employee SET '$Key'='$name', WHERE emp_id='$id'";
						$conn = $this->connect() ;
		
		mysqli_query($conn, $query);
			
				echo "Error occurred: " . mysqli_error($conn);



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


}