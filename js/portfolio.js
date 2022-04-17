(function ($) {
 "use strict"

 if ($('.typed-text-output').length == 1) {
  var typed_strings = $('.typed-text').text();
  var typed = new typed('.typed-text-output', {
   strings: typed_strings.split(','),
   typeSpeed: 100,
   backSpeed: 20,
   smallBackspace: false,
   loop: true
  });
 }
})(jQuery);


// window.addEventListener('scroll', () => {
//  console.log("hi");
//  })




portfolioIsotope = $('.portfolio-container').isotope({ itemSelector: '.portfolio-item', layoutMode: 'fitRows' }
);
$('#portfolio-flters li').on('click', function () {
 $("#portfolio-filters li").removeClass('active');
 $(this).addClass('active');

 portfolioIsotope.isotope({filter:$(this).data('filter')})
})


$(".testimonial-carousel").owlCarousel({
 autoplay: true,
 smartSpeed: 1500,
 dots: true,
 loop: true,
 items: 1
});



$('.skill').waypoint(function () {
 $('.progress .progress-bar').each(function () {
  $(this).css("width", $(this).attr("aria-valuenow") + '%');
 });
}, { offset: '80%' });




// filter tab
const tabs = document.querySelectorAll('[data-target]'),
 tabContents = document.querySelectorAll('[data-content]');

tabs.forEach(tab => {
 tab.addEventListener('click', () => {
  const target = document.querySelector(tab.dataset.target);
  tabContents.forEach(tc => {
   tc.classList.remove('filter-active');
  });
  target.classList.add('filter-active');
  tabs.forEach(t => {
   t.classList.remove('filter-tab-active');
  });
  tab.classList.add('filter-tab-active');
 });
});

