<?php require_once(dirname(__FILE__).'/include/config.inc.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php echo GetHeader(); ?>
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
<div id="myCarousel" class="myCarousel carousel slide">
	<!-- 轮播（Carousel）指标 -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>	<!-- 轮播（Carousel）项目 -->
	<div class="carousel-inner">
		<div class="item active">
			<img src="images/banner1.jpg" alt="First slide">
		</div>
		<div class="item">
			<img src="images/banner2.jpg" alt="Second slide">
		</div>
		<div class="item">
			<img src="images/banner3.jpg" alt="Third slide">
		</div>
	</div>
	<!-- 轮播（Carousel）导航 -->
	<a class="carousel-control left" href="#myCarousel" 
	   data-slide="prev">
		<img src="images/left-arrow.png" alt="">
	   </a>
	<a class="carousel-control right" href="#myCarousel" 
	   data-slide="next">
		<img src="images/right-arrow.png" alt="">
	   </a>
</div> 
	<!-- 轮播（Carousel）结束 -->
<div class="banner">
	<div id="slideplay">
		<ul>
			<?php
			$dosql->Execute("SELECT * FROM `#@__infoimg` WHERE classid=13 AND delstate='' AND checkinfo=true ORDER BY orderid DESC LIMIT 0,3");
			while($row = $dosql->GetArray())
			{
				if($row['linkurl'] != '')$gourl = $row['linkurl'];
				else $gourl = 'javascript:;';
			?>
			
			<?php
			}
			?>
		</ul>
	</div>
</div>
<!-- /banner-->
<!-- 解决方案 start-->
<div class="solution">
 	<div class="s-title">
 		<a href="#">解决方案/Solution More</a>
 	</div>
 	<div class="s-wrap"></div>

	<div class="container">
 		<div class="s-centent">
 			<div class="row">


 			<?php
			$dosql->Execute("SELECT * FROM `#@__infolist` WHERE classid=14 AND flag like '%a%' AND delstate='' AND checkinfo=true ORDER BY orderid ASC LIMIT 0,3");
			while($row = $dosql->GetArray())
			{
				//获取链接地址
					if($row['linkurl']=='' and $cfg_isreurl!='Y')
						$gourl = 'newsshow.php?cid='.$row['classid'].'&id='.$row['id'];
					else if($cfg_isreurl=='Y')
						$gourl = 'newsshow-'.$row['classid'].'-'.$row['id'].'-1.html';
					else
						$gourl = $row['linkurl'];
			?>


				<div class="col-lg-4 col-md-4 col-xs-4">
					<div class="centent-all">
						<a href="<?php echo $row['linkurl']; ?>"><img src="<?php echo $row['picurl']; ?>" alt="<?php echo $row['title']; ?>"></a><p><?php echo $row['title']; ?></p>
					</div>
				</div>
				<?php
			}
			?>

	</div>
 </div>
 </div>

<!-- 解决方案 end-->

 <!-- 关于我们 start -->
   <div class="about">
   		<div class="aorise-title">
			<a href="#">关于我们/About Us More</a>
		</div>
		<div class="aorise-wrap"></div>
	 	<div class="a-content">
	         <div class="container">
	         	<div class="row">


	         	<?php
			$dosql->Execute("SELECT * FROM `#@__infolist` WHERE classid=15 AND delstate='' AND checkinfo=true ORDER BY orderid ASC LIMIT 0,4");
			while($row = $dosql->GetArray())
			{
				//获取链接地址
					if($row['linkurl']=='' and $cfg_isreurl!='Y')
						$gourl = 'newsshow.php?cid='.$row['classid'].'&id='.$row['id'];
					else if($cfg_isreurl=='Y')
						$gourl = 'newsshow-'.$row['classid'].'-'.$row['id'].'-1.html';
					else
						$gourl = $row['linkurl'];
			?>

                   <div class="col-lg-3 col-md-3 col-xs-3" >
                        <div class="a-content-image">
							<div class="a-image">
								<a href="<?php echo $row['linkurl']; ?>"><img src="<?php echo $row['picurl']; ?>" alt="<?php echo $row['title']; ?>"></a>
							</div>
							<div class="a-image-title"><?php echo $row['title']; ?></div>
						</div>
                    </div>
                    <?php
			}
			?>


	         	</div>
	         </div>
		    </div>
   </div>
   <!-- 关于我们 end -->

<!-- 新闻咨询 start-->
   <div class="news">
 <div class="n-new">新闻资讯/NEWS More</div>
		<div class="n-line"></div>
		<div class="n-centen">
			<div class="container">
				<div class="row">
					<div class="n-text">
					<?php
				$row = $dosql->GetOne("SELECT * FROM `#@__infolist` WHERE classid=4 AND flag LIKE 'a%' AND delstate='' AND checkinfo=true ORDER BY orderid DESC");
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

						<div class="col-lg-6 col-md-6 col-xs-6">
							<img src="<?php echo $row['picurl']; ?>">
							<p><?php echo $row['title']; ?></p>
						</div>
					</div>
	
		<div class="n-textone">
				<div class="col-lg-6 col-md-6 col-xs-6">
					<ul>
						<?php $dosql->Execute("SELECT * FROM `#@__infolist` WHERE classid=4  AND delstate='' AND checkinfo=true ORDER BY orderid DESC LIMIT 0,8");
				while($row = $dosql->GetArray())
				{
					//获取链接地址
					if($row['linkurl']=='' and $cfg_isreurl!='Y')
						$gourl = 'newsshow.php?cid='.$row['classid'].'&id='.$row['id'];
					else if($cfg_isreurl=='Y')
						$gourl = 'newsshow-'.$row['classid'].'-'.$row['id'].'-1.html';
					else
						$gourl = $row['linkurl'];
				?>
						<li><i></i><a href="<?php echo $row['linkurl']; ?>"><?php echo ReStrLen($row['title'],40); ?></a>
						<time datetime="2017-3-18">2017-3-18</time>
						</li>
						<?php
					}
					?>
					</ul>
							</div>

						</div>
						 <?php
			}
			?>
					</div>
				</div>
			</div>
		</div>

<!-- 新闻咨询 end-->

<!--start 尾部 -->

	<?php require_once('footer.php'); ?>
			<!--end 尾部 -->


</body>
</html>
