<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/menu.php');
?>
<div class="banner-bg nature-bg">
	<p>YONSEI SEVERANCE</p>
	<h2>미세현미경 진료</h2>
</div>
<?php
	include_once(G5_PATH.'/gum_nav.php');
?>
<script>
	$(document).ready(function(){
		$('.sub-menu02').prev().html('미세현미경이란?');
	});
</script>
<section class="content">
	<div class="inner">
		<div class="title">
			<p>YONSEI SEVERANCE</p>
			<h3>미세현미경이란?</h3>
		</div>
		<ul class="basic-box">
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/microscope_01.jpg" alt="">
			</li>
			<li>
				<h5 class="point-color">Carl Zeiss 미세현미경</h5>
				<p><b>최대 25배 확대</b>를 통해 육안으로는 보이지 않는 부분을
				확인할 수 있고, 치아 상태에 대한 진단을 가능하게 하며,
				치료의 <b>정확도와 정밀도</b>를 높일 수 있습니다.</p>
			</li>
		</ul>
	</div>
</section>
<!-- <section class="content">
	<img class="pc-img" src="<? echo G5_THEME_IMG_URL; ?>/sub/microscope_03.jpg" alt="slide01">
		<img class="m-img" src="<? echo G5_THEME_IMG_URL; ?>/sub/microscope_03_01.jpg" alt="m_slide01">
</section> -->
<section class="content mb5">
	<div class="inner">
		<img src="<? echo G5_THEME_IMG_URL; ?>/sub/microscope_02.jpg" alt="">
		<ul class="col-2 line-box mt3">
			<li>
				<h5 class="point-color">진단</h5>
				<p>원인모를 통증, 해결되지 않는 불편함들을 해결하기 위해,<br />
				미세현미경을 이용하여 육안으로 보이지 않는<br>
                미세균열, 신경관 등을 찾고 정확하게 진단합니다</p>
			</li>
			<li>
				<h5 class="point-color">치료</h5>
				<p>25배 확대를 통해 육안으로 관찰하기 불가능한 부위까지 확인하면서 <br />
				정확하고 정밀한 신경치료와 수복치료를 가능하게 합니다.</p>
			</li>
		</ul>
	</div>
</section>


<?php 
include_once(G5_THEME_PATH.'/tail.php');
?>