<?php
include_once('include/dbconn.php');
class Register{
	private $pdo;
	public function Insert($email,$password){
		$this->pdo=Database::connect();
		$this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		//sql query
		$sql="insert into register (email,password) values (:email,:psw)";
		//prepare sql statement
		$stmt=$this->pdo->prepare($sql);
		//bind parameter
		$stmt->bindParam(':email',$email);
		$stmt->bindParam(':psw',$password);
		if ($stmt->execute())
		 {
			return true;
		}
		else {
			return false;
		}

	}
	public function show(){
	$this->pdo=Database::connect();
		$this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		//sql query
		$sql="select * from register";
		//prepare sql statement
		$stmt=$this->pdo->prepare($sql);
    $stmt -> execute();
    $results = $stmt -> fetchAll(PDO::FETCH_ASSOC);
    return $results;
	}
	public function Reg($email){
	$this->pdo=Database::connect();
		$this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		//sql query
		$sql="select * from register where email=:email";
		//prepare sql statement
		$stmt=$this->pdo->prepare($sql);
		$stmt->bindParam(':email',$email);
    $stmt -> execute();
    $results = $stmt -> fetchAll(PDO::FETCH_ASSOC);
    return $results;	
	}
}
?>