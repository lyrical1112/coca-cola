
$(function(){

    $('#fullpage').fullpage({
		//options here
		autoScrolling:true,
		scrollHorizontally: true,
        navigation:true,
        navigationPosition: 'left',
		anchors:['slide1', 'slide2', 'slide3' , 'slide4' , 'slide5'],
		// 스킬바가 해당섹션에 도달했을때 애니메이션 실행
		afterLoad: function(anchorLink, index) {
			// 처리
				if (anchorLink == 'slide1') {
					$('#btnGoTop').hide();
				} else {
					$('#btnGoTop').show();
				}
				if (anchorLink == 'slide1') {
					$('header').show();
				} else {
					$('header').hide();
				}

		},
	});
	
	const observerOptions = {
		root: null,
		rootMargin: "0px",
		threshold: 0.7
	};
	
	function observerCallback(entries, observer) {
		entries.forEach(entry => {
			if (entry.isIntersecting) {
				// fade in observed elements that are in view
				entry.target.classList.replace('fadeOut', 'fadeIn');
			} else {
				// fade out observed elements that are not in view
				entry.target.classList.replace('fadeIn', 'fadeOut');
			}
		});
	}
	const fadeElms = document.querySelectorAll('.fade');
	const observer = new IntersectionObserver(observerCallback, observerOptions);
	fadeElms.forEach(el => observer.observe(el));
	

	// top버튼
	$('#btnGoTop').click(function () {
		//$.fn.fullpage.setScrollingSpeed(0); 효과를 없애고싶을때
		$.fn.fullpage.moveTo(1, 1); // 이동하고싶은 페이지
		//$.fn.fullpage.setScrollingSpeed(700); 효과를 없애고싶을때
	});
	
});
