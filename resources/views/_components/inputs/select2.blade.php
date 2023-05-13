

<div>
    <select class="w-100" name="states[]" multiple="multiple">
        <option value="AL">Alabama</option>
        <option value="WY">Wyoming</option>
    </select>
</div>


<script>
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2({
            placeholder: "Select a state"
        });
    });
</script>

<!--
label
classes
array of options
name
id
values
multiple


-->
{{--@include('_components/inputs/select2', [--}}
{{--    //label--}}
{{--    'label' => __('formInputs.labels.title'),--}}
{{--    'label_classes' => '',--}}

{{--    //input--}}
{{--    'type' => 'text',--}}
{{--    'id' => 'title',--}}
{{--    'name' => 'title',--}}
{{--    'value' => '',--}}
{{--    'classes' => getValidationErrorClass($errors, 'title'),--}}
{{--    'customAttrs' => '',--}}
{{--    'placeholder' => __('formInputs.placeholders.title'),--}}
{{--    'data_validations' => 'required',--}}
{{--    'validationErrorMessages' => getValidationErrorMessages(["required"]),--}}

{{--    //error container--}}
{{--    'invalid_feedback_message' => getValidationErrorMessage($errors, 'title'),--}}

{{--    //input form text--}}
{{--    'formText' => ''--}}
{{--])--}}
