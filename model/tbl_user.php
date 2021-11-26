<?php 
require_once 'confing.php';
class Users extends Databases
{
	private $tbl = "tbl_user";
	
	function __construct()
	{
		parent:: Connect();
	}

	public function List_user()
	{
		$table = $this->tbl;
		$sql = "SELECT * FROM $table";
		return $this->Getdata($sql);
	}
	public function getEmail($email)
	{
		$table = $this->tbl;
		$sql = "SELECT * FROM $table WHERE email  = '$email'";
		return $this->Getdata($sql);
	}
	public function Ckeck_email($email)
	{

		$table = $this->tbl;
		$sql = "SELECT * FROM $table WHERE email = '$email'";
		return $this->Num_rows($sql);
	}
	public function check_user($user)
	{
		$table = $this->tbl;
		$sql = "SELECT * FROM $table WHERE user = '$user'";
		return $this->Num_rows($sql);
	}
	public function loginUser($email, $pass)
	{
		$table = $this->tbl;
		$sql = "SELECT * FROM $table WHERE email = '$email' AND pass = '$pass'";
		return $this->Getdata($sql);
	}
	public function List_id_user($id)
	{
		$table = $this->tbl;
		$sql = "SELECT * FROM $table WHERE id=$id";
		return $this->Getdata($sql);
	}
	
	// `user``email``pass``name``address``telephone``token``level`
	public function Edit_user($id, $user, $email, $name, $address, $telephone)
	{
		$table = $this->tbl;
		$sql = "UPDATE $table SET user='$user', email='$email', name='$name', address='$address', telephone='$telephone' WHERE id='$id'";
		return $this->Execute($sql);
	}
	
	public function Add_user($user, $email, $pass, $name, $address, $telephone, $token, $level)
	{
		// INSERT INTO tbl_user(id, user, email, pass, name, address, telephone, token, level) VALUES(NULL, '$user', '$email', '$pass', '$name', '$address', '$telephone', '$token', '$level') ON DUPLICATE KEY UPDATE email = $email;
		
		$table = $this->tbl;
		$sql = "INSERT INTO $table(id, user, email, pass, name, address, telephone, token, level) VALUES (NULL, '$user', '$email', '$pass', '$name', '$address', '$telephone', '$token', '$level')";
		return $this->Execute($sql);
	}
	public function Delete($id)
	{
		$table = $this->tbl;
		$sql = "DELETE FROM $table WHERE id = $id";
		return $this->Execute($sql);
	}
}


 ?>