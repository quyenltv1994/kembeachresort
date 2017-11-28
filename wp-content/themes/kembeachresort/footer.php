		<?php get_template_part('template-parts/blocks/footer', 'top'); ?>

		<footer class="footer">
			<div class="container--lg">
				<div class="row">
					<div class="col-sm-4">
						<div class="footer-box">
							<div class="title ">
								<span style="color: transparent">.</span>
							</div>
							<div class="wraper">
								<?php echo get_field('footer_info_opt', 'option'); ?>
							</div>
						</div>
					</div>

					<div class="col-sm-4">
						<div class="footer-box">
							<div class="title ">
								<span style="color: transparent">.</span>
							</div>
							<div class="wraper">
								<?php echo get_field('footer_text_column_2_opt', 'option'); ?>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-12">
						<div class="copyright">
							<?php echo get_field('copy_right_text_opt', 'option'); ?>                
						</div>
					</div>
				</div>
			</div>
		</footer>



	</div>

	<?php wp_footer(); ?>

	<?php the_field('before_closing_body', 'option'); ?>
	
	</body>
</html>