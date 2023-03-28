//Handling all social media registration or login redirection
$('[socialAuth]').on("click", function () {
    let social = $(this).attr('socialAuth');

    var aTag = document.createElement('a');
    aTag.setAttribute('href',"auth/redirect/" + social);
    aTag.click();
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
