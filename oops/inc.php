<?php
class Inc{
	public $link = null;
	public function __construct()//This is equivalent to Inc()
	{
		$this->link = mysqli_connect("localhost","root","mysql","php_specials");
	}
	public function query($q)
	{
		$result = mysqli_query($this->link,$q);
		return $result;
	}
	public function delete($tbl,$id)
	{
		$q = "DELETE FROM ".$tbl." WHERE id = ".$id;
		$result = $this->query($q);
	}
	public function update($tbl,$id,$arr)
	{

	}
	public function insert($tbl,$arr)
	{

	}
	public function select($tbl)
	{
		$q = "SELECT * FROM ".$tbl;
		$result = $this->query($q);
		return $result;
	}
	public function check_num($result)
	{
		return mysqli_num_rows($result);
	}
	public function fetch($result)
	{
		return mysqli_fetch_object($result);
	}
	public function redirect($url)
	{
		header('Location:'.$url);
	}

}