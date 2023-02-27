<div class="input-group">
    <div class="form-floating">
        <input type="password" class="form-control {{ $classes }}" id="{{ $id }}" name="{{ $name }}" {{ $customAttrs }}
            placeholder="{{ $placeholder }}" value="{{ $value }}" data-validation="{{ $data_validations }}">
        <label for="{{ $id }}" class="form-label {{ $label_classes }}">{{ $label }}</label>
    </div>
    <button class="btn btn-primary" type="button"><i class="bi bi-eye-fill"></i></button>
</div>
<div class="invalid-feedback"> {{ $invalid_feedback_message }} </div>
<div class="form-text">{{ $formText }}</div>
