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
{{--    'label' => __('formInputs.labels.password_confirmation'),--}}
{{--    'label_classes' => '',--}}

{{--    //input--}}
{{--    'id' => 'password_confirmation',--}}
{{--    'name' => 'password_confirmation',--}}
{{--    'value' => '',--}}
{{--    'classes' => '',--}}
{{--    'customAttrs' => '',--}}
{{--    'placeholder' => __('formInputs.placeholders.password_confirmation'),--}}
{{--    'data_validations' => 'match:password',--}}
{{--    'validationErrorMessages' => Helpers::getValidationErrorMessages(["match"]),--}}

{{--    //error container--}}
{{--    'invalid_feedback_message' => '',--}}

{{--    //input form text--}}
{{--    'formText' => '',--}}

{{--    //button--}}
{{--    'buttonId' => '',--}}
{{--    'buttonCustomAttrs' => 'showPassword',--}}
{{--    'button_classes' => 'btn btn-outline-primary',--}}
{{--    'button_value' => '',--}}
{{--    'icon' => 'bi bi-eye-fill',--}}
{{--    'type' => 'button'--}}
{{--])--}}
