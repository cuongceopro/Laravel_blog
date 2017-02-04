<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
// use App\Comment;
// include App\Post.php;

class PostCommentSeeder extends Seeder{

public function run(){
	$content = 'この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。';

	$commentdammy = 'コメントダミーです。ダミーコメントだよ。';

	for( $i = 1 ; $i <= 10 ; $i++) {
		$post = new App\Post;
		$post->title = "$i 番目の投稿";
		$post->content = $content;
		$post->cat_id = 1;
    //
    $post->comment_count = 0;
    //
		$post->save();

		$maxComments = mt_rand(3, 15);
		  for ($j=0; $j <= $maxComments; $j++) {
			  $comment = new App\Comment;
			 $comment->commenter = '名無しさん';
			 $comment->comment = $commentdammy;

			 // モデル(Post.php)のCommentsメソッドを読み込み、post_idにデータを保存する
			 $post->comments()->save($comment);
		   $post->increment('comment_count');
		  }
	}

	// カテゴリーを追加する
	$cat1 = new App\Category;
	$cat1->name = "電化製品";
	$cat1->save();

	$cat2 = new App\Category;
	$cat2->name = "食品";
	$cat2->save();

}
}
