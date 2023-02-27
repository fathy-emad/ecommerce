<div class="form-floating">
    <input type="text" class="form-control {{ $classes }}" id="{{ $id }}" name="{{ $name }}" {{ $customAttrs }}
           placeholder="{{ $placeholder }}" value="{{ $value }}" data-validation="{{ $data_validations }}">
    <label for="{{ $id }}" class="form-label {{ $label_classes }}">{{ $label }}</label>
    <div class="invalid-feedback"> {{ $invalid_feedback_message }} </div>
    <div class="form-text">{{ $formText }}</div>
</div>

