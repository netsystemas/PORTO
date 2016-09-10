<?php
$theme = wp_get_theme();
if ($theme->parent_theme) {
    $template_dir =  basename(get_template_directory());
    $theme = wp_get_theme($template_dir);
}
$porto_url = 'http://newsmartwave.net/wordpress/porto/';
$demos = porto_demo_types();

?>
<div class="wrap about-wrap porto-wrap">
    <h1><?php _e( 'Welcome to Porto!', 'porto' ); ?></h1>
    <div class="about-text"><?php echo esc_html__( 'Porto is now installed and ready to use! Read below for additional information. We hope you enjoy it!', 'porto' ); ?></div>
    <div class="porto-logo"><span class="porto-version"><?php _e( 'Version', 'porto' ); ?> <?php echo porto_version; ?></span></div>
    <h2 class="nav-tab-wrapper">
        <?php
        printf( '<a href="%s" class="nav-tab">%s</a>', admin_url( 'admin.php?page=porto' ), __( "Welcome", 'porto' ) );
        printf( '<a href="%s" class="nav-tab">%s</a>', admin_url( 'admin.php?page=porto-system' ), __( "System Status", 'porto' ) );
        printf( '<a href="%s" class="nav-tab">%s</a>', admin_url( 'admin.php?page=porto-plugins' ), __( "Plugins", 'porto' ) );
        printf( '<a href="#" class="nav-tab nav-tab-active">%s</a>', __( "Install Demos", 'porto' ) );
        printf( '<a href="%s" class="nav-tab">%s</a>', admin_url( 'admin.php?page=porto_settings' ), __( "Theme Options", 'porto' ) );
        ?>
    </h2>
    <div class="porto-section">
        <p class="about-description"><?php _e( 'Installing a demo provides pages, posts, menus, images, theme options, widgets and more. IMPORTANT: The included plugins need to be installed and activated before you install a demo. Please check the "System Status" tab to ensure your server meets all requirements for a successful import. Settings that need attention will be listed in red.', 'porto' ); ?></p>
        <div class="porto-install-demos">
            <div id="porto-install-options" style="display: none;">
                
				<!-- Início Modificação Pets na Web -->
				<h2><?php _e('Install Options', 'porto') ?><span class="theme-name"></span></h2>
                <input type="hidden" id="porto-install-demo-type" value="landing"/>
				<input type="hidden" id="petsnaweb-import-destination-id" value="<?php echo get_current_blog_id(); ?>"/>
				<input type="hidden" id="petsnaweb-import-user-id" value="<?php echo get_current_user_id(); ?>"/>
                
                
				<p><h3><?php _e('Do you want to install demo? It can also take a minute to complete.', 'porto') ?></h3></p>
                <button class="button button-primary" id="petsnaweb-import-yes"><?php _e('Yes', 'porto') ?></button>
                <button class="button" id="porto-import-no"><?php _e('No', 'porto') ?></button>
				<!-- Fim Modificação Pets na Web -->
			
			
			</div>
            <div id="import-status"></div>
            <div class="feature-section theme-browser rendered">
                <?php foreach ( $demos as $demo => $demo_details) : ?>
                    <div class="theme">
                        <div class="theme-wrapper">
                            <div class="theme-screenshot">
                                <img src="<?php echo $demo_details['img']; ?>" />
                                <?php printf( '<a class="preview dashicons dashicons-visibility" title="%1s" target="_blank" href="%2s"></a>', __( 'Preview', 'porto' ), ( $demo != 'landing' ) ? $porto_url .  $demo : $porto_url ); ?>
                            </div>
                            <h3 class="theme-name" id="<?php echo $demo; ?>"><?php echo $demo_details['alt']; ?></h3>
                            <div class="theme-actions">
							
								<!-- Início Modificação Pets na Web -->
                                <?php printf( '<a class="button button-primary button-install-demo" data-demo-id="%s" href="#">%s</a>', strtolower( $demo_details['blog_id'] ), __( 'Install', 'porto' ) ); ?>
								<!-- Fim Modificação Pets na Web -->

								
							</div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

    </div>
    <div class="porto-thanks">
        <p class="description"><?php _e( 'Thank you, we hope you to enjoy using Porto!', 'porto' ); ?></p>
    </div>
</div>
