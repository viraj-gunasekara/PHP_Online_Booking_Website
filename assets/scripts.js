// Initialize Swiper
document.addEventListener("DOMContentLoaded", function () {  //Swiper initializes after HTML is loaded
  var swiper = new Swiper(".swiper-container", {
    spaceBetween: 30,
    effect: "fade",
    loop: true,
    autoplay: {
      delay: 3500,
      disableOnInteraction: false,
    }
  });
});