<?php
/*Template Name: 個人情報の保護 */
?>
<?php get_header(); ?>

<div class="c-herohead">
	<h1 class="c-herohead__heading"><?php the_title(); ?></h1>
</div>

<section class="c-section">
	<h2 class="c-heading__m">プライバシーポリシー</h2>
	<p>川中島の戦い総合サイト（以下「本サイト」という。）では、個人情報の収集・管理・利用・提供について、個人情報保護に関する法律に基づき、適正に取り扱い、安心して本サイトをご利用いただけるよう努めてまいります。</p>

	<h3 class="c-heading__s">個人情報について</h3>
	<p>個人情報とは、個人に関する情報であって、当該情報に含まれる氏名、生年月日その他の記述等により特定の個人を識別することができるもの（他の情報と照合することにより、特定の個人を識別することができることとなるものを含む。）をいいます。</p>

	<h3 class="c-heading__s">個人情報の収集について</h3>
	<p>個人情報を収集するときは、保有目的を明らかにし、目的に必要な範囲内で、適法・公正な手段で収集します。また、個人情報を収集するときは、原則として本人から収集します。</p>

	<h3 class="c-heading__s">個人情報の管理について</h3>
	<p>本事業が保有している個人情報は、正確で最新のものとします。また、改ざん、滅失、漏えいを防止するなど必要な措置を講じ、適正に管理します。なお、保有する必要がなくなった個人情報は、速やかに廃棄または消去します。</p>

	<h3 class="c-heading__s">個人情報の利用・提供の制限について</h3>
	<p>法令等の定めにより提供する場合や、本人の同意を得た場合など、一定の場合を除いて、個人情報の目的外利用や外部への提供は行いません。</p>

	<h3 class="c-heading__s">お問い合わせ先</h3>
	<p>長野市観光振興課<br>長野市大字鶴賀緑町1613番地<br>電話番号：026-224-8316<br>ファックス番号：026-224-5043</p>
</section>

<section class="c-section">
	<h2 class="c-heading__m">サイトポリシー</h2>
	<h3 class="c-heading__s">免責事項</h3>
	<ul class="c-section__ul">
		<li>リンク・著作権、アクセシビリティ、個人情報保護等は、本サイトのみに適用されます。</li>
		<li>本サイトで公開する情報は、正確を期して提供しておりますが、誤植や不完全な記述が含まれる場合があります。</li>
		<li>長野市は、利用者が本サイトによって被った損害、損失に対して、いかなる場合でも一切の責任を負いません。</li>
		<li>サイトのアドレスや内容を予告なく変更する場合があります。</li>
		<li>長野市以外の自治体、団体、施設等のホームページへリンクを設定している場合があります。リンク先の団体、施設及びページの内容について、長野市はいかなる場合でも一切の責任を負いませんのでご了承ください。</li>
		<li>本サイトへのリンクが設置された第三者のホームページに対して、長野市はいかなる関与もしていません。また、リンクにより発生した問題・損害に対して、市はいかなる責任も負いません。</li>
	</ul>

	<h3 class="c-heading__s">リンクについてて</h3>
	<ul class="c-section__ul">
		<li>本サイトへのリンクは原則として自由です。</li>
		<li>リンクの設置する場所には、本事業のサイトであることを明記して下さい。</li>
		<li>本サイトの内容及びアドレスは、予告なく変更・削除することがあります。</li>
		<li>本サイトへのリンクにより発生した問題・損害については、市はいかなる責任も負いません。</li>
	</ul>

	<h3 class="c-heading__s">著作権について</h3>
	<ul class="c-section__ul">
		<li>本サイトに掲載している内容（文章、写真、図、イラスト等）に関する著作権は、原則として長野市に帰属します。また、一部の画像等の著作権は、長野市以外の原著作者が所有しています。</li>
		<li>本サイトの内容について、「私的使用のための複製」や「引用」など著作権法上認められた場合を除き、無断で複製・転用することはできません。使用許諾は、長野市観光振興課へ事前にご相談ください。</li>
		<li>本サイトに記載された会社名・商標について
			<ul class="list_arw">
				<li>Apple、Appleロゴ、iPhone、iPad、Mac OS、Safariは米国および他の国で登録されたApple Inc.の商標です。iPhoneの商標は、アイホン株式会社のライセンスにもとづき使用されています。</li>
				<li>Android、Androidロゴ、 Google、Google Play、Google Playロゴ、Google Chrome、YouTube、YouTubeロゴはGoogle LLCの商標または登録商標です。</li>
				<li>Adobe Readerは、Adobe社の登録商標です。</li>
				<li>QRコードは、株式会社デンソーウェーブの登録商標です。</li>
			</ul>
		</li>
	</ul>
</section>

<?php get_footer(); ?>

<style>
.list_dot {
	padding: 0 0 0 1.2rem;
	margin: 0 0 2rem;
}
.list_dot li {
	list-style-type: disc;
	line-height:1.5
}
.list_dot li + li {
	margin-top:.8rem;
}
.c-section__ul .list_arw {
	padding: 0 0 0 1.2rem;
	margin: .5rem;
	display: block;
}
.c-section__ul .list_arw li {
	list-style-type: none;
	line-height:1.8;
	position: relative;
	margin-bottom: 1em;
	padding: 0;
}
.c-section__ul .list_arw li::before {
    content: "";
    width: 0.4em;
    height: 0.4em;
    display: block;
    position: absolute;
    left: -1.2em;
    top: .8rem;
    -webkit-transform: rotate(45deg);
    transform: rotate(45deg);
    border-top: 1px solid #2A3451;
    border-right: 1px solid #2A3451;
}

</style>