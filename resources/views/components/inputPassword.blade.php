<div class="input-group">

    <div class="form-floating">
        <input
            type="password"
            class="form-control {{ $classes }}"
            id="{{ $id }}"
            name="{{ $name }}"
            placeholder="{{ $placeholder }}"
            value="{{ $value }}"
            data-validation="{{ $data_validations }}"
            data-validation-error-messages="{{ $validationErrorMessages }}"
            {{ $customAttrs }}>

        <label
            for="{{ $id }}"
            class="form-label {{ $label_classes }}">
            {{ $label }}
        </label>
    </div>

    @include('components.button', [
        'id' => $buttonId,
        'customAttrs' => $buttonCustomAttrs,
        'button_classes' => $button_classes,
        'button_value' => $button_value,
        'icon' => $icon,
        'type' => $type
    ])
</div>

<div
    class="invalid-feedback"
    invalid-feedback="{{ $id }}">
    {{ $invalid_feedback_message }}
</div>

<div
    class="form-text">
    {{ $formText }}
</div>

{{--@include('components.inputPassword', [--}}
{{--    //label--}}
{{--    'label' => __('formInputs.labels.password'),--}}
{{--    'label_classes' => '',--}}

{{--    //input--}}
{{--    'id' => 'password',--}}
{{--    'name' => 'password',--}}
{{--    'value' => '',--}}
{{--    'classes' => Helpers::getValidationErrorClass($errors, 'password'),--}}
{{--    'customAttrs' => '',--}}
{{--    'placeholder' => __('formInputs.placeholders.password'),--}}
{{--    'data_validations' => 'min.string:8',--}}
{{--    'validationErrorMessages' => Helpers::getValidationErrorMessages(["min.string"]),--}}

{{--    //error container--}}
{{--    'invalid_feedback_message' => Helpers::getValidationErrorMessage($errors, 'password'),--}}

{{--    //input form text--}}
{{--    'formText' => '',--}}

{{--    //button--}}
{{--    'buttonId' => 'showPassword',--}}
{{--    'buttonCustomAttrs' => 'showPassword',--}}
{{--    'button_classes' => 'btn btn-outline-primary',--}}
{{--    'button_value' => '',--}}
{{--    'icon' => 'bi bi-eye-fill',--}}
{{--    'type' => 'button'--}}

{{--])--}}
