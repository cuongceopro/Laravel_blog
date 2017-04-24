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
							<li class="current-menu-item"><a href="/detail"><strong>YNU Benkyoukai</strong><br /><span>About us</span></a>
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
				<h3 class="heading">{{ $post->category->name }}</h3>
				<article class="post">
					<!--<p class="dateLabel">2016/11/20</p>-->





					<?php
						//$overview = DB::table('data')->first();
						//echo '<h3>'.$overview->title.'</h3>';
						//echo '<h4>'.$overview->text.'</h4>'
						?>

            <h3>{{ $post->title }}
            	<!--<small>投稿日：{{ date("Y年 m月 d日",strtotime($post->created_at)) }}</small>-->
              <p class="dateLabel">{{ date("Y/m/d",strtotime($post->created_at)) }}</p>
            </h3>
            <!--<p>カテゴリー：{{ $post->category->name }}</p>-->
            <!--<h4>{{ $post->content }}</h4>-->

						<p><img src="{{{asset('images/detail/detail_1_1.jpg')}}}" alt="" width="340" height="113" class="alignright" />
						Ở Nhật, tuổi 20 được xem là cột mốc của sự trưởng thành. Lễ Thành Nhân (成人式) hằng năm vào thứ 2 tuần thứ 2 của tháng
						 Giêng được tổ chức long trọng như một dịp nhìn nhận bản thân đã trở thành người lớn. Đạt đến ngưỡng 20, bạn bắt đầu có
						thể uống rượu, hút thuốc, tự làm chủ các giấy tờ cá nhân hay mua hàng đắt tiền như điện thoại mà không cần đến sự bảo
						lãnh của "người lớn" ( kỳ lạ ở chỗ dù 16, 18 tuổi chưa được công nhận là người lớn nhưng quyền kết hôn đã được hợp pháp hoá).
					</p>
					<p>
						Thế nhưng tiêu chuẩn của sự trưởng thành là như thế nào? Tôi đã từng ngộ nhận rằng mình đã trưởng thành từ sớm, khi thu thập
						được ít chút vốn liếng kinh nghiệm trong suốt 3 năm cấp 3 đầy lăn xả. Tôi tham gia vào bất kỳ hoạt động nào có thể, tập tành
						kiếm tiền bằng nhiều cách thức khác nhau. Tôi có cơ may trò chuyện với nhiều tuýp người đến từ nhiều tầng lớp khác nhau trong
						xã hội và thấy mình vô cùng hạnh phúc với những trải nghiệm tôi thu được. Chà!! Ấy vậy là trưởng thành! Tôi nghĩ.
					</p>
					<p>
						18 tuổi quyết định xa nhà, thử sức mình với một chân trời mới, khao khát những trải nghiệm mới, được tự do quyết định tương lai,
						tự độc lập tài chính, tiếp tục lối sống "tự biên tự diễn"... Tôi vỗ ngực với chút tự hào: Ấy vậy là trưởng thành!
					</p>
					<p>
						Nhưng tôi đã nhầm! Khi được sempai (tiền bối những anh chị đi trước), những người bạn và người Nhật ở đây dạy cho mình chữ "omoiyari"
						(tạm dịch là tấm lòng luôn hướng về người khác. Thật sự là tôi không tìm được một từ vựng nào để giải thích sát nghĩa từ này) khi ấy
						tôi mới nhận thức rõ ràng hơn bản thân, nhìn thấy những điểm yếu, sự non nớt thiếu chính chắn của mình. Con đường đến sự trưởng thành
						của tôi xem ra còn dài dài lắm.
					</p>
					<p>
						Nói "omoiyari" tưởng chừng là những hành động cao thượng và đậm chất đạo lý, song nó lại được thể hiện rất giản dị qua đời sống hằng
						ngày từ những hành động vô cùng nhỏ. Tôi ấn tượng trước bài phát biểu của sempai về việc gọt táo của người nhật. Rằng họ gọt với tư
						thế quay lưỡi dao về phía mình (ngược hướng với Việt Nam mình) với mục đích tránh rủi ro gây tổn thương cho đối phương. Chịu khó quan
						sát một chút tôi tìm thấy những hành động tương tự từ nhiều việc khác nữa. Ví dụ như khi có đồ thuỷ tinh vỡ, những mảnh vỡ gom lại được
						được gói cẩn thận trong một tờ giấy báo, bọc ngoài một túi bóng trong suốt và kém theo một tờ giấy to trên đó có ghi "Đồ nguy hiểm xin cẩn thận".
						Hay chuyện những thang cuốn ở nhà ga. Hoặc trái hoặc phải, tất cả mọi người đều thống nhất đứng nép về một phía. Làm thế, nếu có  ai đó đang vội vã,
						họ có thể chạy một mạch để bắt kịp chuyến tàu. Người đi bộ và xe đạp chờ đèn đỏ ở ngã tư cũng vậy, họ luôn chọn một vị trí "an toàn nhất" để không trở
						thành vật cản đường cho bất kỳ ai. Họ vẫn đang tiến về phía trước song lại luôn quan sát xung quanh để biết chắc rằng mình không gây trở ngại cho ai khác.
						 Chữ "tôi" cần được học cách đứng sau chữ "mọi người".
					 </p>
					 <p>
						Tôi từng nghĩ thước đo của sự trưởng thành là trải nghiệm. Bây giờ tôi vẫn không phủ nhận nó, song trải nghiệm không là chưa đủ. Tự lo cho bản thân
						hay khôn ngoan tiến bước mà quên đi sự tồn tại của mọi người(những người xung quanh hoặc xã hội xung quanh) thì mãi mãi cũng chỉ được đánh giá là một đứa trẻ.
						Có người đã dạy tôi bài học này. Có một Chút cay đắng nhưng là một bài học tôi sẽ không bao giờ quên. Bài học gì???  “ dẫn bài học hoặc câu nói”
					</p>
					<p>
						"Omoiyari" hiểu nó là một chuyện, nhận thức được nó là một chuyện, nhưng để thực hiện nó lại là một vấn đề khác. Tôi sẽ học cách trưởng thành, hay ít nhất là
						để trả lại quá nhiều "omoiyari" tôi nhận được từ mọi người.
					</p>
					<p>
						Tôi nhận ra rằng, trưởng thành không có một điểm dừng nhất định cho mỗi con người. Vì mỗi cá nhân sẽ trưởng thành trên những khác nhau những thời điểm khác nhau.
						 Tôi nghĩ vấn đề lớn của người trẻ, là ý thức rằng trưởng thành sẽ không có điểm dừng, để luôn bổ sung những thiếu sót của bản thân và cải thiện chính mình.
						  “ Trưởng thành là không chết ở tuổi 20….”
						</p>




				</article>
			</section>
			<div class="pagenav">
				<span class="prev"><a href="/detail" rel="prev">&laquo; Trang trước</a></span>
				<span class="next"><a href="/detail" rel="next">Trang sau &raquo;</a></span>
			</div>
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
