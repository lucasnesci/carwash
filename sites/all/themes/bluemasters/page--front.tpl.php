<div id="page">

    <!--header-top-->
    <div id="header-top">
        <div id="header-top-inside" class="clearfix container_12">

            <div class="grid_7">
                <!--header-top-inside-left-->
                <div id="header-top-inside-left"><?php print render($page['header']); ?></div>
                <!--EOF:header-top-inside-left-->
            </div>

            <div class="grid_2">
                <!--header-top-inside-left-feed-->
                <div id="header-top-inside-left-feed">
                </div>
                <!--EOF:header-top-inside-left-feed-->
            </div>

            <div class="grid_3">
                <!--header-top-inside-left-right-->
                <div id="header-top-inside-right"><?php print render($page['search_area']);?></div>
                <!--EOF:header-top-inside-left-right-->
            </div>

        </div>
    </div>
    <!--EOF:header-top-->

    <div id="wrapper">

        <!--header-->
        <div id="header" class="clearfix container_12">

            <div class="grid_5">
                <!--logo-floater-->
                <div id="logo-floater">
        			<?php if ($logo): ?>
                    <a href="<?php print check_url($front_page); ?>" title="<?php print t('Home'); ?>">
                    <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                    </a>
                    <?php endif; ?>

                    <?php if ($site_name || $site_slogan): ?>
                    <div class="clearfix">
        				<?php if ($site_name): ?>
                        <span id="site-name"><a href="<?php print check_url($front_page); ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a></span>
                        <?php endif; ?>

                        <?php if ($site_slogan): ?>
                        <span id="slogan"><?php print $site_slogan; ?></span>
                        <?php endif; ?>
                    </div>
                    <?php endif; ?>
                </div>
                <!--EOF:logo-floater-->
            </div>

            <div class="grid_7">
                <!--navigation-->
                <div id="navigation">
                    <?php if ($page['navigation']) :?>
                    <?php print drupal_render($page['navigation']); ?>
                    <?php else :
                    if (module_exists('i18n_menu')) {
                    $main_menu_tree = i18n_menu_translated_tree(variable_get('menu_main_links_source', 'main-menu'));
                    } else { $main_menu_tree = menu_tree(variable_get('menu_main_links_source', 'main-menu')); }
                    print drupal_render($main_menu_tree);
                    endif; ?>
                </div>
                <!--EOF:navigation-->
            </div>

        </div>
        <!--EOF:header-->

        <div class="container_12">

            <div class="grid_12">
                <!--banner-->
                <div id="banner">
                <?php print render($page['banner']); ?>

                <?php if (theme_get_setting('slideshow_display','bluemasters')): ?>

                <!--#slideshow-->
                <!--EOF:#slideshow-->

                <?php endif; ?>

                </div>
                <!--EOF:banner-->
            </div>

        </div>

        <div class="container_12">

            <div class="grid_12">
                <!--home-block-area-->
                <div id="home-blocks-area" class="clearfix">

            		<?php if ($messages): ?>
                    <div class="clearfix">
                    <?php print $messages; ?>
                    </div>
                    <?php endif; ?>

                    <div class="grid_4 alpha">
                        <div class="column-fix">
                            <div class="home-block-area first">
                                <?php print render($page['home_area_1']);?>
                            </div>
                        </div>
                    </div>

                    <div class="grid_4 alpha omega">
                        <div class="column-fix">
                            <div class="home-block-area">
                                <?php print render($page['home_area_2']);?>
                            </div>
                        </div>
                    </div>

                    <div class="grid_4 omega">
                        <div class="column-fix">
                            <div class="home-block-area last">
                                <?php print render($page['home_area_3']);?>
                                <?php print render($page['home_area_3_b']);?>
                            </div>
                        </div>
                    </div>

                </div>
                <!--EOF:home-block-area-->
            </div>

        </div>

    </div>
    <!--EOF:wrapper-->
</div>
<!--EOF:page-->
