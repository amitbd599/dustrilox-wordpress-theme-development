<?php

   /**
    * Template part for displaying header side information
    *
    * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
    *
    * @package dustrilox
   */

    $dustrilox_side_hide = get_theme_mod( 'dustrilox_side_hide', false );
    $dustrilox_side_search = get_theme_mod( 'dustrilox_side_search', false );
    $dustrilox_side_logo = get_theme_mod( 'dustrilox_side_logo', get_template_directory_uri() . '/assets/img/logo/logo-black.png' );
    $dustrilox_extra_about_text = get_theme_mod( 'dustrilox_extra_about_text', __( 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and will give you a complete account of the system and expound the actual teachings of the great explore', 'dustrilox' ) );

    $dustrilox_extra_map = get_theme_mod( 'dustrilox_extra_map', __( '#', 'dustrilox' ) );
    $dustrilox_extra_map_iframe = get_theme_mod( 'dustrilox_extra_map_iframe', __( '#', 'dustrilox' ) );
    $dustrilox_contact_title = get_theme_mod( 'dustrilox_contact_title', __( 'Contact Info', 'dustrilox' ) );
    $dustrilox_extra_address = get_theme_mod( 'dustrilox_extra_address', __( '12/A, Mirnada City Tower, NYC', 'dustrilox' ) );
    $dustrilox_extra_phone = get_theme_mod( 'dustrilox_extra_phone', __( '088889797697', 'dustrilox' ) );
    $dustrilox_extra_email = get_theme_mod( 'dustrilox_extra_email', __( 'support@mail.com ', 'dustrilox' ) );
?>


 <!-- sidebar area start -->
 <div class="sidebar__area sidebar__area-2">
         <div class="sidebar__wrapper">
            <div class="sidebar__close">
               <button class="sidebar__close-btn" id="sidebar__close-btn">
                  <i class="fal fa-times"></i>
               </button>
            </div>
            <div class="sidebar__content">


            <?php if(!empty($dustrilox_side_logo)): ?>
               <div class="sidebar__logo mb-40">
                  <a href="<?php print esc_url( home_url( '/' ) );?>">
                  <img src="<?php echo esc_url( $dustrilox_side_logo );?>" alt="<?php echo esc_attr__( 'logo', 'dustrilox' )?>">
                  </a>
               </div>
            <?php endif ;?>


            <?php if(!empty($dustrilox_side_search)): ?>
                  <div class="sidebar__search mb-25">
                     <form method="get" action="<?php print esc_url( home_url( '/' ) );?>" >
                     <input type="search" name="s" value="<?php print esc_attr( get_search_query() )?>" placeholder="<?php print esc_attr__( 'What are you searching for?', 'dustrilox' );?>" >
                        <button type="submit" ><i class="far fa-search"></i></button>
                     </form>
                  </div>
               <?php endif ;?>


               <div class="mobile-menu-2 fix mb-20"></div>

               <?php if(!empty($dustrilox_extra_about_text)): ?>
               <div class="sidebar__text d-none d-lg-block">
                  <p><?php echo esc_html( $dustrilox_extra_about_text ); ?></p>
               </div>
               <?php endif ;?>

               <div class="sidebar__img d-none d-lg-block mb-20">
                  <div class="row gx-2">
                     <div class="col-4">
                        <div class="sidebar__single-img w-img mb-10">
                           <a class="popup-image" href="assets/img/gallery/gal-1.jpg">
                              <img src="assets/img/gallery/gal-1.jpg" alt="">
                           </a>
                        </div>
                     </div>
                     <div class="col-4">
                        <div class="sidebar__single-img w-img mb-10">
                           <a class="popup-image" href="assets/img/gallery/gal-2.jpg">
                              <img src="assets/img/gallery/gal-2.jpg" alt="">
                           </a>
                        </div>
                     </div>
                     <div class="col-4">
                        <div class="sidebar__single-img w-img mb-10">
                           <a class="popup-image" href="assets/img/gallery/gal-3.jpg">
                              <img src="assets/img/gallery/gal-3.jpg" alt="">
                           </a>
                        </div>
                     </div>
                     <div class="col-4">
                        <div class="sidebar__single-img w-img mb-10">
                           <a class="popup-image" href="assets/img/gallery/gal-4.jpg">
                              <img src="assets/img/gallery/gal-4.jpg" alt="">
                           </a>
                        </div>
                     </div>
                     <div class="col-4">
                        <div class="sidebar__single-img w-img mb-10">
                           <a class="popup-image" href="assets/img/gallery/gal-5.jpg">
                              <img src="assets/img/gallery/gal-5.jpg" alt="">
                           </a>
                        </div>
                     </div>
                     <div class="col-4">
                        <div class="sidebar__single-img w-img mb-10">
                           <a class="popup-image" href="assets/img/gallery/gal-6.jpg">
                              <img src="assets/img/gallery/gal-6.jpg" alt="">
                           </a>
                        </div>
                     </div>
                  </div>
               </div>


               <div class="sidebar__map d-none d-lg-block mb-15">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d29176.030811137334!2d90.3883827!3d23.924917699999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1605272373598!5m2!1sen!2sbd"></iframe>
               </div>



               <?php if(!empty($dustrilox_side_hide)): ?>
               <div class="sidebar__contact mt-30 mb-20">
                  <h4><?php echo esc_html( $dustrilox_contact_title ); ?></h4>
                  <ul>

                  <?php if(!empty($dustrilox_extra_address)): ?>
                     <li class="d-flex align-items-center">
                        <div class="sidebar__contact-icon mr-15">
                           <i class="fal fa-map-marker-alt"></i>
                        </div>
                        <div class="sidebar__contact-text">
                           <a target="_blank" href="<?php echo esc_url( $dustrilox_extra_map )?>"><?php echo esc_html( $dustrilox_extra_address )?></a>
                        </div>
                     </li>
                     <?php endif ;?>

                     <?php if(!empty($dustrilox_extra_phone)): ?>
                     <li class="d-flex align-items-center">
                        <div class="sidebar__contact-icon mr-15">
                           <i class="far fa-phone"></i>
                        </div>
                        <div class="sidebar__contact-text">
                           <a href="tel:<?php echo esc_attr( $dustrilox_extra_phone ); ?>"><?php echo esc_html( $dustrilox_extra_phone ); ?></a>
                        </div>
                     </li>
                     <?php endif ;?>

                     <?php if(!empty($dustrilox_extra_email)): ?>
                     <li class="d-flex align-items-center">
                        <div class="sidebar__contact-icon mr-15">
                           <i class="fal fa-envelope"></i>
                        </div>
                        <div class="sidebar__contact-text">
                           <a href="mailto:<?php echo esc_attr( $dustrilox_extra_email )?>"><?php echo esc_html( $dustrilox_extra_email )?></a>
                        </div>
                     </li>
                     <?php endif ;?>
                  </ul>
               </div>

               <div class="sidebar__social">
                  <?php dustrilox_header_social_profiles(); ?>
               </div>
               <?php endif ;?>
            </div>
         </div>
      </div>
      <!-- sidebar area end -->
      <div class="body-overlay"></div>
      <!-- sidebar area end -->



