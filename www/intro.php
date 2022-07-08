<?php
include_once('./_common.php');
?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo G5_THEME_CSS_URL; ?>/default.css">
<link rel="stylesheet" href="<?php echo G5_THEME_CSS_URL; ?>/footer.css">
<link rel="stylesheet" href="<?php echo G5_THEME_CSS_URL; ?>/common.css">
<link rel="stylesheet" href="<?php echo G5_THEME_CSS_URL; ?>/main.css">
<link rel="stylesheet" href="<?php echo G5_THEME_URL; ?>/dist/css/swiper.css">
<script src="<?php echo G5_THEME_JS_URL ?>/jquery.js"></script>
<script src="<?php echo G5_THEME_URL; ?>/dist/js/swiper.js"></script>
<meta name="description" content="연세자연치과">
<meta name="keywords" content="연세자연치과">
<link rel="shortcut icon" href="<?php echo G5_URL?>/favicon.ico"/>
<!-- 오픈그래프 태그, 소셜 미디어로 공유될 때 우선적으로 활용 -->
<meta property="og:type" content="website">
<meta property="og:title" content="연세자연치과">
<meta property="og:site_name" content="연세자연치과" />
<meta property="og:description" content="연세자연치과">
<meta property="og:image" content="<?php echo G5_URL?>/cover.jpg?v=1.0">
<meta property="og:url" content="<?php echo G5_URL?>">
<!-- 대표 url -->
<link rel="canonical" href="<?php echo G5_URL?>">	

<div class="intro-wrap">
	<div class="intro-title">
		<h3>지금, 이 시대 앞선 <span>디지털 치과</span></h3>
	</div>
	<ul class="intro">
		<li>
			<div class="intro-txt">
				<img src="<?php echo G5_THEME_IMG_URL ?>/intro_logo_01.png" alt="">
				<h3>임플란트 / 보철 / 일반진료</h3>
				<a href="#">DETAIL VIEW +</a>
			</div>
		</li>
		<li>
			<div class="intro-txt">
				<img src="<?php echo G5_THEME_IMG_URL ?>/intro_logo_02.png" alt="">
				<h3>치아교정 전문진료</h3>
				<a href="#">DETAIL VIEW +</a>
			</div>
		</li>
	</ul>
</div>

<style>
.intro-wrap{position: relative;}
.intro{display:flex; position: relative;}
.intro-title{position: absolute; left: 50%; transform:translateX(-50%);  top: 100px; color: #fff; z-index: 2;}
.intro-title h3{font-weight: 300;}
.intro-title span{font-weight: 600;}
.intro li{flex:1; height: 100vh; display:flex; align-items:center; justify-content:center; padding: 0 20px;}
.intro li:first-child{background:url(<?php echo G5_THEME_URL; ?>/img/intro_01.jpg) center/cover no-repeat}
.intro li:last-child{background:url(<?php echo G5_THEME_URL; ?>/img/intro_02.jpg) center/cover no-repeat}
.intro-txt{color: #fff; text-align: center;}
.intro-txt h3{margin-top: 30px;}
.intro-txt a{color: #fff; border: 1px solid #fff; margin-top: 80px; padding: 8px 60px; display: inline-block; transition:0.5s;}
.intro-txt a:hover{color: #333; background-color: rgba(255,255,255,0.8); font-weight: 500; border: 1px solid #333;}

#quick_menu{display: none !important;}

@media screen and (max-width:769px) {
.intro{display:flex; flex-wrap:wrap;}
.intro li{flex:none; width: 100%; height: 50vh;}
.intro-txt a{margin-top: 50px;}
.intro-title{top: 50%; transform:translate(-50%, -50%); text-align: center; background-color: rgba(255,255,255,0.4); width: 100%; padding: 30px 0;}
#footer{padding: 50px 0;}
}

</style>

<?php 
include_once(G5_THEME_PATH.'/tail.php');
?>