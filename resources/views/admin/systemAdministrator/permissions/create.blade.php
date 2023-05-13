@extends('_layouts.admin.dashboard')

@section('cssStyle')
@endsection

@section('content')

    <form>
        <div class="row">
            <div class="col-md mb-3">
                @include('_components/inputs/input', [
                    //label
                    'label' => __('formInputs.labels.title'),
                    'label_classes' => '',

                    //input
                    'type' => 'text',
                    'id' => 'title',
                    'name' => 'title',
                    'value' => '',
                    'classes' => getValidationErrorClass($errors, 'title'),
                    'customAttrs' => '',
                    'placeholder' => __('formInputs.placeholders.title'),
                    'data_validations' => 'required',
                    'validationErrorMessages' => getValidationErrorMessages(["required"]),

                    //error container
                    'invalid_feedback_message' => getValidationErrorMessage($errors, 'title'),

                    //input form text
                    'formText' => ''
                ])
            </div>
        </div>
        <div class="row">
            @foreach(getSideMenu() AS $main => $subData)
            <div class="col-md-3">
                <h4>{{ __('pages.'."$main") }}</h4>
                @foreach($subData AS $sub => $pages)
                    <h5>{{ __('pages.'."$main.$sub") }}</h5>
                        @foreach($pages AS $page)
                            @include('_components/inputs/inputCheck', [
                                //label
                                'label' => __('pages.'."$main.$sub.$page"),
                                'label_classes' => '',

                                //input
                                'type' => 'checkbox',
                                'id' => 'permissions',
                                'name' => 'permissions[]',
                                'value' => "$main.$sub.$page",
                                'classes' => '',
                                'customAttrs' => '',
                                'data_validations' => '',
                                'validationErrorMessages' => '',

                                //error message
                                'invalid_feedback_message' => '',

                                //form text
                                'formText' => '',
                            ])
                        @endforeach
                @endforeach
            </div>
            @endforeach
        </div>
        <div class="row mt-3">
            <div class="col-md-6 m-auto border-start border-bottom border-info p-1 text-center">
                @include('_components/inputs/button', [
                    'id' => 'submit',
                    'customAttrs' => '',
                    'button_classes' => 'btn-primary rounded-0 w-100',
                    'button_value' => __('common.create'),
                    'icon' => '',
                    'type' => 'submit'
                ])
            </div>
        </div>
    </form>
@endsection

@section('jsScripts')

@endsection
