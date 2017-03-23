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
		<h1 class="page-header">添加商品</h1>
		<form action="__URL__/insert" method="post">
			<div class="form-group">
				<label for="">商品名：</label>
				<input type="text" class="form-control" name="name">
			</div>
			<div class="form-group">
				<label for="">商品价格：</label>
				<input type="text" class="form-control" name="price">
			</div>
			<div class="form-group">
				<label for="">商品库存：</label>
				<input type="text" class="form-control" name="stock">
			</div>
			<div class="form-group">
				<label for="">是否上架：</label>
				<input type="text" class="form-control" name="shelf">
			</div>
			
			<div class="form-group">
				<label for="">所属品牌：</label>
				<select name="brand_id" id="">
					<option value="">--选择品牌--</option>
					<?php if(is_array($brandrows)): $i = 0; $__LIST__ = $brandrows;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$brandrow): $mod = ($i % 2 );++$i;?><option value='<?php echo ($brandrow['id']); ?>'><?php echo ($brandrow['name']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
				</select>	
			</div>

			<div class="form-group">
				<label for="">所属风格：</label>
				<select name="style_id" id="">
					<option value="">--选择风格--</option>
					<?php if(is_array($stylerows)): $i = 0; $__LIST__ = $stylerows;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$stylerow): $mod = ($i % 2 );++$i;?><option value='<?php echo ($stylerow['id']); ?>'><?php echo ($stylerow['name']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
				</select>	
			</div>
			
			<div class="form-group">
				<input type="submit" value="提交" class="btn btn-primary">
				<input type="reset" value="取消" class="btn btn-danger">
			</div>
		</form>
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