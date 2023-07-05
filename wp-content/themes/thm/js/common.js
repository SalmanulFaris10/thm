$(window).load(function () {
    $(".preloader").fadeOut(function () {
     // $(".centerLogo").addClass('show-logo');
    });
    animation();
});


window.addEventListener('scroll',animation);
function animation(){
    section=document.querySelectorAll('.animation');
    for(i=0;i<section.length;i++){
        var section_top = section[i].getBoundingClientRect().top;
        var window_hieght = window.innerHeight;
        if(section_top < (window_hieght - 150)){
            section[i].classList.add("animation_start");          
        }else{
            section[i].classList.remove("animation_start");
        }
    }
}

$(document).ready(function () {
    $('.footer-slider .items').slick({
        infinite: true,
        slidesToShow: 7,
        slidesToScroll: 1,
        dots: false,
        arrows: false,
        speed:1000,
        autoplay: true,
        autoplaySpeed: 2000,
    });
});

