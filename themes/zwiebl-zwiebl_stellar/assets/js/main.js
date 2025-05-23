/*alert('hello');
	Stellar by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
*/


 // Select the target div
const targetDiv0 = document.querySelector("#ex-fuelcaster");
const observer0 = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) { fcvid.play(); }//      console.log('Div is visible');
    else { fcvid.pause(); }    // console.log('Div is invisible');
  });
}, {  threshold: 0 });
observer0.observe(targetDiv0);

const targetDiv1 = document.querySelector("#ex-smiledrive");
const observer1 = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) { sdvid.play(); }//      console.log('Div is visible');
    else { sdvid.pause(); }    // console.log('Div is invisible');
  });
}, {  threshold: 0 });
observer1.observe(targetDiv1);

const targetDiv2 = document.querySelector("#ex-mariokart");
const observer2 = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) { mk8vid.play(); }//      console.log('Div is visible');
    else { mk8vid.pause(); }    // console.log('Div is invisible');
  });
}, {  threshold: 0 });
observer2.observe(targetDiv2);

const targetDiv3 = document.querySelector("#ex-cmab");
const observer3 = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) { cmabvid.play(); }//      console.log('Div is visible');
    else { cmabvid.pause(); }    // console.log('Div is invisible');
  });
}, {  threshold: 0 });
observer3.observe(targetDiv3);

const targetDiv4 = document.querySelector("#ex-belluminati");
const observer4 = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) { bmvid.play(); }//      console.log('Div is visible');
    else { bmvid.pause(); }    // console.log('Div is invisible');
  });
}, {  threshold: 0 });
observer4.observe(targetDiv4);

const targetDiv5 = document.querySelector("#ex-quesalupa");
const observer5 = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) { qlvid.play(); }//      console.log('Div is visible');
    else { qlvid.pause(); }    // console.log('Div is invisible');
  });
}, {  threshold: 0 });
observer5.observe(targetDiv5);

function checkVideo(video){
        
       
       
        
        if (video.ended === true){    
            video.pause();
        }
        else if (video.paused === true){
            video.play();
        }
        else if (video.paused === false){
            video.pause();
        }
        /**/
        console.log("this.paused:" + video.paused);
        console.log("this.ended:" + video.ended);
       
       if (video.paused){
            //$("#ex-smiledrive")[0].webkitExitFullScreen();
            $("#sdvid").get(0).pause();
            
            
       }
    }
    
    
 
//fcvid.pause();

(function($) {

	skel.breakpoints({
		xlarge: '(max-width: 1680px)',
		large: '(max-width: 1280px)',
		medium: '(max-width: 980px)',
		small: '(max-width: 736px)',
		xsmall: '(max-width: 480px)',
		xxsmall: '(max-width: 360px)'
	});

	$(function() {

		var	$window = $(window),
			$body = $('body'),
			$main = $('#main');

		// Disable animations/transitions until the page has loaded.
			$body.addClass('is-loading');

			$window.on('load', function() {
				window.setTimeout(function() {
					$body.removeClass('is-loading');
				}, 100);
			});

		// Fix: Placeholder polyfill.
			$('form').placeholder();

		// Prioritize "important" elements on medium.
			skel.on('+medium -medium', function() {
				$.prioritize(
					'.important\\28 medium\\29',
					skel.breakpoint('medium').active
				);
			});

		// Nav.
			var $nav = $('#nav');

			if ($nav.length > 0) {

				// Shrink effect.
					$main
						.scrollex({
							mode: 'top',
							enter: function() {
								$nav.addClass('alt');
							},
							leave: function() {
								$nav.removeClass('alt');
							},
						});

				// Links.
					var $nav_a = $nav.find('a');

					$nav_a
						.scrolly({
							speed: 1000,
							offset: function() { return $nav.height(); }
						})
						.on('click', function() {
    
							var $this = $(this);

							// External link? Bail.
								if ($this.attr('href').charAt(0) != '#')
									return;

							// Deactivate all links.
								$nav_a
									.removeClass('active')
									.removeClass('active-locked');

							// Activate link *and* lock it (so Scrollex doesn't try to activate other links as we're scrolling to this one's section).
								$this
									.addClass('active')
									.addClass('active-locked');

						})
						.each(function() {

							var	$this = $(this),
								id = $this.attr('href'),
								$section = $(id);

							// No section for this link? Bail.
								if ($section.length < 1)
									return;

							// Scrollex.
								$section.scrollex({
									mode: 'top',
									top: '-20px',
									initialize: function() {

										// Deactivate section.
											if (skel.canUse('transition'))
												$section.addClass('inactive');

									},
									enter: function() {
                                            
										// Activate section.
											$section.removeClass('inactive');

										// No locked links? Deactivate all links and activate this section's one.
											if ($nav_a.filter('.active-locked').length == 0) {

												$nav_a.removeClass('active');
												$this.addClass('active');

											}

										// Otherwise, if this section's link is the one that's locked, unlock it.
											else if ($this.hasClass('active-locked'))
												$this.removeClass('active-locked');

									}
								});

						});

			}

		// Scrolly.
			$('.scrolly').scrolly({
				speed: 1000
			});

	});

})(jQuery);