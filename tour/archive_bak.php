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

<section id="order" class="c-section p-tour__order">
	<h2 class="c-heading__l">五十音別史跡一覧</h2>

<?php
// 行ごとに投稿を区切るための行リスト
$rows2 = array(
    array('あ', 'か', 'さ','た', 'な', 'は','ま', 'や', 'ら','わ')
);
foreach ($rows2 as $row) :
	$count=1;
    echo "<ul class='c-tab__list'>"; // 行ごとのコンテナ開始
    foreach ($row as $section) :
        $args = array(
            'post_type' => 'tour',
            'posts_per_page' => -1,
            'meta_key' => 'tour_name_kana', // ふりがなのカスタムフィールドを指定
            'orderby' => 'meta_value', // メタデータの値でソート
            'order' => 'ASC', // 昇順でソート
            'meta_query' => array(
                array(
                    'key' => 'tour_name_kana',
                    'value' => $section . '*', // 特定の行の文字で始まるものを取得するためのワイルドカード
                    'compare' => 'RLIKE' // 正規表現を使用した比較
                ),
            ),
        );
        $posts_query = new WP_Query($args);
        if ($posts_query->have_posts()) :
            //echo "<ul class='tab-container'>"; // セクションごとのコンテナ開始
            echo "<li><a href='' class='tab_";
			echo $count;
			if($count==1) {
				echo " active";
			}
			echo "'>$section 行</a></li>"; // セクションの見出しを表示
            //echo "</ul>"; // セクションごとのコンテナ終了
            wp_reset_postdata();
        endif;
	$count++;
    endforeach;
    echo "</ul>"; // 行ごとのコンテナ終了
endforeach;
?>

<div class="c-tab__content">

<?php
// 行ごとに投稿を区切るための行リスト
$rows = array(
    array('あ', 'い', 'う', 'え', 'お'),
    array('か', 'き', 'く', 'け', 'こ'),
    array('さ', 'し', 'す', 'せ', 'そ'),
	array('た', 'ち', 'つ', 'て', 'と'),
	array('な', 'に', 'ぬ', 'ね', 'の'),
	array('は', 'ひ', 'ふ', 'へ', 'ほ'),
	array('ま', 'み', 'む', 'め', 'も'),
	array('や', 'ゆ', 'よ'),
	array('ら', 'り', 'る', 'れ', 'ろ'),
	array('わ', 'を', 'ん'),
);
$count=1;
foreach ($rows as $row) :
    echo "<div class='tab_";
	echo $count;
		if($count==1) {
			echo " active";
		}
	echo "'><dl class='c-tab__vowels'>"; // 行ごとのコンテナ開始
    foreach ($row as $section) :
        echo "<div class='c-tab__vowel'>"; // セクションごとのコンテナ開始
        echo "<dt>$section</dt>"; // セクションの見出しを表示

        $args = array(
            'post_type' => 'tour',
            'posts_per_page' => -1,
            'meta_key' => 'tour_name_kana', // ふりがなのカスタムフィールドを指定
            'orderby' => 'meta_value', // メタデータの値でソート
            'order' => 'ASC', // 昇順でソート
            'meta_query' => array(
                array(
                    'key' => 'tour_name_kana',
                    'value' => '^' . $section, // 特定の行の文字で始まるものを取得する正規表現
                    'compare' => 'REGEXP' // 正規表現を使用した比較
                ),
            ),
        );

        $posts_query = new WP_Query($args);

        if ($posts_query->have_posts()) :
            echo "<dd><ul>";
            while ($posts_query->have_posts()) : $posts_query->the_post();
                // 投稿のタイトルをリストアイテムとして表示
                ?>
                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                <?php
            endwhile;
            echo "</ul></dd>";
            wp_reset_postdata();
        else :
            // 投稿が見つからなかった場合の表示
            echo '投稿がありません。';
        endif;

        echo "</div>"; // セクションごとのコンテナ終了
    endforeach;
    echo "</dl></div>"; // 行ごとのコンテナ終了
	$count++;
endforeach;
?>

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