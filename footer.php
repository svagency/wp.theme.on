<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootscore
 */

?>

</div>

<?php $theme_folder_path = get_stylesheet_directory_uri(); ?>

        <!-- footer begin -->
        <footer>
            <div class="container">
            <div class="row">

            <small>&copy;&nbsp;<?php echo Date('Y'); ?> - <?php bloginfo('name'); ?></small>

<!-- Footer 1 Widget -->
<div class="col-md-6 col-lg-3">
  <?php if (is_active_sidebar('footer-1')) : ?>
    <div>
      <?php dynamic_sidebar('footer-1'); ?>
    </div>
  <?php endif; ?>
</div>

<!-- Footer 2 Widget -->
<div class="col-md-6 col-lg-3">
  <?php if (is_active_sidebar('footer-2')) : ?>
    <div>
      <?php dynamic_sidebar('footer-2'); ?>
    </div>
  <?php endif; ?>
</div>

<!-- Footer 3 Widget -->
<div class="col-md-6 col-lg-3">
  <?php if (is_active_sidebar('footer-3')) : ?>
    <div>
      <?php dynamic_sidebar('footer-3'); ?>
    </div>
  <?php endif; ?>
</div>

<!-- Footer 4 Widget -->
<div class="col-md-6 col-lg-3">
  <?php if (is_active_sidebar('footer-4')) : ?>
    <div>
      <?php dynamic_sidebar('footer-4'); ?>
    </div>
  <?php endif; ?>
</div>
<!-- Footer Widgets End -->

</div>
            </div>

            <div class="subfooter">
                <div class="container">
                    <div class="row">
                      <div class="footer-left col-md-4">
                      <small>&copy;&nbsp;<?php echo Date('Y'); ?> - <?php bloginfo('name'); ?></small>
                      </div>
                      <div class="footer-middle col-md-4">

                      </div>
                        <div class="footer-right col-md-4 text-right">
                        
                        </div>
                      
                    </div>
                </div>
            </div>
            <a href="#" id="back-to-top"></a>
        </footer>
        <!-- footer close -->
    </div>

    <!-- Javascript Files
    ================================================== -->
  	<script src="<?php echo $theme_folder_path; ?>/js/bootstrap.min.js"></script>
	
    


</body>

</html>

<?php wp_footer(); ?>
