<?php
/**
 * The page template file.
 * @package PaperCuts
 * @since PaperCuts 1.0.0
*/
get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<div class="thread">
		<h1>Winter is Coming, How Will You Stay Warm?</h1>
			<div class="thread-header">Author: Theme Admin | October 17, 2008</div>
			<div class="thread-text">Take this stove personality quiz to find out which method of cozy is for you.</div>
			<div class="thread-footer">Uncategorized</div>
			<div class="thread-tags">stove, winter</div>
	</div>
		
	<div class="thread">
		<h1>BBQ Grill Storage for Winter</h1>
			<div class="thread-header">Author: Theme Admin | October 5, 2008</div>
			<div class="thread-text">With winter around the corner, how else can you prepare your BBQ Grill for hibernation besides a sturdy grill cover? Below are a few maintenance and cleaning tasks to help ensure your grill is ready for spring...</div>
			<div class="thread-footer">Uncategorized</div>
			<div class="thread-tags">stove, winter</div>
	</div>

	<div class="thread">
		<h1>Chimney Maintenance Tips</h1>
			<div class="thread-header">Author: Theme Admin | July 10, 2008</div>
			<div class="thread-text">Is your chimney safe and heating most efficiently? Here are some tips to...</div>
			<div class="thread-footer">Uncategorized</div>
			<div class="thread-tags">stove, winter</div>
	</div>
	
	<div class="thread">
		<h1>Choosing the Right Stove for You and Your Family</h1>
			<div class="thread-header">Author: Theme Admin | April 1, 2008</div>
			<div class="thread-text">Maintenance schedules, financial investments and everyday care can cause some confusion when deciding which stove you want for your home. Let us help you make an educated decision that fits well with your...</div>
			<div class="thread-footer">Uncategorized</div>
			<div class="thread-tags">stove, winter</div>
	</div>

    <article class="entry-content"> 
      <div class="entry-content-inner">
<?php papercuts_get_breadcrumb(); ?>
        <h1 class="content-headline"><?php the_title(); ?></h1>
<?php papercuts_get_display_image_page(); ?>
<?php the_content(); ?>
<?php edit_post_link( __( '(Edit)', 'papercuts' ), '<p>', '</p>' ); ?>
<?php endwhile; endif; ?>
<?php comments_template( '', true ); ?>
      </div>
    </article>
  </div> <!-- end of content -->
<?php get_sidebar(); ?>
  </div> <!-- end of main-content -->
</div> <!-- end of container -->
<?php get_footer(); ?>