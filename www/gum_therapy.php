<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/menu.php');
?>
<div class="banner-bg gum-therapy-bg">
	<p>YONSEI SEVERANCE</p>
	<h2>자연치아 살리기</h2>
</div>
<?php
	include_once(G5_PATH.'/gum_nav.php');
?>
<script>
	$(document).ready(function(){
		$('.sub-menu02').prev().html('잇몸치료');
	});
</script>
<section class="content">
	<div class="inner">
		<div class="title">
			<p>YONSEI SEVERANCE</p>
			<h3>잇몸치료</h3>
			<p class="title-text">붓고 피나는 잇몸병의 주된 원인, 바로 치태와 치석 입니다.</p>	
		</div>
		<ul class="col-2 line-box">
			<li>
				<h5 class="point-color">치태란?</h5>
				<p>치아 표면에 타액에 의한 당단백질막에<br>
				세균이 비가역적으로 부착된 상태를<br>
				치태라고 하며, 치석의 전단계로<br>
				치주질환의 주요 원인입니다.</p>
			</li>
			<li>
				<h5 class="point-color">치석이란?</h5>
				<p>치아표면에 있는 세균막에<br>
				무기질이 침착하여<br>
				석회화된 것으로 딱딱한 덩어리 상태입니다.</p>
			</li>
		</ul>
	</div>
</section>


<section class="content">
	<div class="inner " style="max-width: 800px;">
		<h4 class="middle-title">잇몸 치료의 대상</h4>
		<ul class="col-5">
			<li class="circle-box">
				<p>더운물 혹은 찬물이 닿았을 때
				이가 시린 경우</p>
			</li>
			<li class="circle-box">
				<p>잇몸이 내려가 있고
				예전에 비해 치아가
				길어졌다 싶은 경우</p>
			</li>
			<li class="circle-box">
				<p>잇몸이 아프고 치아가
				조금 흔들린다 싶은 경우</p>
			</li>
			<li class="circle-box">
				<p>입냄새가 심하고,
				입맛이 나쁜 경우</p>
			</li>
			<li class="circle-box">
				<p>치석이 쌓여있는 걸
				느끼는 경우</p>
			</li>
		</ul>
	</div>
</section>

<section class="content gum-bg2">
	<div class="inner" style="max-width: 1400px;">
		<div class="gum-box1">
			<div>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/gum_02.png" alt="">
			</div>
			<div class="middle-title">
				<h4>잇몸치료는 <span class="fw900">국가에서 <br class="m_br425">권장하는 보험진료</span>로
				치아를 보존하고 <br class="m_br425">질병을 예방하는 <br class="m_br425">가장 <span class="fw900">기본적인 치료</span>입니다.</h4>
			</div>
			<div>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/gum_03.png" alt="">
			</div>
			<div>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/gum_02.png" alt="">
			</div>
		</div>
	</div>
</section>

<section class="content">
	<div class="inner" style="max-width: 1000px;">
		<div class="middle-title">
			<h4>잇몸 질환 치료 방법</h4>
			<p>치주질환 치료는 비외과적 치주치료(스케일링, 치근활택술),
			외과적 치주치료(치은연하소파술, 치은박리소파술, 골이식술)로 나눠지며 단계별로 진행이 됩니다.
			중요한 것은 치료시기를 놓치지 않는 것입니다.</p>
		</div>
		<img src="<? echo G5_THEME_IMG_URL; ?>/sub/gum_therapy_01.jpg" alt="" class="gum">
		<ul class="basic-box">
			<li><img src="<? echo G5_THEME_IMG_URL; ?>/sub/gum_therapy_02.jpg" alt=""></li>
			<li class="num" data-num="01">
				<h5>치석제거술 (스케일링)</h5>
				<p>치아 표면에 붙어있는 치태, 치석 등을 제거하여
				잇몸 염증을 치료하고 예방하는 치료입니다.
				구강상태가 양호한 사람도 6개월에서 1년에
				한 번 스케일링을 받아야 합니다.</p>
			</li>
		</ul>
		<ul class="basic-box">
			<li><img src="<? echo G5_THEME_IMG_URL; ?>/sub/gum_therapy_03.jpg" alt=""></li>
			<li class="num" data-num="02">
				<h5>치근활택술 / 치주소파술</h5>
				<p>치석이 잇몸 안쪽까지 진행됐다면 잇몸 안쪽에 자리잡고 있는
				치석과 잇몸 염증을 긁어내는 치료가 필요합니다.</p>
			</li>
		</ul>
		<ul class="basic-box">
			<li><img src="<? echo G5_THEME_IMG_URL; ?>/sub/gum_therapy_04.jpg" alt=""></li>
			<li class="num" data-num="03">
				<h5>치주수술 (잇몸수술)</h5>
				<p>이가 흔들리거나 잇몸에 고름이 있는 경우, 마취 후 잇몸 속까지 기구를 넣어
				치료를 하는데 경우에 따라 잇몸을 절개하여 진행하기도 합니다.</p>
			</li>
		</ul>
	</div>
</section>

<style>
.basic-box li:first-child{text-align: center;}
.basic-box li:last-child{flex:2;}

.gum-bg1{color: #fff;}
.gum-bg1 .middle-title{white-space: pre-line; margin-bottom: 0;}
.gum-bg2 .middle-title{white-space: pre-line;}

.gum-box1{display:flex; background-color: #eaeaea; border-radius:20px; width: 100%; justify-content: space-around;}
.gum-box1 .middle-title{margin-bottom: 0 !important;display: flex;align-items: center;}
.gum-box1 .middle-title h4{line-height: 1.3;}
.gum-box1 > div:first-child, .gum-box1  > div:nth-child(3){padding-top: 15px;}
.gum-box1 > div:last-child{display: none;}

@media screen and (max-width:1200px) {
.gum-box1{flex-wrap:wrap; justify-content:center;}
.gum-box1 > div:first-child, .gum-box1 > div:nth-child(3){padding-top: 0; }
.gum-box1 > div:first-child{display: none;}
.gum-box1 > div:last-child{display: block;}
.gum-box1 .middle-title{width: 100%; margin: 0 auto; padding: 60px 10px 30px;}
.gum-box1 .middle-title h4{width: 100%; font-size: 26px;}
}
@media screen and (max-width:769px) {
	
}
@media screen and (max-width:425px) {
.gum-box1 .middle-title h4{font-size: 18px;}
}
</style>

<?php 
include_once(G5_THEME_PATH.'/tail.php');
?>