$(document).ready(function () {
    console.log(jQuery.fn.jquery);
    function sendAjaxForm(result_form, ajax_form, url) {
        $.ajax({
            url:     url, //url страницы (action_ajax_form.php)
            type:     "POST", //метод отправки
            // dataType: "html", //формат данных
            data: ajax_form.serialize(),  // Сеарилизуем объект
            success: function(response) { //Данные отправлены успешно
                // console.log(response);
                // result = $.parseJSON(response);
                // $('#result_form').html('Имя: '+result.name+'<br>Телефон: '+result.phonenumber);
            },
            error: function(response) { // Данные не отправлены
                // console.log(response);
                // $('#result_form').html('Ошибка. Данные не отправлены.');
            }
        });
    }
    // $("button[type='submit']").click(
    //     function(){
    //         var thisFormDom = this.closest('form');
    //         var thisFormObj = $(this.closest('form'));
    //         let url = thisFormObj.attr('action');
    //         console.log(url);
    //         console.log(this.closest('form'));
    //         console.log($(this.closest('form')));
    //         sendAjaxForm('result_form', thisFormObj, url);
    //         return false;
    //     }
    // );
});

