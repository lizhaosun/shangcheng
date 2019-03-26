<?php /*a:1:{s:77:"D:\myphp_www\PHPTutorial\WWW\shang\application\index\view\user\gouwuche2.html";i:1553584564;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!--HTML4.01-->
	<!-- <meta htt-equiv='Content-Type' content='text/html'  charset="UTF-8"> -->
	<!--HTML5-->
	<meta charset="UTF-8" />
	<meta name='viewport' content="width=device-width,initial-scale=1,user-scalable=no" />
	<title>淘宝网 - 我的购物车</title>
	<link href="/static/css/stylesheets/screen.css" media="screen, projection" rel="stylesheet" type="text/css" />
</head>
<body>
	<div class='main'>
		<div class="site-nav">
			<div class="nav">
				<ul class="nav-left"><?php echo htmlentities(app('session')->get('admin_name')); ?></a></li>
					<li><a href="#" class='nav-msg'>消息</a></li>

				</ul>
				<ul class="nav-right">

					<li class='nav_myTao'>
						<a href="#" class='nav-myTao'>我的淘宝</a>
						<ul class='nav-myTao-nav'>
							<a href="#">已买到的宝贝</a>
							<a href="#">我的足迹</a>
							<a href="#">爱逛街</a>
							<a href="#">淘宝达人</a>
							<a href="#">新欢</a>
						</ul>
					</li>
					<li class='nav_collection'>
						<a href="#" class='nav-collection'>收藏夹</a>
						<ul class="nav-myTao-nav">
							<a href="#">收藏的宝贝</a>
							<a href="#">收藏的店铺</a>
						</ul>
					</li>


				</ul>
			</div>
		</div>
		<div class="container">
			<div class="header">
				<a href="#"></a>
				<div class="header-search">
					<input type="text" placeholder="请输入内容" class='header-search-input' autocomplete="off"><!--
					--><button type='submit'>搜 索</button>
					<div class="list">
					</div>
				</div>
			</div>
			<div class="content">
				<div class="tbBar">
					<ul class = 'switch-cart'>
						<li class='btn-switch-cart switch-cart-0 selectColumn'>
							<a href="#" class='btn-switch-href '>
								<em>全部商品</em>
								<span class='number'>7</span>
								<span class='pipe'></span>
							</a>
						</li>
						<li class='btn-switch-cart switch-cart-1'>
							<a href="#" class="btn-switch-href btn-switch-color">
								<em>降价商品</em>
								<span class="number">0</span>
								<span class="pipe"></span>
							</a>
						</li>
						<li class='btn-switch-cart switch-cart-2'>
							<a href="#" class="btn-switch-href btn-switch-color">
								<em>库存紧张</em>
								<span class="number">0</span>
								<span class="pipe pipe-display"></span>
							</a>
						</li>
					</ul>
					<div class="cart-sum">
						<span>已选商品（不含运费）</span>
						<strong class='price'>￥<!--
							--><span class='total-symbol'>0.00</span>
						</strong>
						<a href="#" class="submit-btn btn-common" onclick="javascript:fukuan();return false;" >结算</a>

					</div>
					<div class="wrap-line">
					</div>
				</div>
				<div class="tbMain">
					<div class="commodityColumn">
						<div class="th-chk">
							<div id="selectAll" class="selectAll ">
								<input type="checkbox" name="selectAllChckbox" id='selectAllChckbox' class='allSelected1' autocomplete="off">
								<label for="selectAllChckbox">全选</label>
							</div>
						</div>
						<div class="th-inner">
							<div class="commodityMsg">
								<div>商品信息</div>
							</div>
						</div>
						<div class="th-space">
							<div class="td-inner">&nbsp;</div>
						</div>
						<div class="th-price">
							<div class="td-inner">单价</div>
						</div>
						<div class="th-amount">
							<div class="td-inner">数量</div>
						</div>
						<div class="th-sum">
							<div class="td-inner">金额</div>
						</div>
						<div class="th-operation">
							<div class="td-inner">操作</div>
						</div>
					</div>
                    <form action="" class="form-horizontal " method="post" id="login" name="login"   >
                        <input type="hidden" id="admin_id" name="" value="<?php echo htmlentities(app('session')->get('admin_id')); ?>" >
					<div class='commodityContainer'>
                        <?php foreach($gouwuche['s_id'] as $key=>$value): ?>
						<div class="mainCommodity">
							<div class="shopInfo">
								<div class="shopMsg">
										<input type="checkbox" name="shopMsg" id='shopMsg' class='shopMsg-input'  autocomplete="off">
										<label for="shopMsg">店铺：
                                            <a href="#"><?php echo htmlentities(getUserName($gouwuche['d_id'][$key])); ?></a></label>
								</div>
							</div>
							<div class="commodityInfo">
								<ul>
									<li class='td-chk'>
										<div class="td-inner">
											<input type="checkbox" name='checkbox'  autocomplete="off" value="<?php echo htmlentities($gouwuche['s_id'][$key]); ?>" >
                                            <input type="hidden" id="hidd<?php echo htmlentities($gouwuche['s_id'][$key]); ?>" name="hidd<?php echo htmlentities($gouwuche['s_id'][$key]); ?>" value="<?php echo htmlentities($gouwuche['shuliang'][$key]); ?>" >

										</div>

									<li class='td-item'>
										<div class="td-inner">
											<a href="<?php echo url('index/index/details',['id'=>$gouwuche['s_id'][$key]]); ?>" class='boyShoes'><img height="80" width="80"    src="/uploads/<?php echo htmlentities(getGoodsShangpintu($gouwuche['s_id'][$key])); ?>" alt="">
											</a>
											<div class="item-info">
												<div class="item-basis-info">
													<a href="#"><?php echo htmlentities(getGoodsShangpin($gouwuche['s_id'][$key])); ?></a>
												</div>
												<div class="item-other-info">
													<div class="item-other-space"></div>
													<div class="item-other-list">
														<a href="#" title='支持信用卡支付'>
															<div class="bandCard"></div>
														</a>
														<a href="#" class='sevenDay' title='7天无理由'>
															<div class="sevenDay"></div>
														</a>
														<a href="#" title='消费者保障服务'>
															<div class="guarantee"></div>
														</a>
													</div>
												</div>
											</div>
										</div>
									</li>
									<li class='td-info'>
										<div class="td-info-msg">
											<p>颜色分类：028黑蜂窝</p>
											<p>尺码：41</p>
										</div>
									</li>
									<li class='td-price'>
										<div class="td-inner">
											<p class='non-discount'><?php echo htmlentities(getGoodsShangpinsc($gouwuche['s_id'][$key])); ?></p>
											<p class='discount'>￥<span id="xianjia<?php echo htmlentities($gouwuche['s_id'][$key]); ?>"><?php echo htmlentities(getGoodsShangpinjg($gouwuche['s_id'][$key])); ?></span></p>
											<div class="promotion">
												卖家促销
												<i class='promotionIcon'></i>
											</div>
											<div class="proSlidedown">
												<p class='newPro'>卖家促销：新品大特价</p>
												<p><?php 
                                                    echo(getGoodsShangpinsc($gouwuche['s_id'][$key])-getGoodsShangpinjg($gouwuche['s_id'][$key]));
                                                     ?></p>
											</div>
										</div>
									</li>
									<li class='td-amount'>
										<div class="item-amount">
											<a href="#" class='amount-color' onclick="javascript:sljian(<?php echo htmlentities($gouwuche['s_id'][$key]); ?>);return false;">-</a>
											<input type="text" name='amountNum' id="jiajian<?php echo htmlentities($gouwuche['s_id'][$key]); ?>" value='<?php echo htmlentities($gouwuche['shuliang'][$key]); ?>' autocomplete="off">
											<a href="#" class="" onclick="javascript:sljia(<?php echo htmlentities($gouwuche['s_id'][$key]); ?>);return false;">+</a>
										</div>
										<div class="stock">
											574
										</div>
										<div class="outNum">
											<span class="instr">最多只能购买</span>
											<span class='stockNum'></span><!--
											--><em>件</em>
										</div>

		 							</li>
									<li class='td-sum'>
										<em>￥</em><!--
										--><span id="jiaqian<?php echo htmlentities($gouwuche['s_id'][$key]); ?>"><?php 
                                                    echo(getGoodsShangpinjg($gouwuche['s_id'][$key])*($gouwuche['shuliang'][$key]));
                                                     ?></span>
									</li>
									<li class='td-operation'>
										<p><a href="" onclick="javascript:userschu(<?php echo htmlentities($gouwuche['s_id'][$key]); ?>,<?php echo htmlentities(app('session')->get('admin_id')); ?>);return false;" class='delete'>删除</a></p>
									</li>
								</ul>
							</div>
						</div>

                        <?php endforeach; ?>


					</div>
                    </form>
				</div>
			</div>
			<div class="footer">
				<div class="all-selected">
					<input type="checkbox" name='all-selected' id='all-selected' class='allSelected2' autocomplete="off">
					<label for="all-selected">全选</label>
				</div>
				<div class="operation">
					<a href="#" class='delete'>删除</a>
					<a href="#">移入收藏夹</a>
			
				</div>
				<div class="float-bar-right">
					<div class="amount-sum">
						<span>已选商品</span>
						<em class='totalSum'>0</em>
						<span>件</span>
					</div>
					<div class="price-sum">
						<span>合计（不含运费）：</span>
						<span class='moneySym'>￥</span><!--
						--><em class='total-sum'>0.00</em>
					</div>
					<div class="btn-area">
						<a href="#" class='btn-common' id='btn-sum' onclick="javascript:fukuan();return false;">结 算</a>
					</div>
				</div>
			</div>
		</div>

	</div>
	<script src='/static/scripts/jquery-2.2.1.min.js'></script>
	<script src='/static/scripts/template.js'></script>
	<script id='basketBallShoes' type="text/html">
		{{each Suggests as value i}}
			<div class="mainCommodity">
				<div class="shopInfo">
					<div class="shopMsg">
							<input type="checkbox" name="shopMsg" id='{{value.label}}' class='shopMsg-input' autocomplete="off">
							<label for="{{value.label}}">店铺：
                                <a href="#">{{value.shop}}</a></label>
					</div>
				</div>
				<div class="commodityInfo">
					<ul>
						<li class='td-chk'>
							<div class="td-inner">
								<input type="checkbox" name='checkbox' autocomplete="off" >
							</div>
						</li>
						<li class='td-item'>
							<div class="td-inner">
								<a href="#" class='desImg'>
									<img src="{{value.image}}" alt='{{value.Txt}}'>
								</a>
								<div class="item-info">
									<div class="item-basis-info">
										<a href="#">{{value.Txt}}</a>
									</div>
									<div class="item-other-info">
										<div class="item-other-space"></div>
										<div class="item-other-list">
											<a href="#" title='支持信用卡支付'>
												<div class="bandCard"></div>
											</a>
											<a href="#" title='7天无理由'>
												<div class="sevenDay"></div>
											</a>
											<a href="#" title='消费者保障服务'>
												<div class="guarantee"></div>
											</a>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class='td-info'>
							<div class="td-info-msg">
								<p>{{value.color}}</p>
								<p>{{value.size}}</p>
							</div>
						</li>
						<li class='td-price'>
							<div class="td-inner">
								<p class='non-discount'>{{value.nonDiscount}}</p>
								<p class='discount'>￥<span>{{value.num}}.00</span></p>
								<div class="promotion">
									卖家促销
									<i class='promotionIcon'></i>
								</div>
								<div class="proSlidedown">
									<p class='newPro'>卖家促销：新品大特价</p>
									<p>优惠：￥200.00</p>
								</div>
							</div>
						</li>
						<li class='td-amount'>
							<div class="item-amount">
								<a href="#" class='amount-left amount-color'>-</a>
								<input type="text" name='amountNum' value='1' autocomplete="off">
								<a href="#" class="amount-right">+</a>
							</div>
							<div class="stock">
								{{value.max}}
							</div>
							<div class="outNum">
								<span class="instr">最多只能购买</span>
								<span class='stockNum'></span><!--
								--><em>件</em>
							</div>

							</li>
						<li class='td-sum'>
							<em>￥</em><!--
							--><span>{{value.num}}</span>
						</li>
						<li class='td-operation'>
							<p><a href="#" class='delete'>删除</a></p>
						</li>
					</ul>
				</div>
			</div>
		{{/each}}
	</script>
	<script id="search" type="text/html">
		<ul>
			{{each Suggests as value i}}
				<li>{{value.Txt}}</li>
			{{/each}}
		</ul>
	</script>
	<script id='delete' type='text/html'>
		<div class="undo-wrapper">
			<div class="deleteCom">
				<p>
					成功删除
					<em>1</em>
					件宝贝，如果无，可
					<a href="#" class='turnBack'>撤销本次删除</a>
				</p>
			</div>
		</div>
	</script>
	<script src='/static/scripts/myOrder.js'></script>


    <script>

/*减件*/
        function sljian(id){
         var jian=  document.getElementById('jiajian'+id).value;
            document.getElementById('jiajian'+id).value=jian-1;
            document.getElementById('jiaqian'+id).innerHTML=Number(document.getElementById('jiajian'+id).value)*Number(document.getElementById('xianjia'+id).innerHTML);
            document.getElementsByName('hidd'+id).value=document.getElementById('jiajian'+id).value;

        }
        /*加件*/
        function sljia(id){
            var jian=  document.getElementById('jiajian'+id).value;


            document.getElementById('jiajian'+id).value=Number(jian)+1;
            document.getElementById('jiaqian'+id).innerHTML=Number(document.getElementById('jiajian'+id).value)*Number(document.getElementById('xianjia'+id).innerHTML);
            document.getElementsByName('hidd'+id).value=document.getElementById('jiajian'+id).value;

        }
        /*删除商品*/
        function  userschu(s_id,admin_id){
            window.location.href="<?php echo url('index/user/userdel'); ?>"+"?s_id="+s_id+'&'+"admin_id="+admin_id;
        }
        /*确定订单*/
        function   fukuan(){
        var check=document.getElementsByName('checkbox');
        var admin_id=document.getElementById('admin_id').value;
            var arr =[];
            var hid=[];
            for(var i=0;i<check.length;i++){
                if(check[i].checked){
                    arr.push(check[i].value);
                    hid.push(document.getElementById('hidd'+Number(check[i].value)).value) ;

                }
            }
          var aa=  arr.toString();
          var  shuliang =hid.toString();

                    $.ajax({
                        url:"<?php echo url('index/user/jiezhang2'); ?>",
                        type:"post",
                        contentType: "application/json;charset=utf-8",

                        data: JSON.stringify({
                            'admin_id':admin_id,
                            's_id':aa,
                           'shuliang' :shuliang,
                        }),//数据传到PHP文件
                        dataType:"json",
                        success: function(data){ //php数据传回来然后执行(所以必须要符合dataType的格式)
                            alert(data.message);
                            window.location.href = "<?php echo url('index/user/jiezhang'); ?>";


                        },

                        error:function(jqXHR){

                            alert("错误:"+jqXHR.message);
                        }
                    });

        }


    </script>
</body>
</html>