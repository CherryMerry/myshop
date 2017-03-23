<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>123</title>
	<link rel="stylesheet" href="__PUBLIC__/bs/css/bootstrap.min.css">
	<link rel="stylesheet" href="__PUBLIC__/up/uploadify.css">
	<script src="__PUBLIC__/bs/js/jquery-2.2.3.min.js"></script>
	<script src="__PUBLIC__/bs/js/bootstrap.min.js"></script>
	<script src="__PUBLIC__/up/jquery.uploadify.min.js"></script>
</head>
<body>
<div class="container">
	<div class="page-header">
	  <h1>项目管理系统 <small>项目管理系统</small></h1>
	  <a href="__APP__/Login/logout">退出登录</a>
	</div>
	<div class="row">
		<div class="col-md-2">
			<div class="list-group User">
				  <a href="javascript:" class="list-group-item active">
				    用户管理
				  </a>
				  <a href="__APP__/User/index" target="_self" class="list-group-item">查看用户</a>
				  <a href="__APP__/User/add" target="_self" class="list-group-item">添加用户</a>
			</div>
			<div class="list-group Class">
				  <a href="javascript:" class="list-group-item active">
				    分类管理
				  </a>
				  <a href="__APP__/Class/index" target="_self" class="list-group-item">查看分类</a>
				  <a href="__APP__/Class/add" target="_self" class="list-group-item">添加分类</a>
			</div>
			<div class="list-group Brand">
				  <a href="javascript:" class="list-group-item active">
				    品牌管理
				  </a>
				  <a href="__APP__/Brand/index" target="_self" class="list-group-item">查看品牌</a>
				  <a href="__APP__/Brand/add" target="_self" class="list-group-item">添加品牌</a>
			</div>
			<div class="list-group Style">
				  <a href="javascript:" class="list-group-item active">
				    风格管理
				  </a>
				  <a href="__APP__/Style/index" target="_self" class="list-group-item">查看风格</a>
				  <a href="__APP__/Style/add" target="_self" class="list-group-item">添加风格</a>
			</div>
			<div class="list-group Shop">
				  <a class="list-group-item active">
				    商品管理
				  </a>
				  <a href="__APP__/Shop/index" target="_self" class="list-group-item">查看商品</a>
				  <a href="__APP__/Shop/add" target="_self" class="list-group-item">添加商品</a>
			</div>
			<div class="list-group Order">
				  <a class="list-group-item active">
				    订单管理
				  </a>
				  <a href="__APP__/Order/index" target="_self" class="list-group-item">查看订单</a>
				  <a href="__APP__/Order/add" target="_self" class="list-group-item">添加订单</a>
			</div>
			<div class="list-group Commit">
				  <a class="list-group-item active">
				    评论管理
				  </a>
				  <a href="__APP__/Commit/index" target="_self" class="list-group-item">查看评论</a>
				  <!-- <a href="__APP__/Order/add" target="_self" class="list-group-item">添加订单</a> -->
			</div>
			<div class="list-group Slide">
				  <a class="list-group-item active">
				    轮播图管理
				  </a>
				  <a href="__APP__/Slide/index" target="_self" class="list-group-item">查看轮播图</a>
				  <a href="__APP__/Slide/add" target="_self" class="list-group-item">添加轮播图</a>
			</div>
		</div>
		<div class="col-md-10">
			
				<div>
					<img src="../Public/img/bg.png" alt="">
				</div>
			
		</div>
	</div>
	
</div>
<script>
	//点击菜单效果
	$('.list-group-item').hide();
	$('.list-group-item.active').show();
	$('.list-group-item.active').click(function(){
		$(this).nextAll().toggle();
	});

	//页面刷新时，左侧打开的按钮不变
	cls='<?php echo ($_GET['_URL_'][0]); ?>';
	$('.'+cls).children().show();

	//用户页面的删除功能
	$('.del').click(function(){
		id=$(this).attr('idx');
		obj=$(this);
		$.get('__URL__/drop',{'id':id},function(response){
			if(response=='1'){
				obj.parent().parent().hide(500);
			}
		},'json');
	});

	$('.all').click(function(){
		$(':checkbox').attr({'checked':true});
	});

	$('.delAll').click(function(){
		$('form').submit();
	})

	//添加用户的上传头像功能
	 var img = '';
    $('#ups').uploadify({
        'swf'   : '__PUBLIC__/up/uploadify.swf',
        'uploader' : '__URL__/upload',
        'buttonText' : '上传',
        onUploadSuccess : function(file,data,response){
            //把所有的上传图片放入div中
            // alert(data);
            data=data.replace(/\.\/Public/,'__PUBLIC__');
            data2=data.replace(/t_/g,'');
            $('#imgUrl').val(data);
            $('#imgUrl2').val(data2);
            // alert($('#imgUrl').val());
            img="<img width='200px' src='"+data+"'>";
            $('#imgs').html(img);
            
        } 
    })

	
	
</script>
</body>
</html>