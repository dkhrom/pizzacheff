// LightZoom
jQuery('.lightzoom').lightzoom({ speed: 400, viewTitle: true });


// CTA Form
function call() {
    var msg = $('#cta-form').serialize();
    $.ajax({
        type: 'POST',
        url: './form.php',
        data: msg,
        success: function (data) {
            $('#cta-form').remove();
            $('#results').html(data);
        },
        error: function (xhr, str) {
            alert('Ошибка при отправке формы: ' + xhr.responseCode);
        }
    });
}