<div class="form-floating">
    <input
        type="{{ $type }}"
        class="form-control {{ $classes }}"
        id="{{ $id }}" name="{{ $name }}"
        value="{{ $value ?: old($name) }}"
        placeholder="{{ $placeholder }}"
        data-validation="{{ $data_validations }}"
        data-validation-error-messages="{{ $validationErrorMessages }}"
        {{ $customAttrs }}>

    <label
        for="{{ $id }}"
        class="form-label {{ $label_classes }}">
        {{ $label }}
    </label>

    <div
        class="invalid-feedback"
        invalid-feedback="{{ $id }}">
        {{ $invalid_feedback_message }}
    </div>

    <div
        class="form-text">
        {{ $formText }}
    </div>
</div>

{{--@include('_components.input', [--}}
{{--    //label--}}
{{--    'label' => __('formInputs.labels.phone'),--}}
{{--    'label_classes' => '',--}}

{{--    //input--}}
{{--    'type' => 'number',--}}
{{--    'id' => 'phone',--}}
{{--    'name' => 'phone',--}}
{{--    'value' => '',--}}
{{--    'classes' => Helpers::getValidationErrorClass($errors, 'phone'),--}}
{{--    'customAttrs' => '',--}}
{{--    'placeholder' => __('formInputs.placeholders.phone'),--}}
{{--    'data_validations' => 'digits:11,phone',--}}
{{--    'validationErrorMessages' => Helpers::getValidationErrorMessages(["digits", "phone"]),--}}

{{--    //error container--}}
{{--    'invalid_feedback_message' => Helpers::getValidationErrorMessage($errors, 'phone'),--}}

{{--    //input form text--}}
{{--    'formText' => __('formInputs.formText.phone')--}}
{{--])--}}

