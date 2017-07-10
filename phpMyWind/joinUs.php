<?php require_once(dirname(__FILE__).'/include/config.inc.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php echo GetHeader(1,0,0,'加入我们'); ?>

	<link rel="stylesheet" href="css/joinUs.css"/>
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
				$row = $dosql->GetOne("SELECT * FROM `#@__infoimg` where classid=13 and id=19 AND delstate='' AND checkinfo=true ORDER BY orderid DESC LIMIT 0,1;");
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
					<img src="<?php echo $row['picurl']; ?>" alt="" width="1130px" height="150px" />
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
<div class="container">
     <div class="row">
     <div  class="col-lg-6 col-md-6 col-xs-6">
         <div class="warp">
                 <p>加入奥昇</p>
         </div>
         </div>
            <div  class="col-lg-6 col-md-6 col-xs-6">
                 <div class="w-pone">
                    <a href="index.html">您当前所在的位置：首页>加入奥昇</a></p>
                 </div>
             </div>
        </div>
     </div>
<!-- end  横线部分-->
<!-- /notice-->
<!-- mainbody-->
<div class="container">
            <div class="row">
                <div  class="col-lg-12 col-md-12 col-xs-12">
                     <div class="preface">
                          <h1>前言</h1>
                         <p>美通社整合成立63年来的丰富海外传播资源，推出“一带一路”企业新闻传播解决方案，涵盖新闻内容策划与撰写、“一带一路”新闻专线发布与媒体舆情监测和反馈，形成闭环式出海传播服务。作为中国品牌在海外拓展的公关新闻外脑，帮助中国企业填充品牌传播策略的空白、整合传播话题的布局、丰富传播渠道与手段、有效的监测目标市场对品牌的接受程度。</p>
                         请输入职位<input type="text" name="text" value="关键词...">
                        <input type="submit" name="" value="搜索">
                    </div>
                </div>
            </div>
         <div class="row">

         <?php
						$dosql->Execute("SELECT * FROM `#@__infolist` where classid=19 AND delstate='' AND checkinfo=true ORDER BY orderid ASC LIMIT 0,7;");
						while($row = $dosql->GetArray())
						{
							if($row['linkurl'] != '')$gourl = $row['linkurl'];
							else $gourl = 'javascript:;';
					?>
            <div  class="col-lg-12 col-md-12 col-xs-12">
                 <div class="p-text">
                    <h1> <?php echo $row['title']; ?></h1>

                    <p><?php echo $row['content']; ?></p>
                    <h3>发布时间</h3>
                    <time datetime="2015-09-15">2015-09-15 有效时间：<p><?php echo $row['keywords']; ?></p></time>
                 </div>
            </div>

            <?php
				}
				?>
        </div>
             <div class="row">
            <div  class="col-lg-12 col-md-12 col-xs-12">
                <div class="p-footer">
                    <p>共1页7条记录</p>
                </div>
            </div>
        </div>
    </div>

    <!--end 内容 -->

<!-- /mainbody-->
<!-- footer-->
<?php require_once('footer.php'); ?>
<!-- /footer-->
</body>
</html>