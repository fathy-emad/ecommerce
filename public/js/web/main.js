$("[data-bs-active=dropdown]").on('show.bs.dropdown', function (event) {
    $(event.target).addClass('nav-links-active');
});

$("[data-bs-active=dropdown]").on('hidden.bs.dropdown', function (event) {
    $(event.target).removeClass('nav-links-active');
});
