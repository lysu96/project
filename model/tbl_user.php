<?php 
require_once 'confing.php';
class Users extends Databases
{
	private $tbl = "tbl_user";
	
	function __construct()
	{
		parent:: Connect();
	}

	public function List_post()
	{
		$table = $this->tbl;
		$sql = "SELECT * FROM $table";
		return $this->Getdata($sql);
	}
	public function getUser($user)
	{
		$table = $this->tbl;
		$sql = "SELECT * FROM $table WHERE user  = '$user'";
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
		$sql = "SELECT * FROM $table WHERE username = '$user'";
		return $this->Num_rows($sql);
	}
	public function loginUser($email, $pass)
	{
		$table = $this->tbl;
		$sql = "SELECT * FROM $table WHERE email = '$email' AND password = '$pass'";
		return $this->Getdata($sql);
	}
	public function List_id($id)
	{
		$table = $this->tbl;
		$sql = "SELECT * FROM $table WHERE idsp=$id";
		return $this->Getdata($sql);
	}
	public function List_id_ha($id)
	{
		$table = $this->tbl;
		$sql = "SELECT * FROM hinhanh, sanpham WHERE hinhanh.idsp=sanpham.idsp AND hinhanh.idsp=$id";
		return $this->Getdata($sql);
	}
	public function Edit($id, $ten_sp, $hinhanh_sp, $mau_sp, $chitiet_sp, $so_luong, $da_ban, $gia_sp, $khuyenmai_1, $khuyenmai_2, $ma_dm, $ngaycapnhap, $trang_thai)
	{
		$table = $this->tbl;
		$sql = "UPDATE $table SET tensp='$ten_sp', hinhanhsp='$hinhanh_sp', mausp='$mau_sp', chitietsp='$chitiet_sp', soluong='$so_luong', daban='$da_ban', gia='$gia_sp', khuyenmai1='$khuyenmai_1', khuyenmai2='$khuyenmai_2', madm='$ma_dm', ngaycapnhap='$ngaycapnhap', trangthai='$trang_thai' WHERE idsp=$id";
		return $this->Execute($sql);
	}
	public function Add($username, $hoten, $password, $ngaysinh, $gioitinh, $email, $ngaydangky, $phanquyen, $token)
	{
		$table = $this->tbl;
		$sql = "INSERT INTO $table(idnd, username, hoten, password, ngaysinh, gioitinh, email, ngaydangky, phanquyen, token) VALUES (NULL,'$username','$hoten','$password','$ngaysinh','$gioitinh','$email','$ngaydangky','$phanquyen','$token')";
		return $this->Execute($sql);
	}
	public function Delete($id)
	{
		$table = $this->tbl;
		$sql = "DELETE FROM $table WHERE idsp=$id";
		return $this->Execute($sql);
	}
}


 ?>