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
});
