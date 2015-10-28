<?php
/**
 * The Template for displaying lessons in the module taxonomy
 *
 * Override this template by copying it to yourtheme/sensei/taxonomy-module.php
 *
 * @author 		WooThemes
 * @package 	Sensei/Templates
 * @version     1.9.0
 */

if ( ! defined( 'ABSPATH' ) ) exit;

get_header();

/**
 * sensei_before_main_content hook
 *
 * @hooked sensei_output_content_wrapper - 10 (outputs opening divs for the content)
 */
do_action('sensei_before_main_content');
?>

<?php

/**
 * action before course archive loop
 *
 * @deprecated since 1.9.0 use sensei_loop_course_before instead
 * @hooked Sensei_Templates::deprecated_archive_hook 80
 */
do_action( 'sensei_archive_lesson_loop_before' );

?>

<?php  if ( have_posts() ) { ?>

    <section id="main-course" class="course-container">

     <section class="module-lessons">

        <?php //@todo create a template calling function as them devs should see the class file call ?>
        <?php Sensei_Templates::get_template( 'loop-lesson.php' ); ?>

     </section>

    </section>

<?php } else { ?>

    <p> <?php _e( 'No lessons found that match your selection.', 'woothemes-sensei' ); ?> </p>

<?php  } // End If Statement ?>


<?php

/**
 * sensei_breadcrumb hook
 *
 * @hooked sensei_breadcrumb - 10 (outputs sensei breadcrumb trail)
 */
do_action('sensei_breadcrumb');

/**
 * sensei_pagination hook
 *
 * @hooked sensei_pagination - 10 (outputs archive pagination)
 */
do_action('sensei_pagination');

/**
 * sensei_after_main_content hook
 *
 * @hooked sensei_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action('sensei_after_main_content');

/**
 * sensei_sidebar hook
 *
 * @hooked sensei_get_sidebar - 10
 */
do_action('sensei_sidebar');

get_footer(); ?>