<?php
/**
 * フッターテンプレート
 */
?>
	</div>
</main>

<footer class="l-footer">
	<div class="l-footer__inner">
		<nav class="l-footer__nav">
			<ul>
				<li><a href="./battles">戦いを知る</a></li>
				<li><a href="./three-d">史跡をめぐる</a></li>
				<li><a href="./digital">デジタル博物館</a></li>
				<li><a href="./events">イベント情報</a></li>
				<!--li><a href="./tourism">周辺観光情報</a></li-->
			</ul>
		</nav>
		<div class="l-footer__logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo.svg" alt="<?php bloginfo('name'); ?>"></a></div>
		<div class="l-footer__nagano"><a href="https://www.city.nagano.nagano.jp/" target="_blank" rel="nofllow"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/naganocity.svg"><span>長野市</span></a></div>
		<address>長野市（法人番号3000020202011）<br>〒380-8512　長野市大字鶴賀緑町1613番地電話（代表）026-226-4911<br>業務時間 午前8時30分から午後5時15分まで<br>休日 土曜日、日曜日、祝休日、年末年始（12月29日から1月3日）</address>
		<nav class="l-footer__naganonav">
			<ul>
				<li><a href="https://www.city.nagano.nagano.jp/n042000/contents/p004764.html" target="_blank" rel="nofllow">個人情報の保護</a></li>
				<li><a href="https://www.city.nagano.nagano.jp/n042000/contents/p004765.html" target="_blank" rel="nofllow">免責事項</a></li>
				<li><a href="https://www.city.nagano.nagano.jp/site_policy.html" target="_blank" rel="nofllow">著作権等</a></li>
				<li><a href="<?php echo home_url('/website'); ?>">このサイトについて</a></li>
			</ul>
		</nav>
		<small>Copyright &copy; Nagano City. All Rights Reserved.</small>
	</div>
</footer>

<nav class="l-footer__chat">
	<a href="#"><span>AI<br>チャット<br>ボット</span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/chatbot.png"></a>
</nav>

<?php wp_footer(); ?>

</body>
</html>
