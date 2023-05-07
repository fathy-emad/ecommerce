const basicRules = ['required', 'min.string', 'max.string', 'email', 'digits', 'phone', 'length', 'confirmed'];
let formValid = true;

const validationFuncs = {

    "required" : (...dataArray) => {

        let [value, , errorMessage] = dataArray;

        if (! value.trim(" ").length) return errorMessage;
    },

    "min.string" : (...dataArray) => {
        let [value, ruleValue, errorMessage] = dataArray;

        errorMessage = errorMessage.replace(':min', ruleValue);

        if (value.trim(" ").length < ruleValue) return errorMessage;
    },

    "max.string" : (...dataArray) => {

        let [value, ruleValue, errorMessage] = dataArray;

        errorMessage = errorMessage.replace(':max', ruleValue);

        if (value.trim(" ").length > ruleValue) return errorMessage;
    },

    "email" : (...dataArray) => {

        let [value, , errorMessage] = dataArray;

        let re = /(^\S)(\w+)@([a-z]+).(com|org|gov|edu|net|mil)(.[a-z]{2})?/g;

        if (! value.match(re)) return errorMessage;
    },

    "digits" : (...dataArray) => {

        let [value, ruleValue, errorMessage] = dataArray;

        let re = /\D/g;

        if (value.match(re) || value.length != 11) return errorMessage.replace(':digits', ruleValue);
    },

    "phone" : (...dataArray) => {

        let [value, , errorMessage] = dataArray;

        let re = /^(011|012|015|010)/g;

        if (! value.match(re)) return errorMessage;
    },

    "length" : (...dataArray) => {

        let [value, ruleValue, errorMessage] = dataArray;

        errorMessage = errorMessage.replace(':value', ruleValue);

        if (value.length != ruleValue) return errorMessage;
    },

    "confirmed" : (...dataArray) => {

        let [value, id, errorMessage] = dataArray;

        let idValue = $('#' + id).val();

        if (value !== idValue) return errorMessage;
    }
}

function resetValidation() {

    $('[data-validation]').removeClass('is-invalid');
    $('.invalid-feedback').empty().hide();
    formValid = true;
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

$('button[type=submit]').on('click', function (e) {

    //Reset validation
    resetValidation();

    $('[data-validation]').each(function () {

        //Get element data
        let element = $(this), id = element.attr('id'), value = element.val(),
            validations = element.attr('data-validation').split(","), errorContainer = $('[invalid-feedback=' + id + ']'),
            errorMessages = JSON.parse(element.attr('data-validation-error-messages') || '[]');

        for(const i in validations)
        {
            if (! validations[i]) continue;

            let validationSplit = validations[i].split(":"), ruleValue = validationSplit[1], rule = validationSplit[0];

            if (! basicRules.includes(validations[i])) basicRules.push(validations[i]);

            //run rule method and get invalid if found
            let foundInvalidMessage = validationFuncs[rule](value, ruleValue, errorMessages[rule]);

            //Set class (is-invalid) and invalid message in invalid-feedback div
            if (foundInvalidMessage){
                setClassMessageInvalid(element, errorContainer, foundInvalidMessage);
                formValid = false;
            }

        }

    });

    $('.is-invalid:first').focus();
    return formValid;

});
