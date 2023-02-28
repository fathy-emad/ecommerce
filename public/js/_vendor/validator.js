const BasicRules = ['required', 'min', 'max', 'length', 'complex', 'email'];

function is_required()
{

}

function is_min()
{

}

function is_max()
{

}

function is_length()
{

}

function is_complex()
{

}

function is_email()
{

}

function is_match()
{

}



$('button[type=submit]').on('click', function () {

    let form = $(this).closest('form');

    $('[data-validation]').each(function () {

        let id = $(this).attr('id'),
            name = $(this).attr('name'),
            value = $(this).val(),
            validations = $(this).attr('data-validation').split(","),
            errorContainer = $(this).parents().find('.invalid-feedback');


        for(const i in validations)
        {
            let validationSplit = validations[i].split(":");
            let rule =validationSplit [0];
            let ruleValue = validationSplit[1];


        }



    });

    return false;

});
