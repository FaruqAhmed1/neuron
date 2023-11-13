<?php get_header( ) ?>
	

		<!-- ::::::::::::::::::::: start slider section:::::::::::::::::::::::::: -->
		<section class="slider-area">
		
			<!-- slide item one -->
			<?php 
			$args = array(
				'posts_per_page' => 5,
				'post_type' => 'slide',
				'order' => 'ASC',
			);
			$slide = new WP_Query( $args );
			if( $slide->have_posts()):
				while( $slide->have_posts() ):
				$slide->the_post( );
				$link =  get_post_meta( $post->ID, 'btn_link', true );
				$text =  get_post_meta( $post->ID, 'btn_text', true );
				?>

				<div class="homepage-slider" style="background-image: url(<?php the_post_thumbnail_url( 'large' ) ?>)">
					<div class="display-table">
						<div class="display-table-cell">
							<div class="container">
								<div class="row">
									<div class="col-sm-7">
										<div class="slider-content">
											<h1><?php The_title(); ?></h1>
											<p><?php the_content(); ?></p>
											<a href="<?php echo esc_url( $link ) ?>"><?php echo esc_html( $text ) ?><i class="fa fa-long-arrow-right"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php
				endwhile; endif;
				wp_reset_query( ); ?>
		</section><!-- slider area end -->
	
	
		<!-- ::::::::::::::::::::: start intro section:::::::::::::::::::::::::: -->
		<section class="section-padding darker-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-offset-3 col-lg-6 col-md-offset-2 col-md-8">
						<div class="intro-title text-center">
							<h2>Welcome to the Neuron Finance</h2>
							<div class="hidden-xs">
								<p>Interactively simplify 24/7 markets through 24/7 best practices. Authoritatively foster cutting-edge manufactured products and distinctive.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- single intro -->
					<?php
					$args = array(
						'posts_per_page' => 3,
						'post_type' => 'feature',
						'order' => 'ASC',
					);
					$feature = new WP_Query( $args );
					if( $feature->have_posts() ):
						while( $feature->have_posts( ) ):
							$feature->the_post();
							
					 ?>
					<div class="col-md-4">
						<div class="single-intro">
							<div class="intro-img" style="background-image:url(<?php the_post_thumbnail_url( 'large' ) ?>)"></div>
							<div class="intro-details text-center">
								<h3><?php the_title(); ?></h3>
								<p><?php the_content(); ?></p>
							</div>
						</div>
					</div>
					<?php
						endwhile; endif;
						wp_reset_query( );
					 ?>
		</section><!-- intro area end -->
	
	
		<!-- ::::::::::::::::::::: start block content area:::::::::::::::::::::::::: -->
		<section class="section-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="block-text">
							<h2>A Finance Agency Crafting Beautiful & Engaging Online Experiences</h2>
							<p>Seamlessly communicate distinctive alignments and business models. Efficiently whiteboard robust meta-services whereas stand-alone synergy. Enthusiastically engage premier supply chains after intuitive testing procedures. Conveniently parallel task robust imperatives through corporate customer service.</p> 
							
							<p>Dynamically productivate tactical mindshare via business collaboration and idea-sharing. Credibly conceptualize extensive schemas for functionalized metrics. </p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="block-img">
							<img src="<?php echo get_template_directory_uri();  ?>/assets/img/homepageblock.jpg" alt="" />
						</div>
					</div>
				</div>
			</div>
		</section><!-- block area end -->
	
	
		<!-- ::::::::::::::::::::: start services section:::::::::::::::::::::::::: -->
		<section class="section-padding darker-bg">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
						<div class="template-title text-center">
							<h2>We Provide Huge Range of Services</h2>
							<p>Holisticly transform excellent systems rather than collaborative leadership. Credibly pursue compelling outside the box.</p>
						</div>
					</div>
				</div>
				
				<div class="row">
					<!-- single service -->
					<div class="col-sm-6 col-md-4">
						<div class="services-tiem">
							<img class="hvr-buzz-out" src="<?php echo get_template_directory_uri();  ?>/assets/img/services/1.png" alt="" />
							<h3><a href="#">Performance</a></h3>
							<p>Dynamically fabricate innovative products and distributed web services. Distinctively pontificate.</p>
						</div>
					</div>
					<!-- single service -->
					<div class="col-sm-6 col-md-4">
						<div class="services-tiem">
							<img src="<?php echo get_template_directory_uri();  ?>/assets/img/services/2.png" alt="" />
							<h3><a href="#">Sustainability</a></h3>
							<p>Dynamically fabricate innovative products and distributed web services. Distinctively pontificate.</p>
						</div>
					</div>
					<!-- single service -->
					<div class="col-sm-6 col-md-4">
						<div class="services-tiem">
							<img src="<?php echo get_template_directory_uri();  ?>/assets/img/services/3.png" alt="" />
							<h3><a href="#">Web Design</a></h3>
							<p>Dynamically fabricate innovative products and distributed web services. Distinctively pontificate.</p>
						</div>
					</div>
					<!-- single service -->
					<div class="col-sm-6 col-md-4">
						<div class="services-tiem">
							<img src="<?php echo get_template_directory_uri();  ?>/assets/img/services/4.png" alt="" />
							<h3><a href="#">Web Development</a></h3>
							<p>Dynamically fabricate innovative products and distributed web services. Distinctively pontificate.</p>
						</div>
					</div>
					<!-- single service -->
					<div class="col-sm-6 col-md-4">
						<div class="services-tiem">
							<img src="<?php echo get_template_directory_uri();  ?>/assets/img/services/5.png" alt="" />
							<h3><a href="#">Branding Design</a></h3>
							<p>Dynamically fabricate innovative products and distributed web services. Distinctively pontificate.</p>
						</div>
					</div>
					<!-- single service -->
					<div class="col-sm-6 col-md-4">
						<div class="services-tiem">
							<img src="<?php echo get_template_directory_uri();  ?>/assets/img/services/6.png" alt="" />
							<h3><a href="#">Marketing </a></h3>
							<p>Dynamically fabricate innovative products and distributed web services. Distinctively pontificate.</p>
						</div>
					</div>
				</div>
			</div>
		</section><!-- end services section -->
	
		<?php get_footer( ) ?>