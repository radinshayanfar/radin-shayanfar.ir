function onSubmit(token) {
    // alert('thanks ' + document.getElementById('field').value);
    // document.getElementById("contact-form").submit();
    // console.log($('#contact-form').html());

    // display loading icon
    // $( '.load-submit .btn i' ).css('display', 'inline-block');
    // $( '.load-submit .btn i' ).addClass('fa-spin');

    $.post('form/contact.php', $('#contact-form').serialize(), function(data) {
        // $('#AJAXPageResult').html(data);
        $('#submit-result').html('<div class="column col-md-12"><div class="form-group">' + data.message + '</div></div>');
    });
}

function validate(event) {
    event.preventDefault();
    grecaptcha.execute();
}

function onload() {
    var element = document.getElementById('submit');
    element.onclick = validate;
}

onload();