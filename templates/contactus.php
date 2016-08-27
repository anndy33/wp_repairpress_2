<?php
/**
 * Template Name: Contact us
 * @package _s
 */
get_header(); ?>
<div class="blog-header">
		<div class="page-title">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1><?php wp_title('', true,''); ?></h1>
						<!-- get the title and id  of current page -->
						<p><?php $value = get_field( "sub_title", get_option( 'page_for_posts' ) ); echo $value; ?></p>

					</div>
				</div>
			</div>
		</div>
		<!-- .entry-header -->
		<div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
							<?php if(function_exists('bcn_display'))
							{
							bcn_display('');
							}?>
					</div>
				</div>
			</div>
		</div>
</div>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="contact-infor">
					<div class="ct-title">
						<?php 
							echo  $tp_options['contact-title'] ;
						?>
					</div>
					<div class="ct-infor-item">
						<p>
						<?php 
							echo  $tp_options['location'] ;
						?>
						<img src="<?php echo get_template_directory_uri(); ?> /images/ct-line.png" alt="">
						</p>
						<p>
							<?php 
								echo  $tp_options['phone'] ;
							?>
							<img src="<?php echo get_template_directory_uri(); ?> /images/ct-line.png" alt="">
						</p>
						<p>
							<?php 
								echo  $tp_options['mail'] ;
							?>
							<img src="<?php echo get_template_directory_uri(); ?> /images/ct-line.png" alt="">
						</p>
						<p>
							<?php 
								echo  $tp_options['www'] ;
							?>
						</p>
					</div>
				</div>
				<div class="contact-infor">
					<div class="open-title">
						<div class="ct-title">
							<?php 
								echo  $tp_options['opening-title'] ;
							?>
						</div>
						<div class="ct-infor-item">
							<?php 
								echo  $tp_options['time'] ;
							?>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-9">
				<div class="ct-map">
					<span>Where you can find us</span>
					 <iframe style="pointer-events: none;" src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14896.6360948438!2d105.834901!3d21.02632215!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1468894804589" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
				<div class="ct-form">
					<?php while ( have_posts() ) : the_post(); ?>	
					<div class="entry-content">
							<?php the_content(); ?>	
					</div><!-- .entry-content -->	
					<?php endwhile; // end of the loop. ?>
				</div>
			</div>
		</div>
	</div>
</article><!-- #post-## -->
<?php get_footer(); ?>

