<?php get_header(); ?>

<div class="c-herohead">
	<h1 class="c-herohead__heading"><?php echo esc_html(get_post_type_object(get_post_type())->label); ?></h1>
	<nav class="c-nav__anchor">
		<ul class="">
			<li><a href="#order">史跡一覧</a></li>
			<li><a href="#map">地図で見る</a></li>
			<li><a href="#walk">歩いてめぐる</a></li>
		</ul>
	</nav>
</div>

<?php
// tour_name_kana

	$jp_a = "あ";
	$jp_i = "い";
	$jp_u = "う";
	$jp_e = "え";
	$jp_o = "お";
	$jp_ka = "かが";
	$jp_ki = "きぎ";
	$jp_ku = "くぐ";
	$jp_ke = "けげ";
	$jp_ko = "こご";
	$jp_sa = "さざ";
	$jp_si = "しじじゃじゅじょ";
	$jp_su = "すず";
	$jp_se = "せぜ";
	$jp_so = "そぞ";
	$jp_ta = "ただ";
	$jp_ti = "ちぢ";
	$jp_tu = "つづ";
	$jp_te = "てで";
	$jp_to = "とど";
	$jp_na = "な";
	$jp_ni = "に";
	$jp_nu = "ぬ";
	$jp_ne = "ね";
	$jp_no = "の";
	$jp_ha = "はばぱ";
	$jp_hi = "ひびぴびゅ";
	$jp_hu = "ふぶぷ";
	$jp_he = "へべぺ";
	$jp_ho = "ほぼぽ";
	$jp_ma = "ま";
	$jp_mi = "み";
	$jp_mu = "む";
	$jp_me = "め";
	$jp_mo = "も";
	$jp_ya = "や";
	$jp_yu = "ゆ";
	$jp_yo = "よ";
	$jp_ra = "ら";
	$jp_ri = "り";
	$jp_ru = "る";
	$jp_re = "れ";
	$jp_ro = "ろ";
	$jp_wa = "わ";
	$jp_wo = "を";
	$jp_nn = "ん";
	$mojilist2 = array($jp_a,$jp_i,$jp_u,$jp_e,$jp_o,$jp_ka,$jp_ki,$jp_ku,$jp_ke,$jp_ko,$jp_sa,$jp_si,$jp_su,$jp_se,$jp_so,$jp_na,$jp_ni,$jp_nu,$jp_ne,$jp_no,$jp_ha,$jp_hi,$jp_hu,$jp_he,$jp_ho,$jp_ma,$jp_mi,$jp_mu,$jp_me,$jp_mo,$jp_ya,$jp_yu,$jp_yo,$jp_ra,$jp_ri,$jp_ru,$jp_re,$jp_ro,$jp_wa,$jp_wo,$jp_nn);
	$mojilabel2 = array("あ","い","う","え","お","か","き","く","け","こ","さ","し","す","せ","そ","た","ち","つ","て","と","な","に","ぬ","ね","の","は","ひ","ふ","へ","ほ","ま","み","む","め","も","や","ゆ","よ","ら","り","る","れ","ろ","わ","を","ん");


?>

（まだ静的）
<section id="order" class="c-section p-tour__order">
	<h2 class="c-heading__l">五十音別史跡一覧</h2>
	<!-- タブ切り替え -->
	<div class="c-tab">
		<ul class="c-tab__list">
			<li><a href="" class="active">あ行</a></li>
			<li><a href="">か行</a></li>
			<li><a href="">さ行</a></li>
			<li><a href="">た行</a></li>
			<li><a href="">な行</a></li>
			<li><a href="">は行</a></li>
			<li><a href="">ま行</a></li>
			<li><a href="">や行</a></li>
			<li><a href="">ら行</a></li>
			<li><a href="">わ行</a></li>
		</ul>
		<div class="c-tab__content">
			<!--あ行-->
			<div class="active">
				<dl class="c-tab__vowels">
					<div class="c-tab__vowel">
						<dt>あ</dt>
						<dd><ul>
							<li><a href="./post.html">青木神社</a></li>
							<li><a href="./post.html">青柳城跡</a></li>
							<li><a href="./post.html">青柳城跡</a></li>
							<li><a href="./post.html">赤川の歌碑</a></li>
							<li><a href="./post.html">赤旭山城跡</a></li>
							<li><a href="./post.html">尼巌城跡</a></li>
							<li><a href="./post.html">雨宮刑部正利の墓</a></li>
							<li><a href="./post.html">雨宮の渡し</a></li>
							<li><a href="./post.html">荒砥城跡〈城山史跡公園〉</a></li>
							<li><a href="./post.html">安養寺</a></li>
						</ul></dd>
					</div>
					<div class="c-tab__vowel">
						<dt>い</dt>
						<dd><ul>
							<li><a href="./post.html">飯縄大明神（飯縄権現、飯縄山、飯綱山）</a></li>
							<li><a href="./post.html">飯縄山里宮（皇足穂命神社）</a></li>
							<li><a href="./post.html">飯山城跡</a></li>
							<li><a href="./post.html">生島足島神社</a></li>
							<li><a href="./post.html">板垣信方（板垣駿河守信方）の墓</a></li>
							<li><a href="./post.html">市村の渡し</a></li>
							<li><a href="./post.html">一杯清水（霊山寺）</a></li>
							<li><a href="./post.html">戌ヶ瀬（狗ヶ瀬）</a></li>
						</ul></dd>
					</div>
					<div class="c-tab__vowel">
						<dt>う</dt>
						<dd><ul>
							<li><a href="./post.html">上田原古戦場</a></li>
						</ul></dd>
					</div>
					<div class="c-tab__vowel">
						<dt>お</dt>
						<dd><ul>
							<li><a href="./post.html">大岡城跡</a></li>
							<li><a href="./post.html">大倉城跡</a></li>
							<li><a href="./post.html">大里山風雲庵</a></li>
							<li><a href="./post.html">大堀館跡</a></li>
							<li><a href="./post.html">小田切駿河守の墓（円光寺）</a></li>
							<li><a href="./post.html">大日方佐渡守直長の墓（晶龍寺）</a></li>
						</ul></dd>
					</div>
				</dl>
			</div>
			<!--か行-->
			<div>
				<p>か行の内容が入ります</p>
			</div>
			<!--さ行-->
			<div>
				<p>さ行の内容が入ります</p>
			</div>
			<!--た行-->
			<div>
				<p>た行の内容が入ります</p>
			</div>
			<!--な行-->
			<div>
				<p>な行の内容が入ります</p>
			</div>
			<!--は行-->
			<div>
				<p>は行の内容が入ります</p>
			</div>
			<!--ま行-->
			<div>
				<p>ま行の内容が入ります</p>
			</div>
			<!--や行-->
			<div>
				<p>や行-の内容が入ります</p>
			</div>
			<!--ら行-->
			<div>
				<p>ら行の内容が入ります</p>
			</div>
			<!--わ行-->
			<div>
				<p>わ行の内容が入ります</p>
			</div>
		</div>
	</div>
</section>

<?php
$tax_name = 'tour_cat';
$terms = get_terms( $tax_name, array('parent' => 0));
?>
<section class="c-section80 p-tour__categories">
	<h2 class="c-heading__m">カテゴリーから探す</h2>
	<ul class="c-anchor__list">
<?php foreach($terms as $term): ?>
<?php if($term->parent == 0): ?>
		<li><a href="<?php echo get_term_link($term->slug, $tax_name) ?>"><?php echo $term->name ?></a></li>
<?php endif; ?>
<?php endforeach; ?>
	</ul>
</section>

<section class="c-section p-tour__pickup">
	<h3 class="c-heading__m">主な史跡</h3>
	<ul class="c-thumb04">
<?php if(have_posts()): while (have_posts()) : the_post(); ?>
		<li><a href="<?php the_permalink(); ?>"><figure><?php if (has_post_thumbnail()) : ?><?php the_post_thumbnail('full'); ?><?php else: ?><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/noimage.png" alt="該当画像はありません"><?php endif; ?>
			<figcaption>
				<h4 class="c-heading__ss"><?php the_title(); ?></h4>
				<?php if(get_field('tour_lead')): ?><p><?php the_field('tour_lead'); ?></p><?php endif; ?>
			</figcaption>
		</figure></a></li>
<?php endwhile; endif; ?>
	</ul>
</section>

（まだ静的）
<section id="map" class="c-section p-tour__map">
	<h2 class="c-heading__l">地図で見る</h2>
	<div class="">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/tour/map.jpg">
	</div>
</section>

（まだ静的）
<section id="walk" class="c-section">
	<h2 class="c-heading__l">歩いてめぐる</h2>
	<ul class="c-lst">
		<li><a href="#"><span class="km"><em>3.1</em>km</span><figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/tour/dummy13.jpg">
			<figcaption>
				<h4 class="c-heading__m">川中島古戦場周辺周遊コース</h4>
				<p>川中島古戦場から始まり、長野市立博物館や典厩寺、赤川の碑など川中島の戦いにまつわる史跡をめぐるコースです。</p>
			</figcaption>
		</figure><span class="c-anchor__detail">詳しく見る</span></a></li>
		<li><a href="#"><span class="km"><em>4.6</em>km</span><figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/tour/dummy14.jpg">
			<figcaption>
				<h4 class="c-heading__m">川中島古戦場周辺周遊コース</h4>
				<p>川中島古戦場から始まり、長野市立博物館や典厩寺、赤川の碑など川中島の戦いにまつわる史跡をめぐるコースです。</p>
			</figcaption>
		</figure><span class="c-anchor__detail">詳しく見る</span></a></li>
	</ul>
</section>


<?php get_footer(); ?>