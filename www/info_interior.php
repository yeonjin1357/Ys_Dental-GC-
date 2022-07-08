<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/menu.php');
?>
<div class="banner-bg info-interior-bg">
	<p>YONSEI SEVERANCE</p>
	<h2>치과소개</h2>
</div>
<?php
	include_once(G5_PATH.'/about_nav.php');
?>
<script>
	$(document).ready(function(){
		$('.sub-menu02').prev().html('둘러보기');
	});
</script>
<section class="content info_equipment">
	<div class="inner">
		<div class="title">
			<p>YONSEI SEVERANCE</p>
			<h3>둘러보기</h3>
		</div>
		<div id="gallery">
			<div class="swiper-container gallery-top">
				<div class="swiper-wrapper">
					<div tabindex="0" role="button" class="swiper-slide"><div class="swiper-slide-container"><img src="<? echo G5_THEME_IMG_URL; ?>/gallery/1.jpg" alt=""></div></div>
					<div tabindex="0" role="button" class="swiper-slide"><div class="swiper-slide-container"><img src="<? echo G5_THEME_IMG_URL; ?>/gallery/2.jpg" alt=""></div></div>
					<div tabindex="0" role="button" class="swiper-slide"><div class="swiper-slide-container"><img src="<? echo G5_THEME_IMG_URL; ?>/gallery/3.jpg" alt=""></div></div>
					<div tabindex="0" role="button" class="swiper-slide"><div class="swiper-slide-container"><img src="<? echo G5_THEME_IMG_URL; ?>/gallery/4.jpg" alt=""></div></div>
					<div tabindex="0" role="button" class="swiper-slide"><div class="swiper-slide-container"><img src="<? echo G5_THEME_IMG_URL; ?>/gallery/5.jpg" alt=""></div></div>
					<div tabindex="0" role="button" class="swiper-slide"><div class="swiper-slide-container"><img src="<? echo G5_THEME_IMG_URL; ?>/gallery/6.jpg" alt=""></div></div>
					<div tabindex="0" role="button" class="swiper-slide"><div class="swiper-slide-container"><img src="<? echo G5_THEME_IMG_URL; ?>/gallery/7.jpg" alt=""></div></div>
					<div tabindex="0" role="button" class="swiper-slide"><div class="swiper-slide-container"><img src="<? echo G5_THEME_IMG_URL; ?>/gallery/8.jpg" alt=""></div></div>
					<div tabindex="0" role="button" class="swiper-slide"><div class="swiper-slide-container"><img src="<? echo G5_THEME_IMG_URL; ?>/gallery/9.jpg" alt=""></div></div>
					<div tabindex="0" role="button" class="swiper-slide"><div class="swiper-slide-container"><img src="<? echo G5_THEME_IMG_URL; ?>/gallery/10.jpg" alt=""></div></div>
					<div tabindex="0" role="button" class="swiper-slide"><div class="swiper-slide-container"><img src="<? echo G5_THEME_IMG_URL; ?>/gallery/11.jpg" alt=""></div></div>
				</div>
				<!-- Add Arrows -->
				<div class="swiper-button-next"></div>
				<div class="swiper-button-prev"></div>
			</div>
			<div class="swiper-container gallery-thumbs">
				<div class="swiper-wrapper">
					<div tabindex="0" role="button" class="swiper-slide"><div class="swiper-slide-container"><img src="<? echo G5_THEME_IMG_URL; ?>/gallery/1.jpg" alt=""></div></div>
					<div class="swiper-slide" tabindex="0" role="button"><div class="swiper-slide-container"><img src="<? echo G5_THEME_IMG_URL; ?>/gallery/2.jpg" alt=""></div></div>
					<div tabindex="0" role="button" class="swiper-slide"><div class="swiper-slide-container"><img src="<? echo G5_THEME_IMG_URL; ?>/gallery/3.jpg" alt=""></div></div>
					<div tabindex="0" role="button" class="swiper-slide"><div class="swiper-slide-container"><img src="<? echo G5_THEME_IMG_URL; ?>/gallery/4.jpg" alt=""></div></div>
					<div tabindex="0" role="button" class="swiper-slide"><div class="swiper-slide-container"><img src="<? echo G5_THEME_IMG_URL; ?>/gallery/5.jpg" alt=""></div></div>
					<div tabindex="0" role="button" class="swiper-slide"><div class="swiper-slide-container"><img src="<? echo G5_THEME_IMG_URL; ?>/gallery/6.jpg" alt=""></div></div>
					<div tabindex="0" role="button" class="swiper-slide"><div class="swiper-slide-container"><img src="<? echo G5_THEME_IMG_URL; ?>/gallery/7.jpg" alt=""></div></div>
					<div tabindex="0" role="button" class="swiper-slide"><div class="swiper-slide-container"><img src="<? echo G5_THEME_IMG_URL; ?>/gallery/8.jpg" alt=""></div></div>
					<div tabindex="0" role="button" class="swiper-slide"><div class="swiper-slide-container"><img src="<? echo G5_THEME_IMG_URL; ?>/gallery/9.jpg" alt=""></div></div>
					<div tabindex="0" role="button" class="swiper-slide"><div class="swiper-slide-container"><img src="<? echo G5_THEME_IMG_URL; ?>/gallery/10.jpg" alt=""></div></div>
					<div tabindex="0" role="button" class="swiper-slide"><div class="swiper-slide-container"><img src="<? echo G5_THEME_IMG_URL; ?>/gallery/11.jpg" alt=""></div></div>
				</div>
			</div>
			<!-- Initialize Swiper -->
			<script>
				$(document).ready(function(){
					var galleryTop= new Swiper('.gallery-top', {
						spaceBetween: 10,
						navigation: {
							nextEl: '.swiper-button-next',
							prevEl: '.swiper-button-prev',
						},
						loop: true,
						loopedSlides: 11
					});
					var galleryThumbs= new Swiper('.gallery-thumbs', {
					  spaceBetween: 10,
					  centeredSlides: false,
					  slidesPerView: 'auto',
					  touchRatio: 0.2,
					  slideToClickedSlide: true,
						  loop: true,
						  loopedSlides: 11
					});
					galleryTop.controller.control= galleryThumbs;
					galleryThumbs.controller.control= galleryTop;
				});
			</script>
		</div><!-- gallery-->
	</div>
</section>

<?php 
include_once(G5_THEME_PATH.'/tail.php');
?>