<?php /*a:1:{s:82:"D:\myphp_www\PHPTutorial\WWW\shang\application\admin\view\user\admin_role_add.html";i:1552396946;}*/ ?>
﻿<!--_meta 作为公共模版分离出去-->
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="Bookmark" href="/favicon.ico" >
<link rel="Shortcut Icon" href="/favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="/static/admin/lib/html5shiv.js"></script>
<script type="text/javascript" src="/static/admin/lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/static/admin/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/static/admin/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/static/admin/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/static/admin/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/static/admin/static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="/static/admin/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<!--/meta 作为公共模版分离出去-->

<title>新建网站角色 - 管理员管理 - H-ui.admin v3.1</title>
<meta name="keywords" content="H-ui.admin v3.1,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v3.1，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
<article class="page-container">

    <?php if(is_array($ara) || $ara instanceof \think\Collection || $ara instanceof \think\Paginator): $i = 0; $__LIST__ = $ara;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ara1): $mod = ($i % 2 );++$i;?>

	<form  class="form form-horizontal" method="post" id="form1" onsubmit="return false">

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>角色名称：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo htmlentities($ara1['title']); ?>" placeholder="" id="roleName" name="title">
                <input type="hidden" id="chuandi" name="chuandi" data-state="0" value="">
                <input type="hidden" id="id" name="id" data-state="0" value="<?php echo htmlentities($ara1['id']); ?>">
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">网站角色：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<dl class="permission-list">
					<dt>
						<label>权限管理</label>
					</dt>

                    <dl class="cl permission-list2">
                        <?php if(is_array($authr) || $authr instanceof \think\Collection || $authr instanceof \think\Paginator): $i = 0; $__LIST__ = $authr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$authrule): $mod = ($i % 5 );++$i;if($mod == '0'): ?>
                        <div class="row cl">
                            <label class="form-label col-xs-4 col-sm-3"></label>
                            <div class="formControls col-xs-8 col-sm-9">

                            </div>
                        </div>
                        <?php endif; ?>

                        <label class="">
                            <input type="checkbox" value=
                            <?php foreach(explode(',',$ara1['rules']) as $key): if($key==$authrule['id']): ?>
                            "<?php echo htmlentities($authrule['id']); ?>" checked="checked"
                            <?php else: ?>
                            "<?php echo htmlentities($authrule['id']); ?>"
                            <?php endif; ?>
                            <?php endforeach; ?>
                             name="rules" id="user-Character-0-0-0">
                            <?php echo htmlentities($authrule['name']); ?>
                        </label>
                       <?php endforeach; endif; else: echo "" ;endif; ?>
                    </dl>
                </dl>
			</div>
		</div>
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">

				<button type="submit" class="btn btn-success radius" id="submit" name="submit"><i class="icon-ok"></i> 确定</button>

            </div>
		</div>

	</form>
    <?php endforeach; endif; else: echo "" ;endif; ?>


</article>

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/static/admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/static/admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/static/admin/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/static/admin/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/static/admin/lib/jquery.validation/1.14.0/jquery.validate.js"></script>
<script type="text/javascript" src="/static/admin/lib/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="/static/admin/lib/jquery.validation/1.14.0/messages_zh.js"></script>
<script type="text/javascript">

        $('#submit').on('click', function () {
            var obj = document.getElementsByName('rules');
            var title = $("input[name='title']").val();
            var id = $("input[name='id']").val();
            var s = '';
            for (var i = 0; i < obj.length; i++) {
                if (obj[i].checked){
                    if(obj[i].value>0){
                        s += obj[i].value + ',';
                    }
                }
            }
            $.post("<?php echo url('user/admin_role_add_save'); ?>",{rules:s,title:title,id:id},function(json){
                alert('添加成功');
                top.location.href="http://shang.com/index.php/admin";


            },'json')

        })

$(function(){
	$(".permission-list dt input:checkbox").click(function(){
		$(this).closest("dl").find("dd input:checkbox").prop("checked",$(this).prop("checked"));
	});
	$(".permission-list2 dd input:checkbox").click(function(){
		var l =$(this).parent().parent().find("input:checked").length;
		var l2=$(this).parents(".permission-list").find(".permission-list2 dd").find("input:checked").length;
		if($(this).prop("checked")){
			$(this).closest("dl").find("dt input:checkbox").prop("checked",true);
			$(this).parents(".permission-list").find("dt").first().find("input:checkbox").prop("checked",true);
		}
		else{
			if(l==0){
				$(this).closest("dl").find("dt input:checkbox").prop("checked",false);
			}
			if(l2==0){
				$(this).parents(".permission-list").find("dt").first().find("input:checkbox").prop("checked",false);
			}
		}
	});

	$("#form-admin-role-add").validate({
		rules:{
			roleName:{
				required:true,
			},
		},
		onkeyup:false,
		focusCleanup:true,
		success:"valid",
		submitHandler:function(form){
			$(form).ajaxSubmit();
			var index = parent.layer.getFrameIndex(window.name);
			parent.layer.close(index);
		}
	});
});
</script>
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>