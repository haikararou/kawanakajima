<?php
/**
 * フッターテンプレート
 */
?>
<?php if ( !is_front_page() || !is_home() || !is_page('top')) : ?></div><?php endif; ?>

<?php if ( is_singular('tour') | is_singular('walk') ): ?>
<?php get_template_part('inc/events'); ?>
<?php endif; ?>

</main>

<footer class="l-footer">
	<div class="l-footer__inner">
		<nav class="l-footer__nav">
			<ul>
				<li><a href="<?php echo home_url('/#battles'); ?>">戦いを知る</a></li>
				<li><a href="<?php echo home_url('/tour'); ?>">史跡をめぐる</a></li>
				<li><a href="<?php echo home_url('/digital'); ?>">デジタル博物館</a></li>
				<li><a href="<?php echo home_url('/events'); ?>">イベント情報</a></li>
				<!--li><a href="<?php echo home_url('/tourism'); ?>">周辺観光情報</a></li-->
			</ul>
		</nav>
		<div class="l-footer__logo"><a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo.svg" alt="<?php bloginfo('name'); ?>"></a></div>
		<div class="l-footer__nagano"><a href="https://www.city.nagano.nagano.jp/" target="_blank" rel="nofllow"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/naganocity.svg"><span>長野市</span></a></div>
		<address>長野市（法人番号3000020202011）<br>〒380-8512　長野市大字鶴賀緑町1613番地電話（代表）026-226-4911<br>業務時間 午前8時30分から午後5時15分まで<br>休日 土曜日、日曜日、祝休日、年末年始（12月29日から1月3日）</address>
		<nav class="l-footer__naganonav">
			<ul>
				<li><a href="<?php echo home_url('/privacypolicy'); ?>">プライバシーポリシー・サイトポリシー</a></li>
				<li><a href="<?php echo home_url('/disclaimer'); ?>">免責事項</a></li>
				<li><a href="<?php echo home_url('/copyright'); ?>">著作権等</a></li>
				<li><a href="<?php echo home_url('/website'); ?>">このサイトについて</a></li>
			</ul>
		</nav>
		<small>Copyright &copy; Nagano City. All Rights Reserved.</small>
	</div>
</footer>

<nav class="l-footer__chat">
	<a target="_blank" rel="nofllow" href="https://ksm01l210101.japaneast.cloudapp.azure.com/wise/webchat/default/?t=OJsqP9tnVpn9ki353J1kgw%3D%3D"><span>AI<br>チャット<br>ボット</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/chatbot.png"></a>
</nav>

<?php wp_footer(); ?>

</body>
</html>
