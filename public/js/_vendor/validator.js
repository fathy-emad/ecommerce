//Each on validation elements

$('[data-validation]').each(function () {

    let id = $(this).attr('id'),
        name = $(this).attr('name'),
        value = $(this).val(),
        validations = $(this).attr('data-validation').split(","),
        errorContainer = $(this).closest('.invalid-feedback');

    console.log(id, name, value, validations, errorContainer);
});
