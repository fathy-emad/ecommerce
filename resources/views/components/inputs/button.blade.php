<button
    type="{{ $type }}"
    class="text-center btn {{ $button_classes }}"
    id="{{ $id }}" {{ $customAttrs }}>
    {{ $button_value }}
    &nbsp;<i class="{{ $icon }}"></i>
</button>

{{--@include('components.button', [--}}
{{--    'id' => '',--}}
{{--    'customAttrs' => '',--}}
{{--    'button_classes' => 'btn-primary rounded-0 w-100',--}}
{{--    'button_value' => __('common.register'),--}}
{{--    'icon' => '',--}}
{{--    'type' => 'submit'--}}
{{--])--}}

