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

	<link rel="stylesheet" href="css/lesson.css"/>
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
		<?php
						$dosql->Execute("SELECT * FROM `#@__infolist` where classid=14 and flag like '%f%' AND delstate='' AND checkinfo=true ORDER BY orderid DESC LIMIT 0,3;");
						while($row = $dosql->GetArray())
						{
							if($row['linkurl'] != '')$gourl = $row['linkurl'];
							else $gourl = 'javascript:;';
					?>
			<div  class="col-lg-12 col-md-12 col-xs-12">
				<div class="bigimg">
					<img src="<?php echo $row['picurl']; ?>" alt="" width="1100px" height="150px" />
				</div>
			</div>
			<?php
				}
				?>
		</div>
	</div>
	<!--end 大图片 -->
<!-- /banner-->
<!-- notice-->
<!--  start  横线部分-->
<div class="line">
<div class="container">
	<div class="row">
      <div class="col-lg-12 col-md-12 col-xs-12">
             <div class="line-text">
             <span>解决方案</span><a href="index.html">您当前所在位置：首页 > 解决方案</a>
		   </div>
	    </div>
	</div>
</div>
</div>
<div class="content-line">
<div class="container">
	<div class="row">
      <div class="col-lg-12 col-md-12 col-xs-12">
             <div class="content-line-text">
             <span>解决方案</span>
		   </div>
	    </div>
	</div>
</div>
</div>
<!-- end  横线部分-->
<!-- /notice-->
<!-- mainbody-->
<!--start 内容 -->

<div class="article">
			<div class="container">
					<?php
						$dosql->Execute("SELECT * FROM `#@__infolist` where classid=14 and flag like 'a%' AND delstate='' AND checkinfo=true ORDER BY orderid DESC LIMIT 0,3;");
						while($row = $dosql->GetArray())
						{
							if($row['linkurl'] != '')$gourl = $row['linkurl'];
							else $gourl = 'javascript:;';
					?>
					<div class="row one">
						<div class="col-lg-4 col-md-4 col-xs-4 a-one">
							<img src="<?php echo $row['picurl']; ?>" alt="<?php echo $row['title']; ?>">
						</div>
						<div class="col-lg-8 col-md-8 col-xs-8 a-onep">

							<h3><a href="<?php echo $row['linkurl']; ?>"><?php echo $row['title']; ?></a></h3>
							<time datetime="时间:2017-03-28">时间：时间:2017-03-28</time>
							<p><?php echo $row['content']; ?></p>
						</div>
					</div>
					<?php
				}
				?>
			</div>
	</div>

	
	<!--end 内容 -->
<!-- /mainbody-->
<!-- footer-->
<?php require_once('footer.php'); ?>
<!-- /footer-->
</body>
</html>