<div class="pyro"><div class="before"></div><div class="after"></div></div>
<div class="row" style="margin-top: 20px;">
	<div class="col-md-12 table-responsive">
		<h3 style="text-align: center;margin-top:100px;">Yeah!!!</h3>
<?php
if( $_SESSION['role_id'] == 1 ){
 ?>
<h5 style="text-align: center;color:red;">Hello : ADMIN </h5>
<?php 
}elseif( $_SESSION['role_id'] == 2 ){
?>
<h5 style="text-align: center;color:#aa3917;">Hello : Quản Lý </h5>
<?php
}else{

      ?>
<h5 style="text-align: center;color:#aa3917;">Hello : Nhân viên</h5>
<?php
  }
  ?>
<br>
<h5 style="text-align: center; margin-top:-20px; color:red;">  <?php  if(isset($_SESSION['dangnhap'])){echo  ($_SESSION['dangnhap']);} ?> </h5>
    </div>