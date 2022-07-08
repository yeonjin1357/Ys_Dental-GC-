<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/menu.php');
?>
<div class="banner-bg info-time-bg">
	<p>YONSEI SEVERANCE</p>
	<h2>치과소개</h2>
</div>
<?php
	include_once(G5_PATH.'/about_nav.php');
?>
<script>
	$(document).ready(function(){
		$('.sub-menu02').prev().html('진료 안내');
	});
</script>
<section class="content info-time">
	<div class="inner">
		<div class="title">
			<p>YONSEI SEVERANCE</p>
			<h3>진료 안내</h3>
		</div>
		<ul>
			<li><img src="<? echo G5_THEME_IMG_URL; ?>/sub/time.png" alt=""></li>
			<li>
				<h6>평일</h6>
				<h6>AM 09:30 ~ PM 06:30</h6>
				<h6 class="night-time">월 · 수 (야간 진료)</h6>
				<h6><span class="point-color">AM 09:30 ~ PM 08:30</span></h6>
				<h6>점심시간</h6>
				<h6>PM 01:00 ~ PM 02:00</h6>
				<h6>토요일</h6>
				<h6>AM 09:30 ~ PM 02:00</h6>
				<div class="mt20">
					<p>※ 토요일은 점심시간 없이 진료합니다.</p>
					<p>※ 일요일 및 공휴일은 휴무입니다.</p>
				</div>
			</li>
		</ul>
		<h5>
			<img src="<? echo G5_THEME_IMG_URL; ?>/sub/info_time_icon.png" alt="">
			예약 및 상담 <span class="point-color">02-6293-2875</span>
		</h5>
	</div>
</section>

<?php 
include_once(G5_THEME_PATH.'/tail.php');
?>