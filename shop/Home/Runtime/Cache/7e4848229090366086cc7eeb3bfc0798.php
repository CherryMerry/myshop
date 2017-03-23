<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>123</title>
	<!-- <link rel="stylesheet" href="__PUBLIC__/bs/css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="../Public/style/index.css">
	<script src="__PUBLIC__/bs/js/jquery-2.2.3.min.js"></script>
</head> 
<body>
<div class="main">
	<div id="nav">
		<div class="nav_wrap">
			<div class="left">
				<span class="welcome">欢迎来酒仙网！</span>
				<a href="###">请登录</a>
				<a href="###">免费注册</a>
			</div>
			<ul class="right">
				<li>
					<a href="###">我的酒仙</a>
					<i class="dropdownIcon"></i>
				</li>
				<li>
					<a href="###">CEO邮箱</a>
				</li>
				<li class="haha">
					<span class="icon cart"></span>
					<a href="###">购物车0件</a>
				</li>
				<li>
					<a href="###">社区</a>
				</li>
				<li class="bg">|
					<a class="phone_bg" href="###">手机逛酒仙</a>
					|
				</li>
				<li>
					<span class="icon web"></span>
					<a href="###">网站导航</a>
					<span class="icon dropdownIcon2"></span>
				</li>
				<li>
					<span class="icon person"></span>
					<a href="###">客户服务</a>
					<span class="icon dropdownIcon3"></span>
				</li>
				<li>
					客服热线<span>400-617-9999</span>
				</li>
			</ul>
		</div>
	</div>
	<div class="top_ad"><a href="###" class="blocka"></a></div>
	<div class="search">
		<div class="search_wrap">
			<div class="left">
				<a href=""><img src="../Public/image/logo.png" alt="酒仙网"></a>
				<a href=""><img src="../Public/image/pic.gif" alt="酒仙网"></a>
			</div>
			<div class="middle">
				<form action="">
					<input type="text" class="input" placeholder="周末大清仓" />
					<input type="button" class="btn" value="搜索">
				</form>
				<ul>
					<li class="no"><a href="###">茅台</a></li>
					<li><a href="###">五粮液</a></li>
					<li><a href="###" class="ad">剑南春</a></li>
					<li><a href="###">汾酒</a></li>
					<li><a href="###">拉菲</a></li>
					<li><a href="###" class="ad">奔富</a></li>
					<li><a href="###">人头马</a></li>
					<li><a href="###" class="ad">啤酒</a></li>
					<li><a href="###" class="ad">黄酒配美蟹</a></li>
				</ul>
			</div>
			<div class="right">
				
			</div>
		</div>			
	</div>
	<div class="meau">
		<div class="meau_wrap">
			<div class="title"><a href="###" class="blocka">全部商品分类</a></div>
			<ul>
				<li class="no"><a class="dis" href="###">首页</a></li>
				<li>
					<a href="###" class="dis">酒仙独家</a>
					<span class="new icon"></span>
				</li>
				<li><a href="###" class="dis">葡萄酒馆</a></li>
				<li><a href="###" class="dis">洋酒馆</a></li>
				<li>
					<a href="###" class="dis">团购</a>
					<span class="hot icon"></span>
				</li>
				<li><a href="###" class="dis">清仓</a></li>
				<li><a href="###" class="dis">秒拍</a></li>
				<li><a href="###" class="dis">新品</a></li>
				<li><a href="###" class="dis">食尚</a></li>
			</ul>
		</div>
	</div>
	<div class="cast">
		<div class="card">
			<?php if(is_array($slideRows)): $i = 0; $__LIST__ = $slideRows;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$slideRow): $mod = ($i % 2 );++$i;?><div style="height:470px;width:100%;background:url('<?php echo ($slideRow['url']); ?>') no-repeat center center"></div><?php endforeach; endif; else: echo "" ;endif; ?>	
		</div>
		<div class="cast_wrap">
			<div class="ff clear">
				<div class="left">
					<div class="box">
						<p class="title">
							<span class="icon heart"></span>
							<span>一键选酒</>
						</p>
						<p>
							<a href="###">年份老酒</a>
							<a href="###" class="bg">礼酒会场</a>
							<a href="###">大坛酒</a>
						</p>
						<p>
							<a href="###" class="bg">酒仙独家</a>
							<a href="###">整箱购</a>
							<a href="###" class="bg">婚宴酒</a>
						</p>
					</div>
					<div class="box">
						<p class="title">
							<span class="icon wear"></span>
							<span>一键选酒</>
						</p>
						<p>
							<a href="###">年份老酒</a>
							<a href="###" class="bg">礼酒会场</a>
							<a href="###">大坛酒</a>
						</p>
						<p>
							<a href="###" class="bg">酒仙独家</a>
							<a href="###">整箱购</a>
							<a href="###" class="bg">婚宴酒</a>
						</p>
					</div>
					<div class="box">
						<p class="title">
							<span class="icon pu"></span>
							<span>一键选酒</>
						</p>
						<p>
							<a href="###">年份老酒</a>
							<a href="###">礼酒会场</a>
							<a href="###">大坛酒</a>
						</p>
						<p>
							<a href="###" class="bg">酒仙独家</a>
							<a href="###">整箱购</a>
							<a href="###" class="bg">婚宴酒</a>
						</p>
					</div>
					<div class="box">
						<p class="title">
							<span class="icon yang"></span>
							<span>一键选酒</>
						</p>
						<p>
							<a href="###" class="bg">年份老酒</a>
							<a href="###" class="bg">礼酒会场</a>
							<a href="###">大坛酒</a>
						</p>
						<p>
							<a href="###" class="bg">酒仙独家</a>
							<a href="###">整箱购</a>
							<a href="###">婚宴酒</a>
						</p>
					</div>
					<div class="box">
						<p class="title">
							<span class="icon pi"></span>
							<span>一键选酒</>
						</p>
						<p>
							<a href="###" class="bg">年份老酒</a>
							<a href="###" class="bg">礼酒会场</a>
							<a href="###">大坛酒</a>
						</p>
						<p>
							<a href="###">酒仙独家</a>
							<a href="###">整箱购</a>
							<a href="###">婚宴酒</a>
						</p>
					</div>
					<!-- <div class="box end">
						<p class="title">
							<span class="icon shi"></span>
							<span>一键选酒</>
						</p>
						<p>
							<a href="###">年份老酒</a>
							<a href="###" class="bg">礼酒会场</a>
							<a href="###">大坛酒</a>
						</p>
					</div> -->
				</div>
				<!-- <div class="right">
					<div class="imgbg1">
						<a class="blocka" href="###"></a>
					</div>
					<div class="imgbg2">
						<a class="blocka" href="###"></a>
					</div>
					<div class="imgbg3">
						<a class="blocka" href="###"></a>
					</div>
				</div> -->
				<ul class="smallBtn">
					<li class="on">1</li>
					<li>2</li>
					<li>3</li>
					<li>4</li>
					<li>5</li>
					<li>6</li>
					<li>7</li>
					<li>8</li>
				</ul>
			</div>	
			
		</div>
	</div>
	<!-- <div class="option">
		<div class="option_wrap">
			<div class="left">
				<ul class="head clearfix">
					<li class="active">疯狂购物</li>
					<li>热卖推荐</li>
					<li>猜你喜欢</li>
					<li>新品上架</li>
					<li>整箱特卖</li>
				</ul>
				<div class="con">
					<ul class="clearfix ul00">
						<li>
							<a class="blocka" href="###"><img src="../Public/image/option1.jpg" alt="jiu"></a>
							<a href="###" class="blocka"><div class="name">50°西凤·御宴酒（精装版）500ml50°西凤·御宴酒（精装版）500ml</div></a>
							<strong>￥59.00</strong>
						</li>
						<li>
							<a class="blocka" href="###"><img src="../Public/image/option1.jpg" alt="jiu"></a>
							<a href="###" class="blocka"><div class="name">50°西凤·御宴酒（精装版）500ml50°西凤·御宴酒（精装版）500ml</div></a>
							<strong>￥59.00</strong>
						</li>
						<li>
							<a class="blocka" href="###"><img src="../Public/image/option1.jpg" alt="jiu"></a>
							<a href="###" class="blocka"><div class="name">50°西凤·御宴酒（精装版）500ml50°西凤·御宴酒（精装版）500ml</div></a>
							<strong>￥59.00</strong>
						</li>
						<li>
							<a class="blocka" href="###"><img src="../Public/image/option1.jpg" alt="jiu"></a>
							<a href="###" class="blocka"><div class="name">50°西凤·御宴酒（精装版）500ml50°西凤·御宴酒（精装版）500ml</div></a>
							<strong>￥59.00</strong>
						</li>
						<li>
							<a class="blocka" href="###"><img src="../Public/image/option1.jpg" alt="jiu"></a>
							<a href="###" class="blocka"><div class="name">50°西凤·御宴酒（精装版）500ml50°西凤·御宴酒（精装版）500ml</div></a>
							<strong>￥59.00</strong>
						</li>
						<li>
							<a class="blocka" href="###"><img src="../Public/image/option1.jpg" alt="jiu"></a>
							<a href="###" class="blocka"><div class="name">50°西凤·御宴酒（精装版）500ml50°西凤·御宴酒（精装版）500ml</div></a>
							<strong>￥59.00</strong>
						</li>
						<li>
							<a class="blocka" href="###"><img src="../Public/image/option1.jpg" alt="jiu"></a>
							<a href="###" class="blocka"><div class="name">50°西凤·御宴酒（精装版）500ml50°西凤·御宴酒（精装版）500ml</div></a>
							<strong>￥59.00</strong>
						</li>
						<li>
							<a class="blocka" href="###"><img src="../Public/image/option1.jpg" alt="jiu"></a>
							<a href="###" class="blocka"><div class="name">50°西凤·御宴酒（精装版）500ml50°西凤·御宴酒（精装版）500ml</div></a>
							<strong>￥59.00</strong>
						</li>
						<li>
							<a class="blocka" href="###"><img src="../Public/image/option1.jpg" alt="jiu"></a>
							<a href="###" class="blocka"><div class="name">50°西凤·御宴酒（精装版）500ml50°西凤·御宴酒（精装版）500ml</div></a>
							<strong>￥59.00</strong>
						</li>
						<li>
							<a class="blocka" href="###"><img src="../Public/image/option1.jpg" alt="jiu"></a>
							<a href="###" class="blocka"><div class="name">50°西凤·御宴酒（精装版）500ml50°西凤·御宴酒（精装版）500ml</div></a>
							<strong>￥59.00</strong>
						</li>	
					</ul>
					<ul class="clearfix ul11">
						<li>
							<a class="blocka" href="###"><img src="../Public/image/11.jpg" alt="jiu"></a>
							<a href="###" class="blocka"><div class="name">50°西凤·御宴酒（精装版）500ml50°西凤·御宴酒（精装版）500ml</div></a>
							<strong>￥59.00</strong>
						</li>
						<li>
							<a class="blocka" href="###"><img src="../Public/image/11.jpg" alt="jiu"></a>
							<a href="###" class="blocka"><div class="name">50°西凤·御宴酒（精装版）500ml50°西凤·御宴酒（精装版）500ml</div></a>
							<strong>￥59.00</strong>
						</li>
						<li>
							<a class="blocka" href="###"><img src="../Public/image/11.jpg" alt="jiu"></a>
							<a href="###" class="blocka"><div class="name">50°西凤·御宴酒（精装版）500ml50°西凤·御宴酒（精装版）500ml</div></a>
							<strong>￥59.00</strong>
						</li>
						<li>
							<a class="blocka" href="###"><img src="../Public/image/11.jpg" alt="jiu"></a>
							<a href="###" class="blocka"><div class="name">50°西凤·御宴酒（精装版）500ml50°西凤·御宴酒（精装版）500ml</div></a>
							<strong>￥59.00</strong>
						</li>
						<li>
							<a class="blocka" href="###"><img src="../Public/image/11.jpg" alt="jiu"></a>
							<a href="###" class="blocka"><div class="name">50°西凤·御宴酒（精装版）500ml50°西凤·御宴酒（精装版）500ml</div></a>
							<strong>￥59.00</strong>
						</li>
						<li>
							<a class="blocka" href="###"><img src="../Public/image/11.jpg" alt="jiu"></a>
							<a href="###" class="blocka"><div class="name">50°西凤·御宴酒（精装版）500ml50°西凤·御宴酒（精装版）500ml</div></a>
							<strong>￥59.00</strong>
						</li>
						<li>
							<a class="blocka" href="###"><img src="../Public/image/11.jpg" alt="jiu"></a>
							<a href="###" class="blocka"><div class="name">50°西凤·御宴酒（精装版）500ml50°西凤·御宴酒（精装版）500ml</div></a>
							<strong>￥59.00</strong>
						</li>
						<li>
							<a class="blocka" href="###"><img src="../Public/image/11.jpg" alt="jiu"></a>
							<a href="###" class="blocka"><div class="name">50°西凤·御宴酒（精装版）500ml50°西凤·御宴酒（精装版）500ml</div></a>
							<strong>￥59.00</strong>
						</li>
						<li>
							<a class="blocka" href="###"><img src="../Public/image/11.jpg" alt="jiu"></a>
							<a href="###" class="blocka"><div class="name">50°西凤·御宴酒（精装版）500ml50°西凤·御宴酒（精装版）500ml</div></a>
							<strong>￥59.00</strong>
						</li>
						<li>
							<a class="blocka" href="###"><img src="../Public/image/11.jpg" alt="jiu"></a>
							<a href="###" class="blocka"><div class="name">50°西凤·御宴酒（精装版）500ml50°西凤·御宴酒（精装版）500ml</div></a>
							<strong>￥59.00</strong>
						</li>	
					</ul>
					<ul class="clearfix ul11">
						<li>
							<a class="blocka" href="###"><img src="../Public/image/22.jpg" alt="jiu"></a>
							<a href="###" class="blocka"><div class="name">50°西凤·御宴酒（精装版）500ml50°西凤·御宴酒（精装版）500ml</div></a>
							<strong>￥59.00</strong>
						</li>
						<li>
							<a class="blocka" href="###"><img src="../Public/image/22.jpg" alt="jiu"></a>
							<a href="###" class="blocka"><div class="name">50°西凤·御宴酒（精装版）500ml50°西凤·御宴酒（精装版）500ml</div></a>
							<strong>￥59.00</strong>
						</li>
						<li>
							<a class="blocka" href="###"><img src="../Public/image/22.jpg" alt="jiu"></a>
							<a href="###" class="blocka"><div class="name">50°西凤·御宴酒（精装版）500ml50°西凤·御宴酒（精装版）500ml</div></a>
							<strong>￥59.00</strong>
						</li>
						<li>
							<a class="blocka" href="###"><img src="../Public/image/22.jpg" alt="jiu"></a>
							<a href="###" class="blocka"><div class="name">50°西凤·御宴酒（精装版）500ml50°西凤·御宴酒（精装版）500ml</div></a>
							<strong>￥59.00</strong>
						</li>
						<li>
							<a class="blocka" href="###"><img src="../Public/image/22.jpg" alt="jiu"></a>
							<a href="###" class="blocka"><div class="name">50°西凤·御宴酒（精装版）500ml50°西凤·御宴酒（精装版）500ml</div></a>
							<strong>￥59.00</strong>
						</li>
						<li>
							<a class="blocka" href="###"><img src="../Public/image/22.jpg" alt="jiu"></a>
							<a href="###" class="blocka"><div class="name">50°西凤·御宴酒（精装版）500ml50°西凤·御宴酒（精装版）500ml</div></a>
							<strong>￥59.00</strong>
						</li>
						<li>
							<a class="blocka" href="###"><img src="../Public/image/22.jpg" alt="jiu"></a>
							<a href="###" class="blocka"><div class="name">50°西凤·御宴酒（精装版）500ml50°西凤·御宴酒（精装版）500ml</div></a>
							<strong>￥59.00</strong>
						</li>
						<li>
							<a class="blocka" href="###"><img src="../Public/image/22.jpg" alt="jiu"></a>
							<a href="###" class="blocka"><div class="name">50°西凤·御宴酒（精装版）500ml50°西凤·御宴酒（精装版）500ml</div></a>
							<strong>￥59.00</strong>
						</li>
						<li>
							<a class="blocka" href="###"><img src="../Public/image/22.jpg" alt="jiu"></a>
							<a href="###" class="blocka"><div class="name">50°西凤·御宴酒（精装版）500ml50°西凤·御宴酒（精装版）500ml</div></a>
							<strong>￥59.00</strong>
						</li>
						<li>
							<a class="blocka" href="###"><img src="../Public/image/22.jpg" alt="jiu"></a>
							<a href="###" class="blocka"><div class="name">50°西凤·御宴酒（精装版）500ml50°西凤·御宴酒（精装版）500ml</div></a>
							<strong>￥59.00</strong>
						</li>	
					</ul>
					<ul class="clearfix ul11">
						<li>
							<a class="blocka" href="###"><img src="../Public/image/33.jpg" alt="jiu"></a>
							<a href="###" class="blocka"><div class="name">50°西凤·御宴酒（精装版）500ml50°西凤·御宴酒（精装版）500ml</div></a>
							<strong>￥59.00</strong>
						</li>
						<li>
							<a class="blocka" href="###"><img src="../Public/image/33.jpg" alt="jiu"></a>
							<a href="###" class="blocka"><div class="name">50°西凤·御宴酒（精装版）500ml50°西凤·御宴酒（精装版）500ml</div></a>
							<strong>￥59.00</strong>
						</li>
						<li>
							<a class="blocka" href="###"><img src="../Public/image/33.jpg" alt="jiu"></a>
							<a href="###" class="blocka"><div class="name">50°西凤·御宴酒（精装版）500ml50°西凤·御宴酒（精装版）500ml</div></a>
							<strong>￥59.00</strong>
						</li>
						<li>
							<a class="blocka" href="###"><img src="../Public/image/33.jpg" alt="jiu"></a>
							<a href="###" class="blocka"><div class="name">50°西凤·御宴酒（精装版）500ml50°西凤·御宴酒（精装版）500ml</div></a>
							<strong>￥59.00</strong>
						</li>
						<li>
							<a class="blocka" href="###"><img src="../Public/image/33.jpg" alt="jiu"></a>
							<a href="###" class="blocka"><div class="name">50°西凤·御宴酒（精装版）500ml50°西凤·御宴酒（精装版）500ml</div></a>
							<strong>￥59.00</strong>
						</li>
						<li>
							<a class="blocka" href="###"><img src="../Public/image/33.jpg" alt="jiu"></a>
							<a href="###" class="blocka"><div class="name">50°西凤·御宴酒（精装版）500ml50°西凤·御宴酒（精装版）500ml</div></a>
							<strong>￥59.00</strong>
						</li>
						<li>
							<a class="blocka" href="###"><img src="../Public/image/33.jpg" alt="jiu"></a>
							<a href="###" class="blocka"><div class="name">50°西凤·御宴酒（精装版）500ml50°西凤·御宴酒（精装版）500ml</div></a>
							<strong>￥59.00</strong>
						</li>
						<li>
							<a class="blocka" href="###"><img src="../Public/image/33.jpg" alt="jiu"></a>
							<a href="###" class="blocka"><div class="name">50°西凤·御宴酒（精装版）500ml50°西凤·御宴酒（精装版）500ml</div></a>
							<strong>￥59.00</strong>
						</li>
						<li>
							<a class="blocka" href="###"><img src="../Public/image/33.jpg" alt="jiu"></a>
							<a href="###" class="blocka"><div class="name">50°西凤·御宴酒（精装版）500ml50°西凤·御宴酒（精装版）500ml</div></a>
							<strong>￥59.00</strong>
						</li>
						<li>
							<a class="blocka" href="###"><img src="../Public/image/33.jpg" alt="jiu"></a>
							<a href="###" class="blocka"><div class="name">50°西凤·御宴酒（精装版）500ml50°西凤·御宴酒（精装版）500ml</div></a>
							<strong>￥59.00</strong>
						</li>	
					</ul>
					<ul class="clearfix ul11">
						<li>
							<a class="blocka" href="###"><img src="../Public/image/44.jpg" alt="jiu"></a>
							<a href="###" class="blocka"><div class="name">50°西凤·御宴酒（精装版）500ml50°西凤·御宴酒（精装版）500ml</div></a>
							<strong>￥59.00</strong>
						</li>
						<li>
							<a class="blocka" href="###"><img src="../Public/image/44.jpg" alt="jiu"></a>
							<a href="###" class="blocka"><div class="name">50°西凤·御宴酒（精装版）500ml50°西凤·御宴酒（精装版）500ml</div></a>
							<strong>￥59.00</strong>
						</li>
						<li>
							<a class="blocka" href="###"><img src="../Public/image/44.jpg" alt="jiu"></a>
							<a href="###" class="blocka"><div class="name">50°西凤·御宴酒（精装版）500ml50°西凤·御宴酒（精装版）500ml</div></a>
							<strong>￥59.00</strong>
						</li>
						<li>
							<a class="blocka" href="###"><img src="../Public/image/44.jpg" alt="jiu"></a>
							<a href="###" class="blocka"><div class="name">50°西凤·御宴酒（精装版）500ml50°西凤·御宴酒（精装版）500ml</div></a>
							<strong>￥59.00</strong>
						</li>
						<li>
							<a class="blocka" href="###"><img src="../Public/image/44.jpg" alt="jiu"></a>
							<a href="###" class="blocka"><div class="name">50°西凤·御宴酒（精装版）500ml50°西凤·御宴酒（精装版）500ml</div></a>
							<strong>￥59.00</strong>
						</li>
						<li>
							<a class="blocka" href="###"><img src="../Public/image/44.jpg" alt="jiu"></a>
							<a href="###" class="blocka"><div class="name">50°西凤·御宴酒（精装版）500ml50°西凤·御宴酒（精装版）500ml</div></a>
							<strong>￥59.00</strong>
						</li>
						<li>
							<a class="blocka" href="###"><img src="../Public/image/44.jpg" alt="jiu"></a>
							<a href="###" class="blocka"><div class="name">50°西凤·御宴酒（精装版）500ml50°西凤·御宴酒（精装版）500ml</div></a>
							<strong>￥59.00</strong>
						</li>
						<li>
							<a class="blocka" href="###"><img src="../Public/image/44.jpg" alt="jiu"></a>
							<a href="###" class="blocka"><div class="name">50°西凤·御宴酒（精装版）500ml50°西凤·御宴酒（精装版）500ml</div></a>
							<strong>￥59.00</strong>
						</li>
						<li>
							<a class="blocka" href="###"><img src="../Public/image/44.jpg" alt="jiu"></a>
							<a href="###" class="blocka"><div class="name">50°西凤·御宴酒（精装版）500ml50°西凤·御宴酒（精装版）500ml</div></a>
							<strong>￥59.00</strong>
						</li>
						<li>
							<a class="blocka" href="###"><img src="../Public/image/44.jpg" alt="jiu"></a>
							<a href="###" class="blocka"><div class="name">50°西凤·御宴酒（精装版）500ml50°西凤·御宴酒（精装版）500ml</div></a>
							<strong>￥59.00</strong>
						</li>	
					</ul>
				</div>
			</div>
			<div class="side">
				<div class="detail">
					<ul class="head clearfix">
						<li class="active">公共信息</li>
						<li>促销信息</li>
					</ul>
					<div class="con">
						<ul class="ula">
							<a href="###" class="blocka"><li>中秋礼盒特卖日中奖信息公布</li></a>
							<a href="###" class="blocka"><li>中秋礼盒特卖日中奖信息公布</li></a>
							<a href="###" class="blocka"><li>中秋礼盒特卖日中奖信息公布</li></a>
							<a href="###" class="blocka"><li>中秋礼盒特卖日中奖信息公布</li></a>
							<a href="###" class="blocka"><li>中秋礼盒特卖日中奖信息公布</li></a>
							<a href="###" class="blocka"><li>中秋礼盒特卖日中奖信息公布</li></a>
						</ul>
						<ul class="ulb">
							<a href="###" class="blocka"><li>满299立减30</li></a>
							<a href="###" class="blocka"><li>满299立减30</li></a>
							<a href="###" class="blocka"><li>满299立减30</li></a>
							<a href="###" class="blocka"><li>满299立减30</li></a>
							<a href="###" class="blocka"><li>满299立减30</li></a>
							<a href="###" class="blocka"><li>满299立减30</li></a>
						</ul>
					</div>
				</div>
				<div class="img1">
					<a href="###" class="blocka">
						<img class="hao" src="../Public/image/haoli.png" alt="">
						<img class="hao" src="../Public/image/haoli2.png" alt="">
						<img class="hao" src="../Public/image/haoli3.png" alt="">
					</a>
					<ul class="smallBtn">
						<li class="on"></li>
						<li></li>
						<li></li>
					</ul>
				</div>
				<div class="img2">
					<a href="###" class="blocka"><img src="../Public/image/haoli2.png" alt=""></a>
					<ul class="smallBtn">
						<li class="on"></li>
						<li></li>
						<li></li>
					</ul>
				</div>
			</div>
		</div>
	</div> -->
	<div class="brandBox">
		<div class="brand clear">
			<div class="left">
				<img src="../Public/image/weiyi.jpg" alt="">
			</div>
			<ul class="main clear">
				<?php if(is_array($brandRows)): $i = 0; $__LIST__ = $brandRows;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$brandRow): $mod = ($i % 2 );++$i;?><li><img src="<?php echo ($brandRow['url']); ?>" alt=""></li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>	
		</div>
	</div>
	<!-- <div class="ad">
		<div class="ad_wrap">
			<a href="###" class="blocka"><img src="../Public/image/ad2.jpg"></a>
			<a href="###" class="blocka"><img class="img1" src="../Public/image/wear3.png"></a>
			<a href="###" class="blocka"><img class="img2" src="../Public/image/wear2.png"></a>
			<a href="###" class="blocka"><img class="img3" src="../Public/image/wear.png"></a>
		</div>
	</div> -->
	<!-- <div class="recom">
		<div class="recom_wrap">
			<div class="top">
				<span class="icon location"></span><span class="sale">优惠推荐</span>
				<ul>
					<li class="on"></li>
					<li></li>
					<li></li>
				</ul>
			</div>
			<ul class="con">
				<li>
					<a href="###" class="blocka"><img src="../Public/image/recom.jpg" alt="【宝丰特卖】39°三星宝丰酒（2012）500ml"></a>
					<a href="###" class="blocka"><div class="title">【宝丰特卖】39°三星宝丰酒（2012）500ml</div></a>
					<strong>￥9.00</strong>
					<p>剩余：20小时26分钟05秒</p>
				</li>
				<li>
					<a href="###" class="blocka"><img src="../Public/image/recom.jpg" alt="【宝丰特卖】39°三星宝丰酒（2012）500ml"></a>
					<a href="###" class="blocka"><div class="title">【宝丰特卖】39°三星宝丰酒（2012）500ml</div></a>
					<strong>￥9.00</strong>
					<p>剩余：20小时26分钟05秒</p>
				</li>
				<li>
					<a href="###" class="blocka"><img src="../Public/image/recom.jpg" alt="【宝丰特卖】39°三星宝丰酒（2012）500ml"></a>
					<a href="###" class="blocka"><div class="title">【宝丰特卖】39°三星宝丰酒（2012）500ml</div></a>
					<strong>￥9.00</strong>
					<p>剩余：20小时26分钟05秒</p>
					<span class="icon4">秒杀</span>
				</li>
				<li>
					<a href="###" class="blocka"><img src="../Public/image/recom.jpg" alt="【宝丰特卖】39°三星宝丰酒（2012）500ml"></a>
					<a href="###" class="blocka"><div class="title">【宝丰特卖】39°三星宝丰酒（2012）500ml</div></a>
					<strong>￥9.00</strong>
					<p>剩余：20小时26分钟05秒</p>
				</li>
				<li>
					<a href="###" class="blocka"><img src="../Public/image/recom.jpg" alt="【宝丰特卖】39°三星宝丰酒（2012）500ml"></a>
					<a href="###" class="blocka"><div class="title">【宝丰特卖】39°三星宝丰酒（2012）500ml</div></a>
					<strong>￥9.00</strong>
					<p>剩余：20小时26分钟05秒</p>
				</li>
				<li>
					<a href="###" class="blocka"><img src="../Public/image/recom.jpg" alt="【宝丰特卖】39°三星宝丰酒（2012）500ml"></a>
					<a href="###" class="blocka"><div class="title">【宝丰特卖】39°三星宝丰酒（2012）500ml</div></a>
					<strong>￥9.00</strong>
					<p>剩余：20小时26分钟05秒</p>
				</li>
			</ul>
			<span class="icon2"></span>
			<span class="icon3"></span>
		</div>
	</div> -->
	<div class="floor">
		<div class="floor_wrap">
			<div class="box">
				<div class="head">
					<span class="icon"></span>
					<p class="title">森系女神</p>
					<div class="next">
						森系女神 <span>></span>
					</div>
					<ul>
						<li><a href="###">贵州</a></li>
						<li><span>|</span><a href="###">贵州</a></li>
						<li><span>|</span><a href="###">贵州</a></li>
						<li><span>|</span><a href="###">贵州</a></li>
						<li><span>|</span><a href="###">贵州</a></li>
						<li><span>|</span><a href="###">贵州</a></li>
					</ul>	
				</div>
				<div class="con">
					<div class="top clear">
						<div class="left">
							<img src="../Public/image/floor1.jpg" alt="">
						</div>
						<ul class="right clear">
							<li>
								<a href="###"><img src="../Public/image/floor_img.jpg" alt="jiu"></a>
								<a href="###"><div class="name">52°五粮液股份富贵天下礼盒500ml*2</div></a>
								<strong>￥59.00</strong>
							</li>
							<li>
								<a href="###"><img src="../Public/image/floor_img.jpg" alt="jiu"></a>
								<a href="###"><div class="name">52°五粮液股份富贵天下礼盒500ml*2</div></a>
								<strong>￥59.00</strong>
							</li>
							<li>
								<a href="###"><img src="../Public/image/floor_img.jpg" alt="jiu"></a>
								<a href="###"><div class="name">52°五粮液股份富贵天下礼盒500ml*2</div></a>
								<strong>￥59.00</strong>
							</li>
							<li>
								<a href="###"><img src="../Public/image/floor_img.jpg" alt="jiu"></a>
								<a href="###"><div class="name">52°五粮液股份富贵天下礼盒500ml*2</div></a>
								<strong>￥59.00</strong>
							</li>
							<li>
								<a href="###"><img src="../Public/image/floor_img.jpg" alt="jiu"></a>
								<a href="###"><div class="name">52°五粮液股份富贵天下礼盒500ml*2</div></a>
								<strong>￥59.00</strong>
							</li>
							<li>
								<a href="###"><img src="../Public/image/floor_img.jpg" alt="jiu"></a>
								<a href="###"><div class="name">52°五粮液股份富贵天下礼盒500ml*2</div></a>
								<strong>￥59.00</strong>
							</li>
							<li>
								<a href="###"><img src="../Public/image/floor_img.jpg" alt="jiu"></a>
								<a href="###"><div class="name">52°五粮液股份富贵天下礼盒500ml*2</div></a>
								<strong>￥59.00</strong>
							</li>
							<li>
								<a href="###"><img src="../Public/image/floor_img.jpg" alt="jiu"></a>
								<a href="###"><div class="name">52°五粮液股份富贵天下礼盒500ml*2</div></a>
								<strong>￥59.00</strong>
							</li>
							<li>
								<a href="###"><img src="../Public/image/floor_img.jpg" alt="jiu"></a>
								<a href="###"><div class="name">52°五粮液股份富贵天下礼盒500ml*2</div></a>
								<strong>￥59.00</strong>
							</li>
							<li>
								<a href="###"><img src="../Public/image/floor_img.jpg" alt="jiu"></a>
								<a href="###"><div class="name">52°五粮液股份富贵天下礼盒500ml*2</div></a>
								<strong>￥59.00</strong>
							</li>
						</ul>
					</div>
					<div class="bottom clear">
						<div class="left">
							<div class="list">
								<p>
									<span class="dot"></span>
									<span class="title">热门推荐</span>
								</p>
								<div class="con2">
									<a href="###">婚庆用酒</a>
									<a href="###">新品专场</a>
									<a href="###">大坛专场</a>
								</div>
							</div>
							<div class="list">
								<p>
									<span class="dot"></span>
									<span class="title">美酒品牌</span>
								</p>
								<div class="con2">
									<a href="###"><span>茅台</span></a>
									<a href="###"><span>五粮液</span></a>
									<a href="###"><span>剑南春</span></a>
									<a href="###"><span>汾酒</span></a>
									<a href="###"><span>郎酒</span></a>
									<a href="###"><span>泸州老窖</span></a>
								</div>
							</div>
						</div>
						<div class="right">
							<div class="head">
								<span class="icon"></span>
								<p class="title">本周热销排行榜</p>
								<ul>
									<li><a href="###">酱香型</a></li>
									<li><span>|</span><a href="###">浓香型</a></li>
									<li><span>|</span><a href="###">清香型</a></li>
									<li><span>|</span><a href="###">其他香型</a></li>
								</ul>	
							</div>
							<ul class="con3 clear">
								<li>
									<a href="###"><img src="../Public/image/floor_img2.jpg" alt="jiu"></a>
									<a href="###"><div class="name">52°五粮液股份富贵天下礼盒500ml*2</div></a>
									<strong>￥59.00</strong>
								</li>
								<li>
									<a href="###"><img src="../Public/image/floor_img2.jpg" alt="jiu"></a>
									<a href="###"><div class="name">52°五粮液股份富贵天下礼盒500ml*2</div></a>
									<strong>￥59.00</strong>
								</li>
								<li>
									<a href="###"><img src="../Public/image/floor_img2.jpg" alt="jiu"></a>
									<a href="###"><div class="name">52°五粮液股份富贵天下礼盒500ml*2</div></a>
									<strong>￥59.00</strong>
								</li>
								<li>
									<a href="###"><img src="../Public/image/floor_img2.jpg" alt="jiu"></a>
									<a href="###"><div class="name">52°五粮液股份富贵天下礼盒500ml*2</div></a>
									<strong>￥59.00</strong>
								</li>
								<li>
									<a href="###"><img src="../Public/image/floor_img2.jpg" alt="jiu"></a>
									<a href="###"><div class="name">52°五粮液股份富贵天下礼盒500ml*2</div></a>
									<strong>￥59.00</strong>
								</li>

							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="box">
				<div class="head">
					<span class="icon"></span>
					<p class="title">白酒馆</p>
					<div class="next">
						白酒馆 <span>></span>
					</div>
					<ul>
						<li><a href="###">贵州</a></li>
						<li><span>|</span><a href="###">贵州</a></li>
						<li><span>|</span><a href="###">贵州</a></li>
						<li><span>|</span><a href="###">贵州</a></li>
						<li><span>|</span><a href="###">贵州</a></li>
						<li><span>|</span><a href="###">贵州</a></li>
					</ul>	
				</div>
				<div class="con">
					<div class="top clear">
						<div class="left">
							<img src="../Public/image/floor1.jpg" alt="">
						</div>
						<ul class="right clear">
							<li>
								<a href="###"><img src="../Public/image/floor_img.jpg" alt="jiu"></a>
								<a href="###"><div class="name">52°五粮液股份富贵天下礼盒500ml*2</div></a>
								<strong>￥59.00</strong>
							</li>
							<li>
								<a href="###"><img src="../Public/image/floor_img.jpg" alt="jiu"></a>
								<a href="###"><div class="name">52°五粮液股份富贵天下礼盒500ml*2</div></a>
								<strong>￥59.00</strong>
							</li>
							<li>
								<a href="###"><img src="../Public/image/floor_img.jpg" alt="jiu"></a>
								<a href="###"><div class="name">52°五粮液股份富贵天下礼盒500ml*2</div></a>
								<strong>￥59.00</strong>
							</li>
							<li>
								<a href="###"><img src="../Public/image/floor_img.jpg" alt="jiu"></a>
								<a href="###"><div class="name">52°五粮液股份富贵天下礼盒500ml*2</div></a>
								<strong>￥59.00</strong>
							</li>
							<li>
								<a href="###"><img src="../Public/image/floor_img.jpg" alt="jiu"></a>
								<a href="###"><div class="name">52°五粮液股份富贵天下礼盒500ml*2</div></a>
								<strong>￥59.00</strong>
							</li>
							<li>
								<a href="###"><img src="../Public/image/floor_img.jpg" alt="jiu"></a>
								<a href="###"><div class="name">52°五粮液股份富贵天下礼盒500ml*2</div></a>
								<strong>￥59.00</strong>
							</li>
							<li>
								<a href="###"><img src="../Public/image/floor_img.jpg" alt="jiu"></a>
								<a href="###"><div class="name">52°五粮液股份富贵天下礼盒500ml*2</div></a>
								<strong>￥59.00</strong>
							</li>
							<li>
								<a href="###"><img src="../Public/image/floor_img.jpg" alt="jiu"></a>
								<a href="###"><div class="name">52°五粮液股份富贵天下礼盒500ml*2</div></a>
								<strong>￥59.00</strong>
							</li>
							<li>
								<a href="###"><img src="../Public/image/floor_img.jpg" alt="jiu"></a>
								<a href="###"><div class="name">52°五粮液股份富贵天下礼盒500ml*2</div></a>
								<strong>￥59.00</strong>
							</li>
							<li>
								<a href="###"><img src="../Public/image/floor_img.jpg" alt="jiu"></a>
								<a href="###"><div class="name">52°五粮液股份富贵天下礼盒500ml*2</div></a>
								<strong>￥59.00</strong>
							</li>
						</ul>
					</div>
					<div class="bottom clear">
						<div class="left">
							<div class="list">
								<p>
									<span class="dot"></span>
									<span class="title">热门推荐</span>
								</p>
								<div class="con2">
									<a href="###">婚庆用酒</a>
									<a href="###">新品专场</a>
									<a href="###">大坛专场</a>
								</div>
							</div>
							<div class="list">
								<p>
									<span class="dot"></span>
									<span class="title">美酒品牌</span>
								</p>
								<div class="con2">
									<a href="###"><span>茅台</span></a>
									<a href="###"><span>五粮液</span></a>
									<a href="###"><span>剑南春</span></a>
									<a href="###"><span>汾酒</span></a>
									<a href="###"><span>郎酒</span></a>
									<a href="###"><span>泸州老窖</span></a>
								</div>
							</div>
						</div>
						<div class="right">
							<div class="head">
								<span class="icon"></span>
								<p class="title">本周热销排行榜</p>
								<ul>
									<li><a href="###">酱香型</a></li>
									<li><span>|</span><a href="###">浓香型</a></li>
									<li><span>|</span><a href="###">清香型</a></li>
									<li><span>|</span><a href="###">其他香型</a></li>
								</ul>	
							</div>
							<ul class="con3 clear">
								<li>
									<a href="###"><img src="../Public/image/floor_img2.jpg" alt="jiu"></a>
									<a href="###"><div class="name">52°五粮液股份富贵天下礼盒500ml*2</div></a>
									<strong>￥59.00</strong>
								</li>
								<li>
									<a href="###"><img src="../Public/image/floor_img2.jpg" alt="jiu"></a>
									<a href="###"><div class="name">52°五粮液股份富贵天下礼盒500ml*2</div></a>
									<strong>￥59.00</strong>
								</li>
								<li>
									<a href="###"><img src="../Public/image/floor_img2.jpg" alt="jiu"></a>
									<a href="###"><div class="name">52°五粮液股份富贵天下礼盒500ml*2</div></a>
									<strong>￥59.00</strong>
								</li>
								<li>
									<a href="###"><img src="../Public/image/floor_img2.jpg" alt="jiu"></a>
									<a href="###"><div class="name">52°五粮液股份富贵天下礼盒500ml*2</div></a>
									<strong>￥59.00</strong>
								</li>
								<li>
									<a href="###"><img src="../Public/image/floor_img2.jpg" alt="jiu"></a>
									<a href="###"><div class="name">52°五粮液股份富贵天下礼盒500ml*2</div></a>
									<strong>￥59.00</strong>
								</li>

							</ul>
						</div>
					</div>
				</div>
			</div>
			
			
		</div>
	</div>
	<div class="guanfang">
		<div class="guanfang_wrap">
			<ul class="ti clear">
				<li>官方推荐</li>
				<li>地方名品</li>
				<li>红洋酒品牌</li>
			</ul>
			<div class="addB"></div>
			<ul class="con">
				<li><img src="../Public/image/sm1.jpg" alt="" /></li>
				<li><img src="../Public/image/sm1.jpg" alt="" /></li>
				<li><img src="../Public/image/sm1.jpg" alt="" /></li>
				<li><img src="../Public/image/sm1.jpg" alt="" /></li>
				<li><img src="../Public/image/sm1.jpg" alt="" /></li>
				<li><img src="../Public/image/sm1.jpg" alt="" /></li>
				<li><img src="../Public/image/sm1.jpg" alt="" /></li>
				<li><img src="../Public/image/sm1.jpg" alt="" /></li>
				<li><img src="../Public/image/sm1.jpg" alt="" /></li>
				<li><img src="../Public/image/sm1.jpg" alt="" /></li>
				<li><img src="../Public/image/sm1.jpg" alt="" /></li>
				<li><img src="../Public/image/sm1.jpg" alt="" /></li>
				<li><img src="../Public/image/sm1.jpg" alt="" /></li>
				<li><img src="../Public/image/sm1.jpg" alt="" /></li>
				<li><img src="../Public/image/sm1.jpg" alt="" /></li>
				<li><img src="../Public/image/sm1.jpg" alt="" /></li>
				<li><img src="../Public/image/sm1.jpg" alt="" /></li>
				<li><img src="../Public/image/sm1.jpg" alt="" /></li>
			</ul>
		</div>
		
	</div>
	<div class="footer">
		<div class="footer_wrap">
			<p class="tel"><span></span>400-617-9999</p>
		</div>
	</div>
</div>
<script>
	var index=0;
	var index2=0;
	var timer=null;
	var timer2=null;
	var card=$('.cast .card');
	var op=$('.option .left .head li');
	
	function play(n){
		$('.card div').eq(n).fadeIn(500).siblings('div').fadeOut(500);
		$('.cast .smallBtn li').eq(n).addClass('on').siblings('li').removeClass('on');
	}
	function play2(n){
		$('.option .side .img1 a img').eq(n).fadeIn(500).siblings('img').fadeOut(500);
		$('.option .side .img1 .smallBtn li').eq(n).addClass('on').siblings('li').removeClass('on');
	}
	
	timer=setInterval(function(){
	play(index);
	index++;
	if(index==$('.card div').length){
	index=0;
	}
	},3000);
	


	/*鼠标悬停在图片上时停止轮播*/

	card.hover(
		function(){
			clearInterval(timer);
		},
		function(){
			timer=setInterval(function(){
			play(index);
			index++;
			if(index==$('.card div').length){
			index=0;
			}
		},3000);
		}
		)

	$('.cast .smallBtn li').hover(
		function(){
			clearInterval(timer);
			var _index=$('.cast .smallBtn li').index(this);
			index=_index;
			$('.card div').eq(_index).fadeIn(500).siblings('div').fadeOut(500);
			$('.cast .smallBtn li').eq(_index).addClass('on').siblings('li').removeClass('on');	
		},
		function(){
			timer=setInterval(function(){
			play(index);
			index++;
			if(index==$('.card div').length){
			index=0;
			}
		},3000);
		}
		)
	
	op.hover(
		function(){
			var _index=$(this).index();
			$(this).addClass('active').siblings().removeClass('active');
			$('.option .left .con ul').eq(_index).show().siblings().hide();
		}
	)
	
	$('.option .side .detail .head li').hover(
		function(){
			var _index=$(this).index();
			$(this).addClass('active').siblings().removeClass('active');
			$('.option .side .detail .con ul').eq(_index).show().siblings().hide();
		}
	)
	
	
	//  小轮播
	timer2=setInterval(function(){
	play2(index2);
	index2++;
	if(index2==$('.option .side .img1 a img').length){
	index2=0;
	}
	},3000);
	
	/*鼠标悬停在图片上时停止轮播*/

	$('.option .side .img1 a img').hover(
		function(){
			clearInterval(timer2);
		},
		function(){
			timer2=setInterval(function(){
			play2(index2);
			index2++;
			if(index2==$('.option .side .img1 a img').length){
			index2=0;
			}
		},3000);
		}
		)

	$('.option .side .img1 .smallBtn li').hover(
		function(){
			clearInterval(timer2);
			var _index=$('.option .side .img1 .smallBtn li').index(this);
			index=_index;
			$('.option .side .img1 a img').eq(_index).fadeIn(500).siblings('img').fadeOut(500);
			$('.option .side .img1 .smallBtn li').eq(_index).addClass('on').siblings('li').removeClass('on');	
		},
		function(){
			timer=setInterval(function(){
			play2(index2);
			index2++;
			if(index2==$('.option .side .img1 a img').length){
			index2=0;
			}
		},3000);
		}
		)
	
	
	
</script>	
</body>
</html>