<?php
/*Template Name: 404 */
?>
<?php get_header(); ?>

<div class="c-herohead">
	<h1 class="c-herohead__heading">ページが見つかりませんでした</h1>
</div>

<section class="p-threed-d__lst">
	<p>まことに申し訳ありませんが、指定されたURLのページは存在しません。<br>
	サイト更新などによってURLが変更になったか、URLが正しく入力されていない可能性があります。<br>
	恐れ入りますが、ナビゲーションのリンクからご希望のページをお探しください。</p>
	<p><a class="c-anchor__btn" href="<?php echo home_url(); ?>"><span>ホームへ戻る</span></a></p>
</section>

<?php get_footer(); ?>