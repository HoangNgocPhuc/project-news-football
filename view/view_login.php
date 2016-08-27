<a href="#" data-toggle="modal" data-target="#login" style="cursor:pointer;" >
  Login
            </a>
            <!-- Modal -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="color:black"  >
    <div class="modal-dialog custom-class" style="width:300px">
        <div class="modal-content" >
            <div class="panel-body">
                <form method="post" action="index.php?controller=login" >
                    <!-- rows -->
                    <div class="row" >
                        <div style="text-align:center; font-size:20px; font-weight:bold">Login</div>
                    </div>
                    <!-- end rows -->
                    <!-- rows -->
                    <div class="row" style="margin-top:5px;">
                        <div class="col-md-3">
                            Username
                        </div>
                        <div class="col-md-9">
                            <input type="text" name="c_username" class="form-control" required>
                        </div>
                    </div>
                    <!-- end rows -->
                    <!-- rows -->
                    <div class="row" style="margin-top:5px;">
                        <div class="col-md-3">
                            Password
                        </div>
                        <div class="col-md-9">
                            <input type="password" name="c_password" class="form-control" required>
                        </div>
                    </div>
                    <!-- end rows -->
                    <!-- rows -->
                    <div class="row" style="margin-top:5px;">
                        <div class="col-md-3">
                            
                        </div>
                        <div class="col-md-9">
                            <input type="submit" value="Login" class="btn btn-primary" name="login">
                            <button type="button" style="background:#DDDDDD" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    <!-- end rows -->
                    <div class="row" >
                        <div style="text-align:center; color:red; ;font-style: italic;">Đăng nhập để có quyền đăng bài trên trang web</div>
                    </div>
                </form>
            </div>
        </div>
    </div> -->
</div> 