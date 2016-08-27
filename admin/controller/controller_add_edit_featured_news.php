<?php
	$act = isset($_GET["act"]) ? $_GET["act"]:"";
	switch ($act) {
		case 'edit':
			$id = isset($_GET["id"]) ? $_GET["id"]:0;
			$id = is_numeric($_GET["id"]) ? $_GET["id"]:0;
			//lay thong tin ve featured_news co id truyen vao
			$arr = fetch_one("select * from tbl_featured_news where pk_featured_news_id=$id");
			//print_r($arr);
			$form_action = "index.php?controller=add_edit_featured_news&act=do_edit&id=$id";
			include "view/view_add_edit_featured_news.php";
		break;

		case 'do_edit':
			# code...
			$id = isset($_GET["id"]) ? $_GET["id"]:0;
			$id = is_numeric($_GET["id"]) ? $_GET["id"]:0;
			$c_name = $_POST["c_name"];
			$c_description = $_POST["c_description"];
			$c_content = $_POST["c_content"];
			execute("update tbl_featured_news set c_name='$c_name',c_description='$c_description',c_content='$c_content' where pk_featured_news_id=$id");

			//load file img
				//echo  $_FILES["c_img"]["name"];
			if (isset($_FILES["c_img"]["name"]) && $_FILES["c_img"]["name"]!= ""){
				//delete anh tu folder
				$arr_img = fetch_one("select c_img from tbl_featured_news where pk_featured_news_id=$id");
				if (file_exists("../".$arr_img['c_img']))
					unlink("../".$arr_img['c_img']);

				$c_img = $_FILES["c_img"]["name"];
				$c_img = "public/upload/news/".time().$c_img;
				//thuc hien upload
				move_uploaded_file($_FILES["c_img"]["tmp_name"], "../".$c_img );
				//update thong tin vao CSDL
				execute("update tbl_featured_news set c_img='$c_img' where pk_featured_news_id=$id");
			}
			//end load file img
			
			header("location:index.php?controller=featured_news");
			break;

		case 'add':
			# code...
			$form_action = "index.php?controller=add_edit_featured_news&act=do_add";
			include "view/view_add_edit_featured_news.php";
			break;
		case 'do_add':
			$c_name = $_POST["c_name"];
			$c_description = $_POST["c_description"];
			$c_content = $_POST["c_content"];

			//------------
			$c_name = str_replace("'", "\'", $c_name);
			$c_description = str_replace("'", "\'", $c_description);
			$c_content = str_replace("'", "\'", $c_content);
			//------------
			//-----------
			//upload images
			$c_img = "";
			if(isset($_FILES["c_img"]["name"])){
				$c_img = $_FILES["c_img"]["name"];
				$c_img = "public/upload/news/".time().$c_img;
				//thuc hien upload
				move_uploaded_file($_FILES["c_img"]["tmp_name"], "../".$c_img);
				//update thong tin vao csdl
				//execute("update tbl_featured_news set c_img='$c_img' where pk_featured_news_id=$id");
			}
			//-----------
			execute("insert into tbl_featured_news(c_name,c_description,c_content,c_img) values('$c_name','$c_description','$c_content','$c_img')");
			header("location:index.php?controller=featured_news");
		break;	
	}
?>