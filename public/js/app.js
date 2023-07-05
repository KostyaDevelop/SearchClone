$(document).ready(function(){
    $('#search-selector-soc-input-selector').change(function(){
        if($(this).val() == 'vk'){
            $('.search-selector-soc-input-icon_3-vk').show();
            $('.search-selector-soc-input-icon_3-ok').hide();
        }
        if($(this).val() == 'ok'){
            $('.search-selector-soc-input-icon_3-vk').hide();
            $('.search-selector-soc-input-icon_3-ok').show();
        }
    });

    $('.auth-alert-close').click(function(){
        $('.auth-alert').hide();
    });
    $('.header-menu-login').click(function(){
        $('.auth-alert').css('display', 'flex');
    });


    // $('.registration-block-reg .a-border-black').click(function(){
    //     $('.auth-alert').css('display', 'flex');
    //     $('body,html').scrollTop(0);
    // });

    $('.registration-block-form-inner-label-password-hide').click(function(){
        switch($('.auth-block-form-input_password').attr('type')) {
            case 'text':
                $('.auth-block-form-input_password').prop('type', 'password');
                $('.registration-block-form-inner-label-password-hide-text').text('View');
                break;
            case 'password':
                $('.auth-block-form-input_password').prop('type', 'text');
                $('.registration-block-form-inner-label-password-hide-text').text('Hide');
                break;
        }
    });

    $('.search-selector-file-button').click(function(){
        $('.preloader').css('display', 'flex');
    });
});
