/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$('#reg-form').submit(function (e) {

    e.preventDefault(); // Prevent Default Submission

    $.ajax({
        url: 'guzzle/request',
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
});

$(document).ready(function () {

    var max_fields = 5;
    var wrapper = $('#headers-inputs');
    var addButton = $('#add-button');
    var x = 0;
    addButton.click(function (e) {
        e.preventDefault();
      if(x < max_fields){
          $(wrapper).append('<br><input name="header'+ x +' "placeholder="header">');
          x++;
      }
    });
});