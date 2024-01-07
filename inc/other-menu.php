<?php $class= isset($args['class']) ? $args['class'] : ''; ?>
<ul class="c-other-menu <?php echo $class; ?>">
  <li class="c-other-menu__item"><a href="<?php echo home_url('/pet'); ?>">ペットをお連れの皆様へ</a></li>
  <li class="c-other-menu__item"><a href=""<?php echo home_url('/photograph'); ?>>撮影をされる皆様へ</a></li>
  <li class="c-other-menu__item"><a href="<?php echo home_url('/bus'); ?>">団体バスでお越しのお客様へ</a></li>
  <li class="c-other-menu__item"><a href="<?php echo home_url('/recruit'); ?>">採用情報</a></li>
  <li class="c-other-menu__item"><a href="<?php echo home_url('/contact'); ?>">お問い合わせ</a></li>
  <li class="c-other-menu__item"><a href="<?php echo home_url('/privacy'); ?>">プライバシーポリシー</a></li>
</ul>