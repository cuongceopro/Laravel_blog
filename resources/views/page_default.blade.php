<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=yes, maximum-scale=1.0, minimum-scale=1.0">
	<meta name="description" content="VJshare">
	<title>YNU-Góc chia sẻ</title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" type="text/css" media="all" href="{{{asset('css/style.css')}}}">
	<!--[if lt IE 9]>
	<script src="js/html5.js"></script>
	<script src="js/css3-mediaqueries.js"></script>
	<![endif]-->
	<script src="{{{asset('js/jquery1.4.4.min.js')}}}"></script>
	<script src="{{{asset('js/script.js')}}}"></script>
</head>

<body>

	<header id="header" role="banner">
		<div class="inner">
			<div class="logo">
				<a href="/bkk" title="VJshare" rel="home">VJ-SHARE<br /><span>TOGETHER WE CAN</span</a>
					<h1>Do something for our country</h1>
					<!--
				<h1>Cổng thông tin chính thức của YNU Benkyoukai</h1>
			-->
			</div>
			<nav id="mainNav">
				<div class="inner">
					<a class="menu" id="menu"><span>MENU</span></a>
					<div class="panel">
						<ul id="topnav">
							<li class="current-menu-item"><a href="/bkk"><strong> Trang chủ</strong><br /><span>Top</span></a></li>
							<li><a href="/aboutus"><strong>About us</strong><br /><span>Who we are ?</span></a>
							</li>
							<!--
							<li><a href="/detail"><strong>Hoạt động</strong><br /><span>Activity</span></a></li>
							<li><a href="/detail"><strong>Thành viên</strong><br /><span>Members</span></a></li>
						-->
							<li><a href="/contact"><strong>Liên hệ</strong><br /><span>Contact</span></a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>

	@yield('page_content')

	<footer id="footer">
		<div class="inner">
			<section class="gridWrapper">
				<article class="grid">
					<p class="logo"><a href="/bkk" title="ホームページサンプル株式会社" rel="home">VJ-SHARE<br /><span>TOGETHER WE CAN</span></a></p>
					<h1>Do something for our country</h1>
				</article>
				<article class="grid">
					<p class="tel"><span>Điện thoại:</span> <strong>080-3899-2908</strong></p>
					<p class="open">Email: ynu_benkyoukai@gmail.com</p>
				</article>
				<article class="grid copyright">
          Copyright(c) 2017 YNU-Benkyoukai All Rights Reserved. Design by <a href="http://f-tpl.com" target="_blank" rel="nofollow">http://f-tpl.com</a>
				</article>
			</section>
		</div>
	</footer>

</body>
</html>
