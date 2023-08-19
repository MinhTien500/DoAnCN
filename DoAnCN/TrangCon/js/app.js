
$(document).ready(function(){
    $('#Eye').click(function(){
        $(this).toggleClass('open');
        $(this).children('i') .toggleClass('fa-regular fa-eye fa-solid fa-eye-slash');
        if($(this).hasClass('open')){
            $(this).prev().attr('type','text');
        }else{
            $(this).prev().attr('type','password');
        }
    });
});