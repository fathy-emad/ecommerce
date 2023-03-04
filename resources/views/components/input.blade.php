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

{{--//label--}}
{{--'label' => '',--}}
{{--'label_classes' => '',--}}

{{--//input--}}
{{--'type' => '',--}}
{{--'id' => '',--}}
{{--'name' => '',--}}
{{--'value' => '',--}}
{{--'classes' => '',--}}
{{--'customAttrs' => '',--}}
{{--'placeholder' => '',--}}
{{--'data_validations' => '',--}}
{{--'validationErrorMessages' => Helpers::getValidationErrorMessages(["required","min","max"]),--}}

{{--//error container--}}
{{--'invalid_feedback_message' => '',--}}

{{--//input form text--}}
{{--'formText' => ''--}}

