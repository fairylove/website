<?php
require_once(dirname(__FILE__).'/include/config.inc.php');

//初始化参数检测正确性
$cid = empty($cid) ? 9 : intval($cid);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php echo GetHeader(1,$cid); ?>
	<link rel="stylesheet" href="css/index.css"/>
	<link rel="stylesheet" href="css/common.css"/>
	<script src="JS/jquery.min.js"></script>
	<script src="JS/lesson.js"></script>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
<!-- header-->
<?php require_once('header.php'); ?>
<!-- /header-->
<!-- banner-->
<!--start 大图片 -->
	<div class="container">
		<div class="row">
			<div  class="col-lg-12 col-md-12 col-xs-12">
				<div class="bigimg">
					<img src="images/4.jpg" alt="" width="1100px" height="150px" />
				</div>
			</div>
		</div>
	</div>
	<!--end 大图片 -->
<!-- /banner-->
<!-- notice-->
<div class="subnotice"><strong>网站公告：</strong><?php echo Info(1); ?></div>
<!-- /notice-->
<!-- mainbody-->
<div class="subBody">
	<div class="subTitle"> <span class="catname"><?php echo GetCatName($cid); ?></span> <span class="fr">您当前所在位置：<?php echo GetPosStr($cid); ?></span>
		<div class="cl"></div>
	</div>
	<div class="OneOfTwo">
		<div class="subCont"> <?php echo Info($cid); ?> </div>
	</div>
	<div class="TwoOfTwo">
		<?php require_once('lefter.php'); ?>
	</div>
	<div class="cl"></div>
</div>
<!-- /mainbody-->
<!-- footer-->
<?php require_once('footer.php'); ?>
<!-- /footer-->
</body>
</html>