/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$('#reg-form').submit(function (e) {

    e.preventDefault(); // Prevent Default Submission

    $.ajax({
        url: 'guzzle/curl',
        type: 'POST',
        data: $(this).serialize(), // it will serialize the form data
        dataType: 'html'
    })
        .done(function (data) {
            $('#request-results').fadeOut('slow', function () {
                $('#request-results').fadeIn('slow').html(data);
            });
        })
        .fail(function () {
            alert('Ajax Submit Failed ...');
        });

    console.log(data);
});

$(document).ready(function () {

    var max_fields = 5;
    var wrapper = $('#headers-inputs');
    var addButton = $('#add-button');
    var x = 0;

    addButton.click(function (e) {
        e.preventDefault();
        if (x < max_fields) {


            $(wrapper).append('<div>' +
                '<br><input name="header' + x + ' "placeholder="header"><a href="#" id="remove">x</a>' +
                '</div>');
            x++;

        }
    });

    $(wrapper).on("click","#remove", function(e){ //user click on remove text
        e.preventDefault();
        $(this).parent('div').remove();
        x--;
    })


});
