// Carousel Home Page
$("#carousel-home .owl-carousel").on("initialized.owl.carousel", function() {
  setTimeout(function() {
    $("#carousel-home .owl-carousel .owl-item.active .owl-slide-animated").addClass("is-transitioned");
    $("section").show();
  }, 200);
});

const $owlCarousel = $("#carousel-home .owl-carousel").owlCarousel({
  items: 1,
  autoplay: true,
  loop: true,
  nav: false,
  dots:true,
	responsive:{
        0:{
             dots:false
        },
        767:{
            dots:false
        },
        768:{
             dots:true
        }
    }
});

$owlCarousel.on("changed.owl.carousel", function(e) {
  $(".owl-slide-animated").removeClass("is-transitioned");
  const $currentOwlItem = $(".owl-item").eq(e.item.index);
  $currentOwlItem.find(".owl-slide-animated").addClass("is-transitioned");
});

$owlCarousel.on("resize.owl.carousel", function() {
  setTimeout(function() {
  }, 50);
});

// Header background
$('.background-image').each(function(){
  $(this).css('background-image', $(this).attr('data-background'));
});

// Opacity mask
$('.opacity-mask').each(function(){
  $(this).css('background-color', $(this).attr('data-opacity-mask'));
});

