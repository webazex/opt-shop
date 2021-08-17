$(document).ready(function () {
    console.log(jQuery.fn.jquery + ' dashboard');
    // $.fn.hasAttr = function(name) {
    //     return this.attr(name) !== undefined;
    // };
    function activeAdminTabPanel(name){
        $('.content-panel__section').hide(300);
        $("[data-section-id ='" + name +"']").show(300);
    }
    $('.menu-panel__item').click(function (e) {
        e.preventDefault();
        if(this.hasAttribute('data-id')){
            let attr = ($(this).attr('data-id'));
            activeAdminTabPanel(attr);
        }else {
            return false;
        }
    });
    $('.submenu__item').click(function (e) {
        e.preventDefault();
        if(this.hasAttribute('data-id')){
            let name = $(this).attr('data-id');
            activeAdminTabPanel(name);
        }else {
            return false;
        }
    });
});
