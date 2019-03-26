<?php /*a:1:{s:74:"D:\myphp_www\PHPTutorial\WWW\shang\application\index\view\index\zhuce.html";i:1552938598;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>用户注册</title>
    <link rel="stylesheet" type="text/css" href="/static/css/bootstrap.min.css" />
    <script type="text/javascript" src="/static/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="/static/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="/static/nicedit/nicEdit.js"></script>
</head>

<body>
<div class="row ">
    <!-- 左侧8列 -->
    <div class="col-md-8 navbar-left">
        <!-- 页头 -->
        <div class="page-header">
            <h2>用户注册</h2>
        </div>
        <!-- 注册表单:采用水平表单 -->
        <form action="" class="form-horizontal " method="post" id="login" name="login">
            <div class="form-group">
                <label for="admin_name" class="col-sm-2 control-label">用户名:</label>
                <div class="col-sm-10">
                    <input type="text" name="admin_name" class="form-control" id="admin_name" placeholder="UserName">
                </div>
            </div>

            <div class="form-group">
                <label for="admin_password" class="col-sm-2 control-label">密码:</label>
                <div class="col-sm-10">
                    <input type="password" name="admin_password" class="form-control" id="admin_password" placeholder="Password">
                </div>
            </div>

            <div class="form-group">
                <label for="inputPassword5" class="col-sm-2 control-label">确认密码:</label>
                <div class="col-sm-10">
                    <input type="password"  name="password_confirm" class="form-control" id="inputPassword5" placeholder="Password Confirm">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary" id="submit" name="submit">注册</button>
                </div>
            </div>


        </form>
        <script>
            $(document).ready(function(){
                $("#submit").click(function(){

                    $.ajax({
                        type:"POST",
                        url:"<?php echo url('index/index/index_insert'); ?>",
                        data: $("#login").serialize(),
                        dataType:"json",
                        success: function(data){
                            switch(data.status){
                                case 1:
                                    alert(data.message);
                                    window.location.href = "<?php echo url('index/index/index'); ?>";
                                    break;
                                case 0:
                                case-1:
                                    alert(data.message);
                                    window.location.back();
                                    break;
                            }
                        },
                        error:function(jqXHR){
                            alert("错误:"+jqXHR.message);
                        }
                    });
                });
            });

        </script>
    </div>
</div>
<!--<script>
    var submit = document.getElementById('submit');  //获取提交按钮
    submit.onclick = function () {
        //1.创建Ajax对象
        var xhr = new XMLHttpRequest();
        //2.创建请求事件的监听
        xhr.onreadystatechange = function () {
            if(xhr.readyState==4 && xhr.status == 200){
                alert('1');
                console.log(xhr.responseText);
                //解析返回的json字符串
                /*var json = JSON.parse(xhr.responseText);*/
               /* var tips = document.getElementById('tips');
                tips.innerHTML = '欢迎用户'+json.name+'再次回来';*/
            }
        }
        //3.初始化一个url请求
        var user = document.getElementById('name').value;
        var password = document.getElementById('password').value;
        var email = document.getElementById('email').value;
        var mobile = document.getElementById('mobile').value;
        var data = 'name='+user+'&password='+password+'&email='+email+'&mobile='+mobile;//生成post请求数据
        alert(data);
        var url = 'insert';
        xhr.open('post',url,true); //请求类型为post，交互方式为异步
        //4.设置请求头
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        //5.发送url请求
        xhr.send(data);
        return false;  //禁止提交按钮的默认行为
    }
</script>-->


</body>

</html>