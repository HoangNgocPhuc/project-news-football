<!DOCTYPE html>
<html>
<head>
	<title>Trang chu</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="<?php echo $url.'admin/public/css/bootstrap.min.css' ?>" >
    <link rel="stylesheet" href="<?php echo $url.'public/css/layout1.css' ?>">

    <script type="text/javascript" src="<?php echo $url.'public/js/1bootstrap.min.js' ?>"></script>
    <script type="text/javascript" src="<?php echo $url.'public/js/jquery.min.js' ?>"></script>
   
    <base href="http://localhost/project_devpro/">
    
    <!-- bootstrap dùng được -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</head>
<script type="text/javascript">
	// function clock(){
	// 	var date =new Date();
	// 	return date.getHours() + ":" + date.getMinutes() + ":" + date.getSeconds() +" "+ date.getDate() + ":" + (date.getMonth()+1) + ":" + date.getFullYear() +"  ";
	// }

    setInterval(
        function(){
            var date =new Date();
            if (date.getHours()<=9){
                h = "0"+date.getHours();
            }
            else
                h = date.getHours();
            if (date.getMinutes()<=9){
                m = "0"+date.getMinutes();
            }
            else
                m = date.getMinutes();
            if (date.getSeconds()<=9){
                s = "0"+date.getSeconds();
            }
            else
                s = date.getSeconds();
            if (date.getDate()<=9){
                d = "0"+date.getDate();
            }
            else
                d = date.getDate();

            month = (date.getMonth()+1);
            if (month<=9){
                month = "0"+(date.getMonth()+1);
            }
            else
                month = date.getMonth()+1;
            var s = h + ":" + m + ":" + s +" "+ d + ":" + month

             + ":" + date.getFullYear() +"  ";
            document.getElementById("clock").innerHTML = s;
        },1000)

	$(document).ready(function(e) {
        
		
		$("#doc-nhieu").click(function(e) {
            $(".doc-nhieu").attr("style","display:block");
			$(".binh-luan").attr("style","display:none");
			$("#doc-nhieu").attr("style","font-weight:bold; font-size:150%;");
			$("#binh-luan").attr("style","font-weight:bold; font-size:100%;");
			$("#binh-luan").attr("style","font-weight:none");
        });
		$("#binh-luan").click(function(e) {
            $(".doc-nhieu").attr("style","display:none");
			$(".binh-luan").attr("style","display:block");
			$("#binh-luan").attr("style","font-weight:bold");
			$("#doc-nhieu").attr("style","font-weight:bold; font-size:100%;");
			$("#binh-luan").attr("style","font-weight:bold; font-size:150%;");
			$("#doc-nhieu").attr("style","font-weight:none");
        });
    });
</script>

<!-- script nut like -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.7";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- end script nut like -->
<body>
	<!-- wrapper -->
	<div class="wrapper">
		<!--header-->
        <div class="header-top">
        	<div id="clock"> </div>
            <div style=" font-size:12px; font-weight:bold; color:white; padding-left:4px; padding-right:4px; float:left">|</div>
            <form method="post" action="index.php/go">
                <div class="box" >Tìm kiếm
            	   <input type="text" name="search1" id="search" required >
            	   <button class="glyphicon glyphicon-search search" style="background:white; border:0;" type="submit" name="go" ></button>

                </div>
            </form> 
           
            <!-- popup login -->
            <?php 
                include "controller/controller_login.php";
            ?>
            <!-- end popup login -->
             - 

            <?php 
                include "controller/controller_sign_up.php";
            ?> 
        </div>
        <!--end header -->

        <!-- popup -->
        

       <!-- end popup --> 


        <!--banner -->
        <div class="banner">
        	<div class="text"><a href="<?php echo $url.'index.php'?>">TIN THỂ THAO</a></div>
        </div>
        <!-- end banner-->
        <div style="background:#DDDDDD; height:100%;">
        <!-- menu -->
        <div class="menu">
        	<!--menu-top-->
        	<div class="menu-top">
        	
       		</div>
        	<!-- end menu top -->
        	<!-- menu botton -->
            <?php
                include "controller/controller_category.php";
            ?>
            <!-- end menu botton -->
       </div>
       <!-- end menu -->
       
       <!-- content -->

       <div class="content">
        <!-- contain main -->
        <div class="content-main" >
            <?php
            if ($controller == "controller/controller_main.php"){
            
        ?>
       		<!-- content left -->
            <div class="content-left">
                <!-- tin noi bat -->
            	<?php
                    include "controller/controller_featured_news.php";
                ?>
                <!-- end tin noi bat --> 
                <!-- Tin chinh khac -->   
			     <?php 
                    include "controller/controller_other_news.php";
                ?>
            <!-- end Tin chinh khac -->
            </div>
            <!-- end content left -->
            
            <!-- content center -->
           <div class="content-center">
                <?php
                    include "controller/controller_news_scroll.php";
                ?>
                <!-- form photo -->
                <?php
                    include "controller/controller_form_photo.php";
                ?>
                <!-- end form photo -->
                 <!-- bài viết của bạn đọc -->
                 <?php 
                    include "controller/controller_user_write.php";
                 ?>
                 <!-- end bài viết của bạn đọc -->
            </div>
            <!-- end content center -->
            <div class="content-bot">
            <!-- tin chuyen nhương -->
            <?php 
                include "controller/controller_chuyen_nhuong.php";
            ?>
            <!-- end tin chuyen nhương -->
            
       <!-- bóng đá quốc tế -->
        <?php
            include "controller/controller_bong_da_quoc_te.php";
        ?>
       <!-- end bóng đá quốc tế -->
       
       <!-- Bài viết bạn đọc -->
        <?php
            include "controller/controller_bai_viet_ban_doc.php";
        ?>
       <!-- end bài viết bạn đọc -->
       </div>
       <!-- end content bottom -->
       <?php } ?>
       <?php 
            if ($controller != "controller/controller_main.php")
                include $controller;
       ?>
    
        </div>
        <!-- end content main -->
        </div>  
        
        <!-- Right -->
        <div class="right">  
            <!-- content right -->
            <div class="content-right">
            	<!-- quang cao -->
                <?php
                    include "controller/controller_adv.php";
                ?>
                <!-- end quang cao -->
                <div class="content-right-bottom">
                	<div class="title">Đọc nhiều nhất</div>
                    <div class="bang-tin">
                    	 <div class="tin">
                    		<a href="#" class="link-image"><img src="public/images/95790d757de741.jpg"></a>
                        	<a href="#" class="link">Những cảm xúc trái chiều sau trận thắng của U16 Việt Nam</a>
                            <hr>
                    	</div>   
                    	 <div class="tin">
                    		<a href="#" class="link-image"><img src="public/images/95790d757de741.jpg"></a>
                        	<a href="#" class="link">Những cảm xúc trái chiều sau trận thắng của U16 Việt Nam</a>
                            <hr>
                    	</div> 
                        <div class="tin">
                    		<a href="#" class="link-image"><img src="public/images/95790d757de741.jpg"></a>
                        	<a href="#" class="link">Những cảm xúc trái chiều sau trận thắng của U16 Việt Nam</a>
                            <hr>
                    	</div>  
                        <div class="tin">
                    		<a href="#" class="link-image"><img src="public/images/95790d757de741.jpg"></a>
                        	<a href="#" class="link">Những cảm xúc trái chiều sau trận thắng của U16 Việt Nam</a>
                            <hr>
                    	</div>    
                    	<div class="tin">
                    		<a href="#" class="link-image"><img src="public/images/95790d757de741.jpg"></a>
                        	<a href="#" class="link">Những cảm xúc trái chiều sau trận thắng của U16 Việt Nam</a>
                    	</div>   
             		</div>
                </div>
            </div>
            <!-- end content right -->
             <!-- content bot right -->
            <div class="content-bot-right">
            <div class="tieu-de">
                <input type="button" value="Đọc nhiều" id="doc-nhieu" >
                <input type="button" value="Bình luận" id="binh-luan" >
            </div>
            <div class="doc-nhieu">
                <a href="#">Danh sách chuyển nhượng mùa Hè 2016</a><br> <hr>
                <a href="#">Đại chiến HLV ngoại ở Premier League: Nước Anh càng... thiệt</a><br><hr>
                <a href="#">Danh sách chuyển nhượng mùa Hè 2016</a><br><hr>
                <a href="#">Đại chiến HLV ngoại ở Premier League: Nước Anh càng... thiệt</a><br><hr>
                <a href="#">Danh sách chuyển nhượng mùa Hè 2016</a>
            </div>
            <div class="binh-luan">
                <a href="#">M.U đạt thỏa thuận cá nhân với Paul Pogba</a><br><hr>
                <a href="#">Cầu thủ xuất sắc nhất châu Âu: Top 10 chưa hoàn hảo</a><br><hr>
                <a href="#">M.U đạt thỏa thuận cá nhân với Paul Pogba</a><br><hr>
                <a href="#">Cầu thủ xuất sắc nhất châu Âu: Top 10 chưa hoàn hảo</a><br><hr>
                <a href="#">M.U đạt thỏa thuận cá nhân với Paul Pogba</a>
            </div>
            </div>
            <!-- end content bottom right -->
       <div style="clear:both"></div>
        </div>    
        <!-- end right -->    
            <div style="clear:both"></div>
       </div>
       <!-- end content -->
       <!-- footer -->
       <div class="footer">
       		Địa chỉ liên hệ : DEV
       </div>
       
       <!-- end footer -->
       </div>
	</div>
	<!-- end wrapper -->
</body>
</html>