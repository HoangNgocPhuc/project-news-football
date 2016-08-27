<?php
	//duyet tat ca ban ghi
	function fetch($sql){
		global $con;
		$result = mysqli_query($con,$sql);
		$arr = array();
		while ($row = mysqli_fetch_array($result))
			$arr[] = $row;
		return $arr;
	}
	//duyet 1 ban ghi
	function fetch_one($sql){
		global $con;
		$result = mysqli_query($con,$sql);
		$rows = array();
		$rows = mysqli_fetch_array($result);
		return $rows;
	}
	//dem so ban ghi
	function num_rows($sql){
		global $con;
		$result = mysqli_query($con,$sql);
		return mysqli_num_rows($result);
	}
	//thuc hien cau truy van
	function execute($sql){
		global $con;
		mysqli_query($con,$sql);
	}
?>