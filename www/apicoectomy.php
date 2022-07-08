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
		$('.sub-menu02').prev().html('치근단절제술');
	});
</script>
<section class="content tac">
	<div class="inner">
		<div class="title">
			<p>YONSEI SEVERANCE</p>
			<h3>치근단절제술</h3>
			<p class="title-text">치근단절제술은 신경치료가 실패했는데 재신경치료가 불가능하거나 <br />
			재신경치료를 시행했음에도 불구하고 치유가 되지 않는 경우에 시행하는 수술입니다. <br /> <br />
			<b>잇몸을 통해 접근이 가능한 뿌리에만 가능하여 적용 범위가 넓지 않으나 <br />
			치아를 살리기 위한 최후의 방법으로 생각할 수 있습니다.</b></p>
		</div>
		<ul class="col-4 circle-list mt40">
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/apicoectomy_01.jpg" alt="">
				<h5>STEP01</h5>
				<p>치아의 뿌리 끝 염증조직을
				제거하기 위해 잇몸쪽으로
				치아뿌리에 접근합니다.</p>
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/apicoectomy_02.jpg" alt="">
				<h5>STEP02</h5>
				<p>뿌리 끝 부분에
				낭종이나 농양 또는
				육아종을 확인합니다.</p>
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/apicoectomy_03.jpg" alt="">
				<h5>STEP03</h5>
				<p>염증 조직을 제거한 후,
				오염된 치아 뿌리 끝을
				삭제합니다.</p>
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/apicoectomy_04.jpg" alt="">
				<h5>STEP04</h5>
				<p>뿌리 끝에 충전재를
				충전 후 마무리 해줍니다.</p>
			</li>
		</ul>
	</div>
</section>





<?php 
include_once(G5_THEME_PATH.'/tail.php');
?>