$(function()
{
    $('.notices_hd1').on('click',function(){
        $('.notices_bd1, .notices_hd1').addClass('active');
        $('.notices_bd2, .notices_hd2').removeClass('active');
    });
    $('.notices_hd2').on('click',function(){
        $('.notices_bd2, .notices_hd2').addClass('active');
        $('.notices_bd1, .notices_hd1').removeClass('active');
    });

});