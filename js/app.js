$(window).scroll(function(){
    if($(document).scrollTop() >50){
        $('.navbar_container').addClass('solidify');
    }else{
        $('.navbar_container').removeClass('solidify');
    }

    
});
