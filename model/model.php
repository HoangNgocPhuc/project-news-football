<?php
	include "admin/model/model.php";
	//kiem tra xem có phần tử nào của array nằm trong $c_category của news không;
	function check($arr,$c_category)
	{
		//convert $arr;
		$c = array();
		foreach ($arr as $rows) {
			# code...
			$c[] = $rows[0];
		}

		foreach ($c as $rows) {
			# code...
			$s = (",".$rows.",");
			if (isset($c_category) && strpos($c_category, $s)==true)
				return true;
		}
		return false;
	}
?>