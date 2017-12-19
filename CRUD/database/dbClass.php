<?php 
class DbManger
{
	private $conn=NULL;
	  
	public function __construct()
	{
	  $this->dbinit();
	  $this->CreateTable();
	}
   
	function dbinit()
	{
	  $servername ="localhost";
	  $username = "id3113546_husnain";
	  $password = "Ali123456";
	  
	  $this->conn = new PDO('mysql:host=localhost;dbname=id3113546_test;charset=utf8mb4',$username,$password);
	}
   
	function CreateTable()
	{
  
	  try {
	  
	  $sql = "CREATE TABLE IF NOT EXISTS student (
	  ID int(11) AUTO_INCREMENT PRIMARY KEY,
	  name varchar(30) NOT NULL, email varchar(30) NOT NULL, password varchar(30) NOT NULL)";
	  $result=$this->conn->exec($sql);
	  
	  }
	  catch(PDOException $e)
	  {
	  echo $sql . "<br>" . $e->getMessage();
	  }
	}
  
	function AddStudent($name, $email,$password)
	{
	  try{
			$sql = "INSERT INTO student (name, email, password) VALUES ('$name', '$email', '$password')";
			$result=$this->conn->exec($sql);
			if($result)
			{
				echo"Alert! Student Added Successfully";	
			}
			else
			{
				echo"Alert! Student Failed";
			}
		}
		catch(PDOException $e)
		{
			echo $result . "<br>" . $e->getMessage();
		}
	  
	}
	
	function viewStudent()
	{
		$sql = 'SELECT ID, name, email, password FROM student';
   	    foreach ($this->conn->query($sql) as $row)
		{
			echo '<tr>
			<td>'.$row['name'].'</td>
			<td>'.$row['email'].'</td>
			<td>'.$row['password'].'</td>
			<td><a href="/update-student.php?updateId='.$row['ID'].'&updatename='.$row['name'].'&updateemail='.$row['email'].'&updatepassword='.$row['password'].' ">Edit</a></td>
			<td><a href="/View-student.php?deleteId='.$row['ID'].'">Delete</a></td> </tr>';
		}
	}
	
	function deleteStudent($id)
	{
		$sql = 'DELETE FROM student WHERE ID = '.$id.'';
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
	
	function updateStudent($name, $email,$password)
	{
	  try{
		   $sql="UPDATE student SET name = '$name', email = '$email', password = '$password' WHERE ID = ".$_GET['updateId'];
			
			$result=$this->conn->exec($sql);
			if($result)
			{
				echo"Alert! Student updated Successfully";	
			}
			else
			{
				echo"Alert! Student Failed";
			}
		}
		catch(PDOException $e)
		{
			echo $result . "<br>" . $e->getMessage();
		}
	  
	}
	
  
}
  ?>
