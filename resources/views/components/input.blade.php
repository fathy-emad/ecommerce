<div class="form-floating">
    <input
        type="{{ $type }}"
        class="form-control {{ $classes }}"
        id="{{ $id }}" name="{{ $name }}"
        value="{{ $value }}"
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

{{--@include('components.input', [--}}
{{--    //label--}}
{{--    'label' => __('formInputs.labels.phone'),--}}
{{--    'label_classes' => '',--}}

{{--    //input--}}
{{--    'type' => 'number',--}}
{{--    'id' => 'phone',--}}
{{--    'name' => 'phone',--}}
{{--    'value' => '',--}}
{{--    'classes' => '',--}}
{{--    'customAttrs' => '',--}}
{{--    'placeholder' => __('formInputs.placeholders.phone'),--}}
{{--    'data_validations' => 'phone',--}}
{{--    'validationErrorMessages' => Helpers::getValidationErrorMessages(["phone"]),--}}

{{--    //error container--}}
{{--    'invalid_feedback_message' => '',--}}

{{--    //input form text--}}
{{--    'formText' => __('formInputs.formText.phone')--}}
{{--])--}}

