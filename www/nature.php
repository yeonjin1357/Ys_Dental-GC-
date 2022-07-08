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
		$('.sub-menu02').prev().html('치아균열증후군');
	});
</script>
<section class="content">
	<div class="inner tac">
		<div class="title">
			<p>YONSEI SEVERANCE</p>
			<h3>치아균열증후군</h3>
		</div>
		<h4 class="bg-title">미세현미경으로 뚜렷하게 <br class="m_br">관찰되는 미세균열들</h4>
		<ul class="col-4">
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/nature_02.jpg" alt="">
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/nature_03.jpg" alt="">
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/nature_04.jpg" alt="">
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/nature_05.jpg" alt="">
			</li>
		</ul>

		<ul class="col-2 line-box pt5 tal" style="max-width: 1000px; margin: 0 auto;">
			<li>
				<h5 class="point-color">정밀진단</h5>
				<p>모든 치아 균열을 현미경으로 관찰할 수
				있는 것은 아닙니다.
				하지만 씹을 때 찌릿찌릿 아픈데도 원인을
				몰라 답답해하는 경우에 균열을 확인할 수
				있는 수단으로 현미경은 매우 좋은
				진단 도구 중 하나입니다.</p>
			</li>
			<li>
				<h5 class="point-color">치료</h5>
				<p>균열이 있는 치아는 다시 붙지 않습니다.
				때문에 치아를 뽑아야 하는 최악의 상황까지
				균열이 진행되기 전에 진행속도를
				최소화하기 위해 적극적인 예방치료가
				필요한 경우가 많습니다.</p>
			</li>

		</ul>
	</div>
	
</section>

<section class="content bg-gray nature-bg">
		<div class="inner">
			<div class="middle-title">
				<h4>치아균열증후군의 치료</h4>
				<p>연세자연치과에서는 치아균열증후군으로 진단되는 경우
				다음 3단계의 순서로 치료를 진행합니다.</p>
			</div>
			<ul class="col-3 line-list">
				<li>
					<img src="<? echo G5_THEME_IMG_URL; ?>/sub/nature_04.png" alt="">
					<h5>1단계</h5>
					<p>금이 간 치아를
					단단히 둘러싸 잡아 주기 위하여
					크라운 치료를 진행합니다.</p>
				</li>
				<li>
					<img src="<? echo G5_THEME_IMG_URL; ?>/sub/nature_05.png" alt="">
					<h5>2단계</h5>
					<p>크라운 치료 후에도
					증상이 지속되는 경우
					신경치료가 필요합니다.</p>
				</li>
				<li>
					<img src="<? echo G5_THEME_IMG_URL; ?>/sub/nature_06.png" alt="">
					<h5>3단계</h5>
					<p>신경치료 완료 후에도
					개선이 없다면
					치아 균열이 뿌리까지 진행되어
					발치가 필요할 가능성이 높습니다.</p>
				</li>
			</ul>
			
		</div>
</section>


<style>

.line-list li img{border: 0; width: auto;}
.line-list p{white-space: pre-line;}
.line-list h5{color: #133792;}
.line-box li{padding: 0 4% 3% 5%;}
.line-box p{ white-space: pre-line;}

.nature-bg{background-color: #f3fbfe;}

.col-4 > li{margin: 0 !important; width: 25%;}

@media screen and (max-width : 769px) {
.col-4 > li{width: 50%;}
}

@media screen and (max-width : 425px) {
	.col-2.line-box li{width: 80%; margin: 0 auto; text-align: center;}
	.col-2.line-box li:not(:first-child){margin-top: 3%;}
}
</style>

<?php 
include_once(G5_THEME_PATH.'/tail.php');
?>