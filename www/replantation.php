<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/menu.php');
?>
<div class="banner-bg basic-bg">
	<p>YONSEI SEVERANCE</p>
	<h2>자연치아 살리기</h2>
</div>
<?php
	include_once(G5_PATH.'/gum_nav.php');
?>
<script>
	$(document).ready(function(){
		$('.sub-menu02').prev().html('치아재식술');
	});
</script>

<section class="content">
	<div class="inner tac">
		<div class="title">
			<p>YONSEI SEVERANCE</p>
			<h3>치아재식술</h3>
			<p class="title-text">치아재식술은 치료할 목적으로 치아를 의도적으로 발치하여 짧은 시간 내에<br>
			미세현미경으로 뿌리 끝을 치료한 후 재식하는 치료법입니다.<br><br>

			적용 케이스 범위가 좁지만 치아를 유지하기 위한 최후의 방법으로 생각할 수 있습니다.</p>
		</div>
		<ul class="col-5 line-list mt40">
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/rep_01.jpg" alt="">
				<h5>의도적으로
				치아를 발치</h5>
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/rep_02.jpg" alt="">
				<h5>뿌리 주변 염증 유발
				원인 제거</h5>
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/rep_03.jpg" alt="">
				<h5>신경관 끝을
				밀폐시킴</h5>
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/rep_04.jpg" alt="">
				<h5>다시 잇몸 안으로 재식</h5>
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/rep_05.jpg" alt="">
				<h5>치아 고정 작업</h5>
			</li>
		</ul>
		
	</div>
</section>





<?php 
include_once(G5_THEME_PATH.'/tail.php');
?>