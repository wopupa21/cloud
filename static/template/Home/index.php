<?php
if(!defined('IN_CRONLITE'))exit();
@header('Content-Type: text/html; charset=UTF-8');
$qqs=$DB->count("SELECT count(*) from ".DBQZ."_qq WHERE 1"); //获取QQ数量
$users=$DB->count("SELECT count(*) from ".DBQZ."_user WHERE 1"); //获取用户数量
$yxts=ceil((time()-strtotime($conf['build']))/86400); //本站已运行多少天
$sites=$DB->count("SELECT count(*) from ".DBQZ."_site WHERE 1"); //获取站点数量
$qqjobs=$DB->count("SELECT count(*) from ".DBQZ."_qqjob WHERE 1");
$signjobs=$DB->count("SELECT count(*) from ".DBQZ."_signjob WHERE 1");
$wzjobs=$DB->count("SELECT count(*) from ".DBQZ."_wzjob WHERE 1");
$zongs=$qqjobs+$signjobs+$wzjobs; //获取总任务数量
$info['times'] //系统累计运行的次数
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?php echo $conf['sitename'].$conf['sitetitle']?></title>
    <meta name="description" content="<?php echo $conf['description']?>">
    <meta name="keywords" content="<?php echo $conf['keywords']?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href="/static/home/css/normalize.css" rel="stylesheet">
	<link href="/static/home/css/style.css" rel="stylesheet">
	<link href="/static/home/css/responsive.css" rel="stylesheet">
</head>
<body id="index">
	<header>
		<section id="page-topbar">
			<div class="container">
				<div class="header-logo" id="header-logo">
					<a href="/"><h1><?php echo $conf['sitename']?></h1></a>
					<p> www.vizyw.com </p>
				</div>
				<nav id="header-nav">
					<ul>
						<li class="nav-li nav-li-1"><a href="/" class="nav-a">首页</a></li>
						<li class="nav-li nav-li-3"><a href="http://www.vizyw.com/" class="nav-a">官网</a></li>
						<li class="nav-li nav-li-2"><a href="http://fm.relzz.com/" class="nav-a">FM</a></li>
					</ul>
				</nav>
				<div class="nav-toggle">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div>
		</section>
		<script>
			var headerNav = document.getElementById('page-topbar');
			function clientSize() {
				if (window.innerWidth <= 830) {
					console.log(window.innerWidth);
					console.log(headerNav);
					headerNav.classList.add('small-screen');
					toggleNav();
				};
			}
			function toggleNav() {
				headerNav.addEventListener('click', function() {
					headerNav.classList.toggle('click');
					console.log(headerNav + "click!");
				}, false); 
			}
			clientSize();
		</script>
	</header>
	<section class="section-index">
		<div class="container">
			<div class="aboutus">
				<h1><?php echo $conf['sitename']?></h1>
				<p>极简风格唯爱网络第六套模板<br/>
					回收眺望已过4载<br/>
					风雨骤变人却镂空<br/>
					感谢这么些年还有你的陪伴
				</p>
			</div>
			<div class="slogan">
				<h2>操作中心</h2>
				<p> <?php if($islogin==1){?><a href="index.php?mod=user">用户中心</a><a href="index.php?mod=qqlist">添加QQ</a><?php }else{?> 	 
				<a target="_blank" href="index.php?mod=login">用户登录</a><a target="_blank" href="index.php?mod=reg">免费注册</a>
      <?php }?></p>
			</div>
		</div>
	</section>
	<section class="page-content">
		<div class="container">
			<div class="section-title">
				<img src="/static/home/icon/cogwheel.svg" alt="" class="icon">
				<div>
					<h2>我们的优势</h2>
					<p>你还在犹豫什么？</p>
				</div>
			</div>
			<div class="section-content">
				<a href="/colo/">
				<div class="item-box">
					<img src="/static/home/icon/server.svg" alt="" class="icon">
					<div>
						<h3>专业服务器</h3>
						<p>拥有自己专业的服务器，搭载多线BGP全年不断电，秒赞停止</p>
					</div>
				</div>
				<a href="/hosting/">
				<div class="item-box">
					<img src="/static/home/icon/database.svg" alt="" class="icon">
					<div>
						<h3>技术团队</h3>
						<p>拥有自己独一无二的后勤团队，采用最新秒赞接口，24小时保驾护航</p>
					</div>
				</div>
				</a>
				</a>
				<a href="/ssl/">
				<div class="item-box">
					<img src="/static/home/icon/lock.svg" alt="" class="icon">
					<div>
						<h3>安全稳定</h3>
						<p>全站数据加密，管理无法知道你的密码，强大的企业培训与管理</p>
					</div>
				</div>
				</a>
			</div>
		</div>
	</section>
	<section class="section-question">
		<div class="container">
			<img src="/static/home/icon/speech-bubble.svg" alt="Question-icon" class="icon icon-question">
			<div>
				<h2>疑难解答?</h2>
				<p>请给我们留言或是联系客服。我们会尽快回复你。</p>
			</div>
		</div>
	</section>
	<footer>
		<div class="container">
			<section class="footer-section-1" id='footer-about'>
				<h2>关于我们</h2>
				<h3>唯爱网络</h3>
				<p><b>唯爱网络</b>是一个专注于网络资源开发和共享加建站教程、源码下载、WordPress主题、网站开发交流、资源分享为一体的多互动交流平台。</p>
			</section>
			<section class="footer-section-2" id="footer-links">
				<h2>友链</h2>
				<nav>
					<ul>
						<li><a href="http://www.vizyw.com/">唯爱资源网</a></li>
					</ul>
				</nav>
			</section>
			<section class="footer-section-3" id="footer-contact">
				<h2>客服</h2>
				<p>
				Tel:4000000000<br>
				E-mail:amdin@vizyw.com
					<a href="http://z.gdlsxls.cn/go/?url=http://wpa.qq.com/msgrd?v=3&amp;uin=3552412846&amp;site=qq&amp;menu=yes" target="_blank">QQ3552412846</a>
				</p>
			</section>
		</div>
		<div class="container">
			<section class="footer-copyright">
				<p>Copyright © 2020, 一片青云 All rights reserved.</p>
			</section>
		</div>
	</footer></body>
</html>
