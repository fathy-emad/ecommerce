const basicRules = ['required', 'min', 'max', 'length', 'match', 'complex', 'email', 'phone'];

const validationFuncs = {

    "required" : (value, ruleValue = null, errorMessage) => {

        if (! value.trim(" ").length) return errorMessage;
    },

    "min" : (value, ruleValue, errorMessage) => {

        errorMessage = errorMessage.replace(':value', ruleValue);

        if (value.trim(" ").length < ruleValue) return errorMessage;
    },

    "max" : (value, ruleValue, errorMessage) => {

        errorMessage = errorMessage.replace(':value', ruleValue);

        if (value.trim(" ").length > ruleValue) return errorMessage;
    },

    "length" : (value, ruleValue, errorMessage) => {

        errorMessage = errorMessage.replace(':value', ruleValue);

        if (value.length != ruleValue) return errorMessage;
    },

    "email" : (value, ruleValue = null, errorMessage) => {

        let re = /(^\S)(\w+)@([a-z]+).(com|org|gov|edu|net|mil)(.[a-z]{2})?/g;

        if (! value.match(re)) return errorMessage;
    },

    "phone" : (value, ruleValue = null, errorMessage) => {

        let re = /^(011|012|015|010)(\d{8})$/g;

        if (! value.match(re)) return errorMessage;
    },

    "complex" : (value, ruleValue = null, errorMessage) => {

        let capital = /[A-Z]/g;
        let small = /[a-z]/g;
        let digit = /\d/g;
        let specChar = /\W/g;

        if (! value.match(capital) || ! value.match(small) || ! value.match(digit) || value.match(specChar)) return errorMessage;

    },

    "match" : (value, id, errorMessage) => {

        let idValue = $('#' + id).val();
        let label = $('label[for=' + id + ']').text();

        errorMessage = errorMessage.replace(':value', label);

        if (value !== idValue) return errorMessage;
    }
}


function setClassMessageInvalid(element, errorContainer, invalidMessage)
{

    //Add invalid message in invalid-feedback div
    if (errorContainer.text())
    {
        invalidMessage = errorContainer.text() + ", " + invalidMessage;
    }

    errorContainer.text(invalidMessage);
    errorContainer.show();

    //Add class is-invalid to input
    element.addClass('is-invalid');
}

let formValid = true;

$('button[type=submit]').on('click', function (e) {

    let form = $(this).closest('form'),
        validationElements = $('[data-validation]'),
        errorMessageCont = $('.invalid-feedback');


    //Reset validation
    validationElements.removeClass('is-invalid');
    errorMessageCont.empty().hide();
    formValid = true;

    validationElements.each(function () {

        //Get element data
        let element = $(this),
            id = $(this).attr('id'),
            value = $(this).val(),
            validations = $(this).attr('data-validation').split(","),
            errorContainer = $('[invalid-feedback=' + id + ']'),
            errorMessages = JSON.parse($(this).attr('data-validation-error-messages') || '[]');

        for(const i in validations)
        {
            if (! validations[i]) continue;


            let validationSplit = validations[i].split(":"),
                rule = validationSplit[0],
                ruleValue = validationSplit[1],
                invalidMessage = '';

            //Catch invalid value
            if (basicRules.includes(rule)) invalidMessage = validationFuncs[rule](value, ruleValue, errorMessages[rule]);
            else invalidMessage = window[rule]();

            //Set class (is-invalid) and invalid message in invalid-feedback div
            if (invalidMessage){
                setClassMessageInvalid(element, errorContainer, invalidMessage);
                formValid = false;
            }

        }

    });

    $('.is-invalid:first').focus();
    return formValid;

});
