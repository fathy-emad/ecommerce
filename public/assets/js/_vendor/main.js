$("[data-bs-active=dropdown]").on('show.bs.dropdown', function (event) {
    $(event.target).addClass('nav-links-active');
});

$("[data-bs-active=dropdown]").on('hidden.bs.dropdown', function (event) {
    $(event.target).removeClass('nav-links-active');
});

//Show password feat
$("[showPassword]").on('click', function () {
    let button = $(this);
    let icon = button.find('i');
    let input = button.parent().find('input');
    let type = input.attr('type');

    icon.toggleClass('bi-eye-fill bi-eye-slash-fill');

    if (type == 'password') input.attr('type', 'text');
    else input.attr('type', 'password');

});
