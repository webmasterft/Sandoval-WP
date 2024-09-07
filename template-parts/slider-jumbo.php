

<?php if( get_row_layout() == 'slider_principal' ): ?>
		<section class="relative jumbo-slider max-w-[2400px]">
			<section class="splide jumbo-splide" aria-label="Home slider">
				<div class="splide__track">
					<ul class="splide__list">
						<?php if( have_rows('slide') ): while( have_rows('slide') ) : the_row();
						$imgDesktop = get_sub_field('imagen_de_fondo_desktop');
						$imgMobile = get_sub_field('imagen_de_fondo_mobile');
						?>
						<li class="splide__slide relative md:h-[410px] relative">
							<picture class="md:absolute md:top-0 md:left-0 w-full z-0">
								<source media="(min-width:1080px)"
									srcset="<?php echo esc_url($imgDesktop['url']); ?>">
								<img class="object-cover w-full md:h-[410px]" src="<?php echo esc_url($imgMobile['url']);?>" alt="slide"/>
							</picture>
							<div class="container content h-full relative z-[1] md:flex md:justify-end md:items-end w-full mt-[30px] md:-mt-0">
								<div class="text-center md:text-left w-full md:max-w-[400px] mb-[50px]">
								<?php if(get_sub_field('titulo')): ?>
								<h1 class="text-primary text-[30px] leading-[36px] md:text-[44px] md:leading-[48px] font-bold mb-[10px]">
									<?php the_sub_field('titulo'); ?></h1>
								<?php endif; ?>

								<?php if(get_sub_field('subtitulo')): ?>
								<h2 class="text-secondary text-[14px] leading-[16px] md:text-[20px] md:leading-[24px] font-medium mb-[10px] md:max-w-[294px] flex items-center gap-[10px]">
								<?php get_template_part( './template-parts/svg/triangulo-verde-desktop', 'page' ); ?>
									<?php the_sub_field('subtitulo'); ?>
								</h2>
								<?php endif; ?>

								<?php if(get_sub_field('descripcion')): ?>
								<p class="text-primary text-[14px] leading-[16px] md:text-[18px] md:leading-[22px] font-extrabold mb-[10px] md:max-w-[260px]">
									<?php the_sub_field('descripcion'); ?>
								</p>
								<?php endif; ?>

								<?php $link = get_sub_field('boton');
								if($link): ?>
								<a class="btn btn-primary"
									href="<?php echo $link['url']; ?>"
									target="<?php echo $link_target = $link['target'] ? $link['target'] : '_self';?>">
									<span class="mr-[5px]">></span>
									<?php echo $link['title'] ?>
								</a>
								<?php endif; ?>
								</div>
							</div>
						</li>

						<?php endwhile; endif;?>
					</ul>
				</div>
			</section>
		</section>
<?php endif;?>


<style>
	.splide__pagination__page.is-active{
		background: #41BA00;
		border:1px solid #fff;
	}
	.splide__pagination__page{
		background: #0F4B91;
		border:1px solid #fff;
		width: 10px;
		height: 10px;
	}
</style>
