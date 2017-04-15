<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=yes, maximum-scale=1.0, minimum-scale=1.0">
	<meta name="description" content="ホームページサンプル株式会社のサイトです">
	<title>YNU-Góc chia sẻ</title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" type="text/css" media="all" href="/css/style.css">
	<!--[if lt IE 9]>
	<script src="js/html5.js"></script>
	<script src="js/css3-mediaqueries.js"></script>
	<![endif]-->
	<script src="js/jquery1.4.4.min.js"></script>
	<script src="js/script.js"></script>
</head>

<body>

	<header id="header" role="banner">
		<div class="inner">
			<div class="logo">
				<a href="/bkk" title="ホームページサンプル株式会社" rel="home">YNU-Góc chia sẻ<br /><span> [Slogan] Make the change!</span</a>
				<h1>Cổng thông tin chính thức của YNU Benkyoukai</h1>
			</div>
			<nav id="mainNav">
				<div class="inner">
					<a class="menu" id="menu"><span>MENU</span></a>
					<div class="panel">
						<ul id="topnav">
							<li><a href="/bkk"><strong> Trang chủ</strong><br /><span>Top</span></a></li>
							<li class="current-menu-item"><a href="detail.html"><strong>YNU Benkyoukai</strong><br /><span>About us</span></a>
							</li>
							<!--
							<li><a href="/detail"><strong>Hoạt động</strong><br /><span>Activity</span></a></li>
							<li><a href="/detail"><strong>Thành viên</strong><br /><span>Members</span></a></li>
						-->
							<li><a href="/detail"><strong>Liên hệ</strong><br /><span>Contact</span></a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>

	<div id="wrapper">
		<section id="main">

			<section class="content">

				<h3 class="heading">{{ $category_posts[0]->category->name }}</h3>
				<article class="post">

					@foreach($category_posts as $category_post)


					<h3>{{ $category_post->title }}</h3>
					<p class="dateLabel">2016/11/20</p>
					<p><img src="{{{asset('images/banners/sample1.jpg')}}}" alt="" width="260" height="113" class="alignright" />
						Đầu tháng này, Jenkins đã thành lập một doanh nghiệp mới có tên 10X Future Technologies. Mục tiêu của họ là hiện đại hóa công nghệ đang được các ngân hàng sử dụng.
						Họ sẽ nghiên cứu một hệ thống ngân hàng cốt lõi dựa trên công nghệ điện toán đám mây. Hệ thống mới sẽ "giúp các ngân hàng tiếp cận và có cái nhìn sâu hơn về dữ liệu khách hàng, cho phép họ đưa ra các sản phẩm như cho vay thế chấp, thẻ tín dụng, vay vốn, tiết kiệm phù hợp hơn với nhu cầu của từng khách hàng".
						Hồi tháng 6, Jenkins cho biết ông kỳ vọng công ty này sẽ giúp mình tiến vào lĩnh vực fintech. Trước đó, ông từng dự báo ngành ngân hàng sẽ đối mặt với "khoảnh khắc Uber" khi các đối thủ đầy sáng tạo liên tục làm chao đảo thị trường.
						Jenkins là người đặc biệt hứng thú với công nghệ. Trong thời gian làm việc tại Barclays, ông giám sát việc phát triển nhiều ý tưởng đột phá, như thanh toán bằng séc qua điện thoại di động
						</p><br clear="all" />

						<p>{{ link_to("/bbc/{$category_post->id}", '続きを読む', array('class' => 'btn btn-primary')) }}</p>

						@endforeach

				</article>


				<!--
        @section('content')

        <h3 class="heading">{{ $category_posts[0]->category->name }}</h3>

        <div class="col-xs-8 col-xs-offset-2">


        @foreach($category_posts as $category_post)

        	<h2>タイトル：{{ $category_post->title }}
        		<small>投稿日：{{ date("Y年 m月 d日",strtotime($category_post->created_at)) }}</small>
        	</h2>

        	<p>{{ $category_post->content }}</p>

        	<p>{{ link_to("/bbc/{$category_post->id}", '続きを読む', array('class' => 'btn btn-primary')) }}</p>
        	<p>コメント数：{{ $category_post->comment_count }}</p>
        	<hr />
        @endforeach

        <div class="pagenav">
            {{ $category_posts->links() }}
  			</div>



        </div>
			-->


				<!--
				<h3 class="heading">Chia sẻ thông tin</h3>
				<article class="post">
					<p class="dateLabel">2016/11/20</p>
					<h3>Những sếp ngân hàng bỏ việc theo fintech</h3>
					<p><img src="images/banners/sample1.jpg" alt="" width="260" height="113" class="alignright" />
						Đầu tháng này, Jenkins đã thành lập một doanh nghiệp mới có tên 10X Future Technologies. Mục tiêu của họ là hiện đại hóa công nghệ đang được các ngân hàng sử dụng.
						Họ sẽ nghiên cứu một hệ thống ngân hàng cốt lõi dựa trên công nghệ điện toán đám mây. Hệ thống mới sẽ "giúp các ngân hàng tiếp cận và có cái nhìn sâu hơn về dữ liệu khách hàng, cho phép họ đưa ra các sản phẩm như cho vay thế chấp, thẻ tín dụng, vay vốn, tiết kiệm phù hợp hơn với nhu cầu của từng khách hàng".
						Hồi tháng 6, Jenkins cho biết ông kỳ vọng công ty này sẽ giúp mình tiến vào lĩnh vực fintech. Trước đó, ông từng dự báo ngành ngân hàng sẽ đối mặt với "khoảnh khắc Uber" khi các đối thủ đầy sáng tạo liên tục làm chao đảo thị trường.
						Jenkins là người đặc biệt hứng thú với công nghệ. Trong thời gian làm việc tại Barclays, ông giám sát việc phát triển nhiều ý tưởng đột phá, như thanh toán bằng séc qua điện thoại di động
						</p><br clear="all" />
					<h3>Cựu Giám đốc mảng ngân hàng đầu tư của Barclays - Rich Ricci</h3>
					<p><img src="images/banners/sample2.jpg" alt="" width="260" height="113" class="alignleft" />
						Đầu tháng này, Jenkins đã thành lập một doanh nghiệp mới có tên 10X Future Technologies. Mục tiêu của họ là hiện đại hóa công nghệ đang được các ngân hàng sử dụng.
						Họ sẽ nghiên cứu một hệ thống ngân hàng cốt lõi dựa trên công nghệ điện toán đám mây. Hệ thống mới sẽ "giúp các ngân hàng tiếp cận và có cái nhìn sâu hơn về dữ liệu khách hàng, cho phép họ đưa ra các sản phẩm như cho vay thế chấp, thẻ tín dụng, vay vốn, tiết kiệm phù hợp hơn với nhu cầu của từng khách hàng".
						Hồi tháng 6, Jenkins cho biết ông kỳ vọng công ty này sẽ giúp mình tiến vào lĩnh vực fintech. Trước đó, ông từng dự báo ngành ngân hàng sẽ đối mặt với "khoảnh khắc Uber" khi các đối thủ đầy sáng tạo liên tục làm chao đảo thị trường.
						Jenkins là người đặc biệt hứng thú với công nghệ. Trong thời gian làm việc tại Barclays, ông giám sát việc phát triển nhiều ý tưởng đột phá, như thanh toán bằng séc qua điện thoại di động
						</p><br clear="all" />
					<h3>Những sếp ngân hàng bỏ việc theo fintech</h3>
					<p><img src="images/banners/sample1.jpg" alt="" width="260" height="113" class="alignright" />
							Đầu tháng này, Jenkins đã thành lập một doanh nghiệp mới có tên 10X Future Technologies. Mục tiêu của họ là hiện đại hóa công nghệ đang được các ngân hàng sử dụng.
							Họ sẽ nghiên cứu một hệ thống ngân hàng cốt lõi dựa trên công nghệ điện toán đám mây. Hệ thống mới sẽ "giúp các ngân hàng tiếp cận và có cái nhìn sâu hơn về dữ liệu khách hàng, cho phép họ đưa ra các sản phẩm như cho vay thế chấp, thẻ tín dụng, vay vốn, tiết kiệm phù hợp hơn với nhu cầu của từng khách hàng".
							Hồi tháng 6, Jenkins cho biết ông kỳ vọng công ty này sẽ giúp mình tiến vào lĩnh vực fintech. Trước đó, ông từng dự báo ngành ngân hàng sẽ đối mặt với "khoảnh khắc Uber" khi các đối thủ đầy sáng tạo liên tục làm chao đảo thị trường.
							Jenkins là người đặc biệt hứng thú với công nghệ. Trong thời gian làm việc tại Barclays, ông giám sát việc phát triển nhiều ý tưởng đột phá, như thanh toán bằng séc qua điện thoại di động
						</p><br clear="all" />
				</article>
			</section>
		-->

		</section>

		<aside id="sub" class="gridWrapper">
			<section class="grid">
				<h3>Link</h3>
				<ul class="menu">
					<li><a href="https://www.google.com/?hl=ja&#038;gws_rd=ssl">Google</a></li>
					<li><a href="http://www.yahoo.co.jp/">Yahoo!JAPAN</a></li>
					<li><a href="http://www.amazon.co.jp/">Amazon</a></li>
					<li><a href="http://www.rakuten.co.jp/">Rakuten</a></li>
					<li><a href="http://www.yahoo.co.jp/">Yahoo!JAPAN</a></li>
				</ul>
			</section>
			<section class="grid">
				<h3>Bài viết mới</h3>
				<ul>
					<li><a href="/detail">Những sếp ngân hàng bỏ việc theo fintech</a></li>
					<li><a href="/detail">Cựu Giám đốc của Barclays - Rich Ricci</a></li>
					<li><a href="/detail">Những sếp ngân hàng bỏ việc theo fintech</a></li>
					<li><a href="/detail">Những sếp ngân hàng bỏ việc theo fintech</a></li>
					<li><a href="/detail">Những sếp ngân hàng bỏ việc theo fintech</a></li>
				</ul>
			</section>
			<section class="grid">
				<h3>Bài viết cũ</h3>
				<ul>
					<li><a href="/detail">2016/9</a></li>
					<li><a href="/detail">2016/8</a></li>
					<li><a href="/detail">2016/7</a></li>
					<li><a href="/detail">2016/6</a></li>
					<li><a href="/detail">2016/5</a></li>
				</ul>
			</section>
		</aside>
	</div>

	<footer id="footer">
		<div class="inner">
			<section class="gridWrapper">
				<article class="grid">
					<p class="logo"><a href="/bkk" title="ホームページサンプル株式会社" rel="home">YNU-Góc chia sẻ<br /><span>Make the change</span></a></p>
				</article>
				<article class="grid">
					<p class="tel"><span>Điện thoại:</span> <strong>080-3899-2908</strong></p>
					<p class="open">Email: ynu_benkyoukai@gmail.com</p>
				</article>
				<article class="grid copyright">
					Copyright(c) 2016 YNU-Benkyoukai All Rights Reserved. Design by Cuong Ceopro</a>
				</article>
			</section>
		</div>
	</footer>

</body>
</html>
