<div class="form-check">
    <input
        type="{{ $type }}"
        class="form-check-input {{ $classes }}"
        id="{{ $id }}"
        name="{{ $name }}"
        value="{{ $value }}"
        data-validation="{{ $data_validations }}"
        data-validation-error-messages="{{ $validationErrorMessages }}"
        {{ $customAttrs }}>

    <label
        class="form-check-label"
        for="{{ $id }}">
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


{{--@include('_components.inputCheck', [--}}
{{--    //label--}}
{{--    'label' => __('formInputs.labels.male'),--}}
{{--    'label_classes' => '',--}}
{{--    --}}
{{--    //input--}}
{{--    'type' => 'radio',--}}
{{--    'id' => 'genderMale',--}}
{{--    'name' => 'gender[]',--}}
{{--    'value' => '',--}}
{{--    'classes' => '',--}}
{{--    'customAttrs' => 'checked',--}}
{{--    'data_validations' => '',--}}
{{--    'validationErrorMessages' => '',--}}
{{--    --}}
{{--    //error message--}}
{{--    'invalid_feedback_message' => '',--}}
{{--    --}}
{{--    //form text--}}
{{--    'formText' => '',--}}
{{--])--}}
