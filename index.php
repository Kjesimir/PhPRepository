<?php get_header();?>
        <div id="bodyPan">
            <div id="leftPan">
                 <?php dynamic_sidebar('sidebar_left')?>
            </div>
            <div id="rightPan">	
			<?php 
					if(have_posts())
					{							
						while(have_posts())
						{
							the_post();?>
						
						<p class="more"><a href="<?php the_permalink() ?>" style="margin-right: 15px;" align="left"><?php the_title() ?></a></p>

						<p class="justify">
							<?php 
								
									$default_attr = array(
									'src' => $src,
									'class' => "post_thumbnails");					
								the_post_thumbnail($default_attr) ?>
								<?php echo get_the_content()?>
								</p>	
						<?php
						}							
					}
			?>
            </div>
        </div>
    </div>
<?php get_footer();?>