<?php
require_once(dirname(__FILE__).'/include/config.inc.php');

//初始化参数检测正确性
$cid = empty($cid) ? 4 : intval($cid);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php echo GetHeader(1,$cid); ?>
	<link rel="stylesheet" href="css/news.css"/>
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

<!--start 大图片 -->
	<div class="container">
		<div class="row">
		<?php
				$row = $dosql->GetOne("SELECT * FROM `#@__infolist` WHERE classid=4 AND flag LIKE '%c%' AND delstate='' AND checkinfo=true ORDER BY orderid DESC");
				if(isset($row['id']))
				{
					//获取链接地址
					if($row['linkurl']=='' and $cfg_isreurl!='Y')
						$gourl = 'newsshow.php?cid='.$row['classid'].'&id='.$row['id'];
					else if($cfg_isreurl=='Y')
						$gourl = 'newsshow-'.$row['classid'].'-'.$row['id'].'-1.html';
					else
						$gourl = $row['linkurl'];

					//获取缩略图地址
					if($row['picurl']!='')
						$picurl = $row['picurl'];
					else
						$picurl = 'templates/default/images/nofoundpic.gif';
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


	<!--  start  横线部分-->
<div class="line">
  <div class="container">
	<div class="row">
      <div class="col-lg-12 col-md-12 col-xs-12">
             <div class="line-text">
             <?php
             	$row = $dosql->GetOne("SELECT * FROM `#@__infoclass` WHERE id=4 ");
             ?>
             <span><?php echo $row['classname']?></span><a href="index.html">您当前所在位置：首页 > 关于我们 > 新闻资讯</a>
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
             <span>新闻资讯</span>
		     </div>
	    </div>
	</div>
  </div>
</div>
<!-- end  横线部分-->


<!-- mainbody-->
<!--start 内容 -->

			<div class="container">
			<?php
						$dosql->Execute("SELECT * FROM `#@__infolist` where classid=17 AND delstate='' AND checkinfo=true ORDER BY orderid DESC LIMIT 0,3;");
						while($row = $dosql->GetArray())
						{
							if($row['linkurl'] != '')$gourl = $row['linkurl'];
							else $gourl = 'javascript:;';
					?>
				<div class="row one">
						<div class="col-lg-5 col-md-5 col-xs-5">
						<div class="a-one">
							<img src="<?php echo $row['picurl']; ?>" alt="<?php echo $row['title']; ?>" />
						</div>
					</div>
					<div class="col-lg-7 col-md-7 col-xs-7">
						<div class="a-onep">
							<h3><a href="<?php echo $row['linkurl']; ?>"><?php echo $row['title']; ?></a></h3>
							<time datetime="2017-3-18">时间：2017-3-18</time>
							<p><?php echo $row['content']; ?></p>
					   </div>
				  </div>
				  </div>
			<?php
				}
				?>
			
		</div>

	<!--end 内容 -->

<!-- /mainbody-->
<!-- footer-->
<?php require_once('footer.php'); ?>
<!-- /footer-->
</body>
</html>