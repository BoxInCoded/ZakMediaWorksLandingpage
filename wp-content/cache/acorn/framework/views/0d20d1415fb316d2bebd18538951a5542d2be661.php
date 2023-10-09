<!-- Header Section Begin -->
<header class="header <?php echo e(is_admin_bar_showing() ? 'adminBar' : ''); ?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <div class="header__logo">
                    <?php if(isset($siteLogo)): ?>
                        <a class="brand" href="<?php echo e(home_url('/')); ?>">
                            <?php echo wp_get_attachment_image($siteLogo); ?>

                        </a>
                    <?php else: ?>
                        <a class="brand" href="<?php echo e(home_url('/')); ?>">
                            <?php echo $siteName; ?>

                        </a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="header__nav__option">
                    <?php if(has_nav_menu('primary_navigation')): ?>
                        <nav class="header__nav__menu mobile-menu"
                            aria-label="<?php echo e(wp_get_nav_menu_name('primary_navigation')); ?>">
                            <?php echo wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]); ?>

                        </nav>
                    <?php endif; ?>
                    <div class="header__nav__social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
</header>
<!-- Header End -->
<?php /**PATH /shared/httpd/zakmediaworks/zakmediaworks/wp-content/themes/videography/resources/views/sections/header.blade.php ENDPATH**/ ?>