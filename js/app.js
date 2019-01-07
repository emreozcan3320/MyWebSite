$(window).scroll(function(){
    if($(document).scrollTop() >50){
        $('.navbar_container').addClass('solidify');
    }else{
        $('.navbar_container').removeClass('solidify');
    }    
});


$(function () {
	$('.home_title').textillate({ 
        in: {
            effect: 'fadeInRightBig'
        },
        type: 'word'
    });

    $('.home_sub_title').textillate({ 
        in: {
            
        },
        type: 'word'
    });

})


