<?php 
/*
* Display Logo and contact details
*/
?>

<div class="headerbox py-3">
  <div class="container">
    <div class="row">
      <div class="col-lg-2 col-md-3 col-9 align-self-center">
        <?php $online_pharmacy_logo_settings = get_theme_mod( 'online_pharmacy_logo_settings','Different Line');
        if($online_pharmacy_logo_settings == 'Different Line'){ ?>
          <div class="logo mb-md-0">
            <?php if( has_custom_logo() ) online_pharmacy_the_custom_logo(); ?>
            <?php if(get_theme_mod('online_pharmacy_site_title',true) != ''){ ?>
              <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <?php }?>
            <?php $description = get_bloginfo( 'description', 'display' );
            if ( $description || is_customize_preview() ) : ?>
              <?php if(get_theme_mod('online_pharmacy_site_tagline',true) != ''){ ?>
                <p class="site-description mb-0"><?php echo esc_html($description); ?></p>
              <?php }?>
            <?php endif; ?>
          </div>
        <?php }else if($online_pharmacy_logo_settings == 'Same Line'){ ?>
          <div class="logo logo-same-line mb-md-0">
            <div class="row">
              <div class="col-lg-5 col-md-5 align-self-md-center">
                <?php if( has_custom_logo() ) online_pharmacy_the_custom_logo(); ?>
              </div>
              <div class="col-lg-7 col-md-7 align-self-md-center">
                <?php if(get_theme_mod('online_pharmacy_site_title',true) != ''){ ?>
                  <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                <?php }?>
                <?php $description = get_bloginfo( 'description', 'display' );
                if ( $description || is_customize_preview() ) : ?>
                  <?php if(get_theme_mod('online_pharmacy_site_tagline',true) != ''){ ?>
                    <p class="site-description mb-0"><?php echo esc_html($description); ?></p>
                  <?php }?>
                <?php endif; ?>
              </div>
            </div>
          </div>
        <?php }?>
      </div>
      <div class="col-lg-5 col-md-2 col-3 align-self-center">
        <?php get_template_part( 'template-parts/navigation/site', 'nav' ); ?>
      </div>
      <div class="col-lg-3 col-md-4 align-self-center">
        <div class="header-search my-3 my-md-0">
          <?php get_search_form(); ?>
        </div>
      </div>
      <div class="col-lg-2 col-md-3 align-self-center">
        <div class="book-tkt-btn my-4 my-md-0 text-center">
          <?php if( get_theme_mod( 'online_pharmacy_book_ticket_link' ) != '' || get_theme_mod( 'online_pharmacy_book_ticket_button' ) != '') { ?>
            <a href="<?php echo esc_url( get_theme_mod( 'online_pharmacy_book_ticket_link','' ) ); ?>" class="register-btn"><?php echo esc_html( get_theme_mod( 'online_pharmacy_book_ticket_button','' ) ); ?></a>
          <?php } ?>
        </div>
      </div>
    </div>
  </div> 
</div>