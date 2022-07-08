<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

?>

<!-- 하단 시작 -->
 <footer id="footer">
	<div class="inner">
		<img src="<? echo G5_THEME_IMG_URL; ?>/logo.png" alt="">
		<p>연세세브란스치과의원 ㅣ 
			대표 : 윤영석 ㅣ 사업자등록번호 : 219-94-21608<br />
			주소 : 서울시 금천구 시흥대로 427 2층 201호 ㅣ 전화 : 02-6293-2875</p>
		<div class="footer-gnb">
			<ul>
				<?php if ($is_member) {  ?>
				<li><a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php">
					<img src="<?php echo G5_THEME_IMG_URL ?>/member.svg" alt="멤버">
					MEMBER
				</a></li>
				<li><a href="<?php echo G5_BBS_URL ?>/logout.php">
					<img src="<?php echo G5_THEME_IMG_URL ?>/logout.svg" alt="로그아웃">
					LOGOUT
				</a></li>
				<?php if ($is_admin) {  ?>
				<li class="tnb_admin"><a href="<?php echo G5_ADMIN_URL ?>">
					<img src="<?php echo G5_THEME_IMG_URL ?>/setting.svg" alt="어드민">
					ADMIN
				</a></li>
				<?php }  ?>
				<?php } else {  ?>
				<li><a href="<?php echo G5_BBS_URL ?>/login.php">
					<img src="<?php echo G5_THEME_IMG_URL ?>/login.svg" alt="로그인">
					LOGIN
					</a></li>
				<li><a href="<?php echo G5_BBS_URL ?>/register.php">
					<img src="<?php echo G5_THEME_IMG_URL ?>/user.svg" alt="회원가입">
					JOIN
				</a></li>
				<?php }  ?>
			</ul> 
		</div>
		<p class="copyright">Copyright ⓒ 2022 연세세브란스치과의원. 
		Design by 혜윰앤컴퍼니 All rights reserved</p>
	</div>
</footer>
<!-- 하단 끝 -->

<!-- tob_btn 사용 시 주석 해제 -->
<!-- <button type="button" id="top_btn">
	<i class="fa fa-arrow-up" aria-hidden="true"></i><span class="sound_only">상단으로</span>
</button> -->

<!-- 퀵메뉴 시작 -->
<div id="quick_menu">
	<ul>
		<li>QUICK MENU</li>
		
		<li>
			<a href="javascript:alert('현재 오픈 준비중 입니다. 빠른 시일 내에 찾아뵙겠습니다.')" target="_self">
				<img src="<?php echo G5_THEME_IMG_URL ?>/quick/quick_naver.png" alt="네이버예약">
				<span>네이버예약</span>
			</a>
		</li>
		<li>
			<a href="javascript:alert('현재 오픈 준비중 입니다. 빠른 시일 내에 찾아뵙겠습니다.')" target="_self">
				<img src="<?php echo G5_THEME_IMG_URL ?>/quick/quick_kakao.png" alt="카카오톡">
				<span>카톡 상담</span>
			</a>
		</li>
		<!-- <li>
			<a href="https://www.instagram.com/sev_dental/" target="_blank">
				<img src="<? echo G5_THEME_IMG_URL; ?>/quick/quick_insta.png" alt="인스타그램">
				<span>인스타그램</span>
			</a>
		</li> -->
		<li>
			<a href="javascript:alert('현재 오픈 준비중 입니다. 빠른 시일 내에 찾아뵙겠습니다.')" target="_self">
				<img src="<? echo G5_THEME_IMG_URL; ?>/quick/quick_blog.png" alt="블로그">
				<span>블로그</span>
			</a>
		</li>
		
		<!-- <li>
			<a href="https://talk.naver.com" target="_blank">
				<img src="<? echo G5_THEME_IMG_URL; ?>/quick/quick_talk.png" alt="네이버톡톡">
				<span>네이버톡톡</span>
			</a>
		</li> -->
		<li>
			<a href="<? echo G5_URL; ?>/info_time.php" target="_self">
				<img src="<? echo G5_THEME_IMG_URL; ?>/quick/quick_info.png" alt="진료안내">
				<span>진료안내</span>
			</a>
		</li>
		<li>
			<a href="<? echo G5_URL; ?>/info_map.php" target="_self">
				<img src="<?php echo G5_THEME_IMG_URL ?>/quick/quick_map.png" alt="오시는길">
				<span>오시는길</span>
			</a>
		</li>
		<!-- <li>
			<a href="javascript:alert('현재 오픈 준비중 입니다. 빠른 시일 내에 찾아뵙겠습니다.')" target="_self">
				<img src="<?php echo G5_THEME_IMG_URL ?>/quick/quick_countling.png" alt="상담문의">
				<span>상담문의</span>
			</a>
		</li> -->
		<li id="top">
			<button type="button" id="top_btn">
				<img src="<?php echo G5_THEME_IMG_URL ?>/quick/quick_top.png" alt="위로">
				<span>TOP</span>
			</button>
		</li>
	</ul>
</div>
<!-- 퀵메뉴 끝 -->
<script>

$(function() {
    $("#top_btn").on("click", function() {
        $("html, body").animate({scrollTop:0}, '500');
        return false;
    });


});
</script>

<!-- 하단 끝 -->
<?php
include_once(G5_THEME_PATH."/tail.sub.php");
?>