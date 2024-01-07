<?php $class= isset($args['class']) ? $args['class'] : ''; ?>
<ul class="c-info-menu <?php echo $class; ?>">
  <?php if($class == '-head-drawer') { ?>
  <li class="c-info-menu__item"><a href="<?php echo home_url('/event'); ?>" class="c-info-menu__button <?php echo $class; ?>"><i class="icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icon-star.svg"></i>イベント情報</a></li>
  <li class="c-info-menu__item"><a href="<?php echo home_url('/info'); ?>" class="c-info-menu__button <?php echo $class; ?>"><i class="icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icon-info.svg"></i>お知らせ</a></li>
  <?php } ?>
  <li class="c-info-menu__item"><a href="<?php echo home_url('/access'); ?>" class="c-info-menu__button <?php echo $class; ?>"><i class="icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icon-access.svg"></i>アクセス</a></li>
  <li class="c-info-menu__item"><a href="<?php echo home_url('/parking'); ?>" class="c-info-menu__button <?php echo $class; ?>"><i class="icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icon-parking.svg"></i>駐車場のご案内</a></li>
  <li class="c-info-menu__item -info"><a href="<?php echo home_url('/guide'); ?>" class="c-info-menu__button <?php echo $class; ?>"><i class="icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icon-user.svg"></i>ご利用案内</a></li>
  <li class="c-info-menu__item -info"><a href="<?php echo home_url('/opening'); ?>" class="c-info-menu__button <?php echo $class; ?>"><i class="icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icon-clock.svg"></i>営業時間一覧</a></li>
</ul>