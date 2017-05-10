@extends('page_default')

@section('page_content')

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
						<?php
            //echo $post->content;
						?>

            <h4 style="text-align:center;"><b>Phần 1: Nước ta, học người học chưa tới</b></h4>
<p><i>“Ngày nay việc vạch nổi màu vàng dẫn đường được thiết kế tại hầu hết khắp các công trình công cộng như nhà ga, trường học, trung tâm mua sắm... là minh chứng sáng tỏ nhất cho sự hiệu quả mà vạch nổi màu vàng đem lại cho người khiếm thị tại Nhật. Ngược lại, ở Việt Nam vạch dẫn đường vẫn đang còn khá lạ lẫm với người dân. Tình trạng sử dụng hiện nay của vạch dẫn đường này ở Việt Nam còn tồn tại nhiều bất cập, thiết kế thiếu tính hợp lí, sai kĩ thuật...”</i></p>

<p><b>“Thiết kế toàn cầu” và “Xã hội không rào cản” </b></p>

<p>
Khái niệm “Thiết kế toàn cầu” (Universal Design) lần đầu được đưa đến công chúng bởi Selwyn Goldsmith, một nhà kiến trúc sư người Ireland với ý tưởng xây dựng cơ sở vật chất dành cho người khuyết tật. Ý tưởng này được các chính sách gia người Mỹ tiêu chuẩn hóa lên những quy tắc xã hội gọi tên là “American National Standard” năm 1961. Năm 2003, Trung Quốc, Hàn Quốc và Nhật Bản cũng áp dụng những quy chuẩn trên và cam kết cùng xây dựng một xã hội không rào cản (Barrier Free Society).
</p>
<p>
<!--                            <img src="./YNU-Góc chia sẻ_files/detail_1_1.jpg" alt="" width="340" height="113" class="alignright">-->
    <b>“Tenji Burokku” - Những viên gạch nổi</b>dẫn đường cho người khiếm thị được phân bố rộng rãi và là một trong những thành phần bắt buộc trong việc xây dựng cơ sở hạ tầng phục vụ người khuyết tật tại Nhật Bản. Tấm gạch nổi màu vàng đầu tiên trên thế giới được phát minh bởi ông Mitake Seichi vào năm 1965 và đến năm 1967 được lắp đặt thành vạch dẫn đường phục vụ cho người khiếm thị tại tỉnh Okayama, Nhật Bản.</p>
<p>
Gạch dẫn đường được chia làm hai loại chính gồm gạch sọc và gạch chấm bi. Loại gạch sọc có chức năng chỉ dẫn hướng đi thẳng về phía trước (ảnh trái). Bên cạnh đó  loại gạch chấm bi có chức năng cảnh báo nơi có nguy hiểm cần cẩn thận hay thông báo những điểm đường giao cắt hay trước cầu thang (ảnh phải). Nhờ có vạch dẫn đường mà người khiếm thị có thể an toàn tự mình đi bộ mà không cần sự giúp đỡ từ người khác, từ đó khả năng tham gia giao thông của họ cũng được cải thiện. Ngày nay việc vạch nổi màu vàng dẫn đường được thiết kế tại hầu hết khắp các công trình công cộng như nhà ga, trường học, trung tâm mua sắm... là minh chứng sáng tỏ nhất cho sự hiệu quả mà vạch nổi màu vàng đem lại cho người khiếm thị tại Nhật.
</p>
<p><b>Nước ta: đã thực sự suy nghĩ cho người khuyết tật? </b></p>
<p>
<!--                            <img src="./YNU-Góc chia sẻ_files/detail_1_1.jpg" alt="" width="340" height="113" class="alignright">-->
Tại Việt Nam vạch dẫn đường vẫn đang còn khá lạ lẫm với người dân và còn tồn tại nhiều bất cập. Có rất nhiều bài báo phản ánh về vấn đề thiết kế thiếu tính hợp lý, sai kĩ thuật cũng như tình trạng sử dụng hiện nay của vạch dẫn đường này ở Việt Nam.
</p>
<p>
Thứ nhất là việc thiết kế vị trí vạch dẫn đường không trùng khớp với làn qua đường dành cho người đi bộ. Tại những nơi qua đường, gạch dẫn đường không được thiết kế loại nổi chấm bi để thông báo cho người khuyết tật để dừng lại. Gạch sọc dẫn đường đi về phía trước thì những đường sọc bị xếp sai hướng (gạch sọc lại bị xếp ngang thay vì song song), không có chức năng chỉ hướng người khiếm thị. Chưa cần kể đến việc giao thông ở Việt Nam rất hỗn độn, người tham gia giao thông chưa thực sự nghiêm chỉnh chấp hành các quy dịnh. Nếu như cứ theo sự chỉ dẫn của vạch dẫn đường thì tính mạng người khiếm thị cũng đủ bị đe dọa.
</p>
<p>
<!--                            <img src="./YNU-Góc chia sẻ_files/detail_1_1.jpg" alt="" width="340" height="113" class="alignright">-->
Thứ hai, quá trình thiết kế vạch dẫn đường chưa có sự phối hợp nhất quán với các thiết kế đô thị khác. Đơn cử như vấn đề các cột đèn được lắp đặt ngay phía trên vạch dẫn đường, gây cản trở quá trình tham gia giao thông của người khiếm thị. Thiết nghĩ đơn vị thi công lắp đặt đèn có lẽ không hề biết đến ý nghĩa của vạch dẫn đường này là gì, do vậy mới lắp đặt cột đèn một cách cẩu thả như thế. Hoặc ngược lại, kế hoạch thiết kế vạch dẫn đường chưa được tính toán để đối ứng với các công trình công cộng đã có. Việc thiếu tầm nhìn trong quy hoạch đô thị dẫn đến tình trạng các công trình bị xây dựng chồng chất lên nhau, không những làm cho tính năng của các công trình bị giảm đi mà còn có khả năng gây ra nguy hiểm cho người sử dụng. Với quá trình đô thị hóa diễn ra với tốc độ nhanh chóng ở Việt Nam thì việc các công trình xây dựng được tu sửa hay thiết kế mới là điều tất yếu. Tuy nhiên điều đáng bàn ở đây là việc xây dựng những công trình mới cần nên cân nhắc đến những công trình đã có trước đó, tránh hậu quả các công trình gây cản trở lẫn nhau. Việc thiết kế cột đèn đường lên trên vạch dẫn đường là một thực tế trong số đó.
</p>
<p>
<!--                            <img src="./YNU-Góc chia sẻ_files/detail_1_1.jpg" alt="" width="340" height="113" class="alignright">-->
Thứ ba, không chỉ riêng các bộ phận quy hoạch đô thị, đại đa số người dân Việt Nam cũng chưa ý thức về sự tồn tại và ý nghĩa của những viên gạch nổi này. Tình trạng dễ nhận thấy hiện nay là các vỉa hè đều bị lấn chiếm bởi những hoạt động kinh doanh bán hàng hay trở thành bãi đậu xe máy tự phát. Những vỉa hè như thế này thì đối với người bình thường để đi lại còn khó khăn, huống hồ là những người khiếm thị. Việc lấn chiếm vỉa hè không những gây cản trở cho việc tham gia giao thông đường bộ mà còn làm giảm đi tính chất cộng đồng của các công trình công cộng. Việc kiếm lợi nhuận thì chỉ là việc của một cá nhân hay tổ chức nhỏ nhưng hậu quả mà nó gây ra thì lại ảnh hưởng đến cả xã hội.
</p>
<p>
Việc thiết kế vạch dẫn đường có ý nghĩa rất lớn đối với người khiếm thị cũng như thể hiện sự văn minh của xã hội. Tuy nhiên với thực trạng còn nhiều vấn đề khó giải quyết như ở Việt Nam thì vạch dẫn đường vẫn còn nhiều khiếm khuyết trong cả việc thiết kế lẫn sử dụng. Các nhà quy hoạch đô thị chưa thực sự đứng trên lập trường của người khuyết tật và suy nghĩ cho họ. Từ một nét đẹp của xã hội, những vạch dẫn đường này có thể hạ thấp hình ảnh của đất nước ta trong ánh mắt bạn bè quốc tế.
</p>




            <?php
            $count = $post->view_count;
            //echo $count;
            $count = $count + 1;
            DB::table('posts')->where('id', $post->id)->update(['view_count' => $count]);
            ?>

				</article>
			</section>
		</section>

	</div>

@stop
