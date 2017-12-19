<?php
	class DbManger
	{
		private $conn; /*that is class member that we use in class*/
		
		 /*here class constructer start*/
		public function __construct()
		{
			$this->dbInitialization();
			$this->AddTables();
		}                           
		
		/*that create connection with database*/
		function dbInitialization()
		{
	  		$servername ="localhost";
	  		$username = "id3113546_husnain";
	  		$password = "Ali123456";
	  
	  		$this->conn = new PDO('mysql:host='.$servername.';dbname=id3113546_test;charset=utf8mb4',$username,$password);

		}
		
		/*this method create tables in database if that are not already in database*/
		function AddTables()
		{
			try
			{
				$sql = "CREATE TABLE IF NOT EXISTS employee(
						ID int(11) AUTO_INCREMENT PRIMARY KEY,
						first_name varchar(30) NOT NULL,
						second_name varchar(30) NOT NULL, 
						email varchar(30) NOT NULL, 
						password varchar(30) NOT NULL)";
	  			
				$result=$this->conn->exec($sql);
				if($result)
				{
					echo "Table is Created Successfully";	
				}
				
			}
			catch(PDOException $e)
			{
				echo $sql ."<br>". $e->getMessage();
			}
		}
		
		/*this method used for creating employee new record in emloyee table*/
		function AddEmployee($fname,$sname,$email,$password)
		{
			try
			{
				$sql = "INSERT INTO employee (first_name, second_name, email, password) VALUES ('$fname', '$sname', '$email', '$password')";
				$result=$this->conn->exec($sql);
				
				if($result)
				{
					echo "<br /> Record Added Successfully";
				}
				else
				{
					echo "<br /> Record Addition Failed";	
				}
			}
			catch(PDOException $e)
			{
				echo $sql ."<br>". $e->getMessage;
			}
		}
		
		/*this code is used for display all record of Table*/
		function ShowEmployee()
		{
			$sql = 'SELECT * FROM employee';
			foreach($this->conn->query($sql) as $row)
			{
				echo '<tr>
				<td>'.$row["first_name"].'</td>
				
				<td>'.$row["second_name"].'</td>
				
				<td>'.$row["email"].'</td>
				
				<td>'.$row["password"].'</td>
				
				<td>
					<a href="/new_project/edit_emp.php?Id='.$row['ID'].'&fname='.$row['first_name'].' &sname='.$row['second_name'].' 
					&email='.$row['email'].' &password='.$row['password'].'">Edit</a>	   
				</td>
				
				<td><a href="/new_project/show_emp.php?deleteId='.$row['ID'].'">Remove</a></td>
				
				</tr>';
			}
		}
		
		/*this method is for removing record*/
		function DeleteEmployee($id)
		{
			$sql = 'DELETE FROM employee WHERE ID = '.$id.'';
			$result=$this->conn->exec($sql);
			if($result)
			{
		 		echo "Record deleted Successfully";
			}
			else
			{
				echo "Record deleted Failed";	
			}
		}
		
		/*this method is for updating record*/
		function EditEmployee($fname,$sname,$email,$password)
		{
			 try{
		   			$sql="UPDATE employee SET first_name = '$fname', 
						  second_name = '$sname', email = '$email', password = '$password' WHERE ID = ".$_GET['Id'];
					$result=$this->conn->exec($sql);
					if($result)
					{
						echo"Alert! Employee updated Successfully";	
					}
					else
					{
						echo"Alert! Employee Failed";
					}
					
				}
				catch(PDOException $e)
				{
					echo $result . "<br>" . $e->getMessage();
				}
		
		}
		
		
		
	}
?>