@extends('layouts.admin.auth')

@section('title', 'Sign in')

@section('content')

    <div class="row p-3">

        <div class="col-md">

            <div class="row mb-3 text-center">
                <div class="col-md">
                    <h5> @lang('web/login.welcomeBack') </h5>
                    <h3> @lang('common.login') </h3>
                </div>
            </div>

            <form method="post" action="{{ route('admin.login') }}"> @csrf

                <div class="row mb-3">

                    <div class="col-md-6 m-auto">
                        @include('components.inputs.input', [
                            //label
                            'label' => __('formInputs.labels.email'),
                            'label_classes' => '',

                            //input
                            'type' => 'email',
                            'id' => 'email',
                            'name' => 'email',
                            'value' => '',
                            'classes' => $errors->any() ? 'is-invalid' : '',
                            'customAttrs' => '',
                            'placeholder' => __('formInputs.placeholders.email'),
                            'data_validations' => 'required',
                            'validationErrorMessages' => getValidationErrorMessages(["required"]),

                            //error container
                            'invalid_feedback_message' => implode(",", $errors->all()),

                            //input form text
                            'formText' => __('formInputs.formText.email')
                        ])
                    </div>
                </div>

                <div class="row g-2">

                    <div class="col-md-6 m-auto">
                        @include('components.inputs.inputPassword', [
                            //label
                            'label' => __('formInputs.labels.password'),
                            'label_classes' => '',

                            //input
                            'id' => 'password',
                            'name' => 'password',
                            'value' => '',
                            'classes' => $errors->any() ? 'is-invalid' : '',
                            'customAttrs' => '',
                            'placeholder' => __('formInputs.placeholders.password'),
                            'data_validations' => 'required',
                            'validationErrorMessages' => getValidationErrorMessages(["required"]),

                            //error container
                            'invalid_feedback_message' => '',

                            //input form text
                            'formText' => '',

                            //button
                            'buttonId' => 'showPassword',
                            'buttonCustomAttrs' => 'showPassword',
                            'button_classes' => 'btn btn-outline-primary',
                            'button_value' => '',
                            'icon' => 'bi bi-eye-fill',
                            'type' => 'button'

                        ])
                    </div>
                </div>


                <div class="row mt-3">
                    <div class="col-md-6 m-auto border-start border-bottom border-info p-1 text-center">
                        @include('components.inputs.button', [
                            'id' => 'submit',
                            'customAttrs' => '',
                            'button_classes' => 'btn-primary rounded-0 w-100',
                            'button_value' => __('common.login'),
                            'icon' => '',
                            'type' => 'submit'
                        ])
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
