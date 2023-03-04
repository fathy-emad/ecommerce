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

{{--//label--}}
{{--'label' => '',--}}
{{--'label_classes' => '',--}}

{{--//input--}}
{{--'id' => '',--}}
{{--'name' => '',--}}
{{--'value' => '',--}}
{{--'classes' => '',--}}
{{--'customAttrs' => '',--}}
{{--'placeholder' => '',--}}
{{--'data_validations' => '',--}}
{{--'validationErrorMessages' => Helpers::getValidationErrorMessages(["min", "complex"]),--}}

{{--//error container--}}
{{--'invalid_feedback_message' => '',--}}

{{--//input form text--}}
{{--'formText' => '',--}}

{{--//button--}}
{{--'buttonId' => '',--}}
{{--'buttonCustomAttrs' => '',--}}
{{--'button_classes' => '',--}}
{{--'button_value' => '',--}}
{{--'icon' => '',--}}
{{--'type' => ''--}}
