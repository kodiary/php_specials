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
		//"UPDATE news SET title='adfa',description='adfadf',author='adfa' WHERE id = 1";

		$q = "UPDATE ".$tbl." SET ";
		$set = '';
		foreach($arr as $k=>$v)
		{
			if($set == '')
			{
				$set = $k."='".$v."'";
			}
			else
			{
				$set = $set.','.$k."='".$v."'";
			}
		}
		$q = $q.$set." WHERE id = ".$id;
		$this->query($q);
	}
	public function insert($tbl,$arr)
	{
		$q = "INSERT INTO ".$tbl." (";
		$fields = '';//title,description,author
		$values = '';//'Sample title','Sample description','Anwar Ali'
		foreach($arr as $k=>$v)
		{
			if($fields=='')
			{
				$fields = $k;
			}
			else
			{
				$fields = $fields.','.$k;
			}

			if($values=='')
			{
				$values = "'".$v."'";
			}
			else
			{
				$values = $values.",'".$v."'";
			}
		}
		$q = $q.$fields.') VALUES('.$values.')';
		$this->query($q);

	}
	public function select($tbl,$cond='')
	{
		if($cond=='')
			$q = "SELECT * FROM ".$tbl;
		else
			$q = "SELECT * FROM ".$tbl." WHERE ".$cond; 
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
	public function clean($str)
	{
		$str = trim($str);
		return mysqli_real_escape_string($this->link,$str);
	}

}