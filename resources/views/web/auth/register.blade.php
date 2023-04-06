@extends('layouts.web.auth')

@section('title', 'Sign up')

@section('styles') @endsection

@section('content')

<div class="row p-3 mt-3">

    <div class="col-md mb-5">

        <div class="row mb-5 text-center">
            <div class="col-md mx-auto">
                <h3> @lang('web/register.createYourAccount') </h3>
                <p> @lang('web/register.haveAccount') <a href="{{ route('web.login') }}"> @lang('common.login') </a></p>
            </div>
        </div>


        <div class="row mb-1 text-center">
            <div class="col-md-6 mx-auto">
                <h6> @lang('web/register.signUpWith') </h6>
            </div>
        </div>

        <div class="row g-2 mb-4">
            <div class="col-md">
                @include('components.inputs.button', [
                    'id' => 'facebook',
                    'customAttrs' => 'socialAuth=facebook ',
                    'button_classes' => 'btn btn-outline-primary rounded-0 text-center w-100',
                    'button_value' => __('common.facebook'),
                    'icon' => 'bi bi-facebook',
                    'type' => 'button'
                ])
            </div>
            <div class="col-md">
                @include('components.inputs.button', [
                    'id' => 'google',
                    'customAttrs' => 'socialAuth=google ',
                    'button_classes' => 'btn btn-outline-danger rounded-0 text-center w-100',
                    'button_value' => __('common.google'),
                    'icon' => 'bi bi-google',
                    'type' => 'button'
                ])
            </div>
        </div>

        <div class="row mb-3 text-center inputs_container_title">
            <div class="col-md-6 mx-auto">
                <h6 class="border-bottom border-info" style="line-height: 0.1em; margin: 10px 0 20px;">
                    <span class="bg-white" style="padding:0 10px; "> @lang('common.or') </span>
                </h6>
            </div>
        </div>

        <form method="post" action="{{ route('web.register') }}"> @csrf

            <div class="row g-2 mb-3">

                <div class="col-md">
                    @include('components.inputs.input', [
                        //label
                        'label' => __('formInputs.labels.first_name'),
                        'label_classes' => '',

                        //input
                        'type' => 'text',
                        'id' => 'first_name',
                        'name' => 'first_name',
                        'value' => '',
                        'classes' => Helpers::getValidationErrorClass($errors, 'first_name'),
                        'customAttrs' => '',
                        'placeholder' => __('formInputs.placeholders.first_name'),
                        'data_validations' => 'min.string:4,max.string:25',
                        'validationErrorMessages' => Helpers::getValidationErrorMessages(["min.string", "max.string"]),

                        //error container
                        'invalid_feedback_message' => Helpers::getValidationErrorMessage($errors, 'first_name'),

                        //input form text
                        'formText' => ''
                    ])
                </div>

                <div class="col-md">
                    @include('components.inputs.input', [
                        //label
                        'label' => __('formInputs.labels.last_name'),
                        'label_classes' => '',

                        //input
                        'type' => 'text',
                        'id' => 'last_name',
                        'name' => 'last_name',
                        'value' => '',
                        'classes' => Helpers::getValidationErrorClass($errors, 'last_name'),
                        'customAttrs' => '',
                        'placeholder' => __('formInputs.placeholders.last_name'),
                        'data_validations' => 'min.string:4,max.string:25',
                        'validationErrorMessages' => Helpers::getValidationErrorMessages(["min.string", "max.string"]),

                        //error container
                        'invalid_feedback_message' => Helpers::getValidationErrorMessage($errors, 'last_name'),

                        //input form text
                        'formText' => ''
                    ])
                </div>
            </div>

            <div class="row mb-3">

                <div class="col-md">
                    @include('components.inputs.input', [
                        //label
                        'label' => __('formInputs.labels.email'),
                        'label_classes' => '',

                        //input
                        'type' => 'email',
                        'id' => 'email',
                        'name' => 'email',
                        'value' => '',
                        'classes' => Helpers::getValidationErrorClass($errors, 'email'),
                        'customAttrs' => '',
                        'placeholder' => __('formInputs.placeholders.email'),
                        'data_validations' => 'email',
                        'validationErrorMessages' => Helpers::getValidationErrorMessages(["email"]),

                        //error container
                        'invalid_feedback_message' => Helpers::getValidationErrorMessage($errors, 'email'),

                        //input form text
                        'formText' => __('formInputs.formText.email')
                    ])
                </div>
            </div>

            <div class="row mb-3">

                <div class="col-md">
                    @include('components.inputs.input', [
                        //label
                        'label' => __('formInputs.labels.phone'),
                        'label_classes' => '',

                        //input
                        'type' => 'number',
                        'id' => 'phone',
                        'name' => 'phone',
                        'value' => '',
                        'classes' => Helpers::getValidationErrorClass($errors, 'phone'),
                        'customAttrs' => '',
                        'placeholder' => __('formInputs.placeholders.phone'),
                        'data_validations' => 'digits:11,phone',
                        'validationErrorMessages' => Helpers::getValidationErrorMessages(["digits", "phone"]),

                        //error container
                        'invalid_feedback_message' => Helpers::getValidationErrorMessage($errors, 'phone'),

                        //input form text
                        'formText' => __('formInputs.formText.phone')
                    ])
                </div>
            </div>


            <div class="row g-2 mb-3">

                <div class="col-md">
                    @include('components.inputs.inputPassword', [
                        //label
                        'label' => __('formInputs.labels.password'),
                        'label_classes' => '',

                        //input
                        'id' => 'password',
                        'name' => 'password',
                        'value' => '',
                        'classes' => Helpers::getValidationErrorClass($errors, 'password'),
                        'customAttrs' => '',
                        'placeholder' => __('formInputs.placeholders.password'),
                        'data_validations' => 'min.string:8,confirmed:password_confirmation',
                        'validationErrorMessages' => Helpers::getValidationErrorMessages(["min.string", "confirmed"]),

                        //error container
                        'invalid_feedback_message' => Helpers::getValidationErrorMessage($errors, 'password'),

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

                <div class="col-md">
                    @include('components.inputs.inputPassword', [
                        //label
                        'label' => __('formInputs.labels.password_confirmation'),
                        'label_classes' => '',

                        //input
                        'id' => 'password_confirmation',
                        'name' => 'password_confirmation',
                        'value' => '',
                        'classes' => '',
                        'customAttrs' => '',
                        'placeholder' => __('formInputs.placeholders.password_confirmation'),
                        'data_validations' => '',
                        'validationErrorMessages' => '',

                        //error container
                        'invalid_feedback_message' => '',

                        //input form text
                        'formText' => '',

                        //button
                        'buttonId' => 'showPasswordConfirmation',
                        'buttonCustomAttrs' => 'showPassword',
                        'button_classes' => 'btn btn-outline-primary',
                        'button_value' => '',
                        'icon' => 'bi bi-eye-fill',
                        'type' => 'button'
                    ])
                </div>
                <div class="form-text mb-3">@lang('formInputs.formText.password')</div>
            </div>


            <div class="row mb-3">
                @foreach(\App\Constants\Genders::getArray() AS $key => $gender)
                    <div class="col-md-12">
                        @include('components.inputs.inputCheck', [
                            //label
                            'label' => __("common.". $gender),
                            'label_classes' => '',

                            //input
                            'type' => 'radio',
                            'id' => $gender,
                            'name' => 'gender[]',
                            'value' => $key,
                            'classes' => '',
                            'customAttrs' => $key ?: 'checked',
                            'data_validations' => '',
                            'validationErrorMessages' => '',

                            //error message
                            'invalid_feedback_message' => '',

                            //form text
                            'formText' => '',
                        ])
                    </div>
                @endforeach
            </div>


            <div class="row">
                <div class="col-md border-start border-bottom border-info p-1 text-center">
                    @include('components.inputs.button', [
                        'id' => 'submit',
                        'customAttrs' => '',
                        'button_classes' => 'btn-primary rounded-0 w-100',
                        'button_value' => __('common.register'),
                        'icon' => '',
                        'type' => 'submit'
                    ])
                </div>
            </div>

        </form>
    </div>

    <div class="col-md info_container">
        <div class="row p-2 text-center">
            <div class="col-md mx-auto">
                <h4> @lang('web/register.plateFormInfo') </h4>
            </div>
        </div>

        <div class="row mb-1 p-3">
            <div class="col-md rounded-1" style="background-image: url({{ asset('images/web/auth/image_signup.jpg') }})">
                <div class="p-1">
                    <ul>
                        <li> A 20% off voucher for your next purchase </li>
                        <li>Access to Members Only products and sales</li>
                        <li>Access to adidas Running and Training apps</li>
                        <li>Special offers and promotions</li>
                    </ul>
                    <p class="p-1">As an adiClub member you get rewarded with what you love for doing what you love.
                        <br>Sign up today and receive immediate access to these Level 1 benefits:</p>

                   <p class="p-1">Join now to start earning points, reach new levels and unlock more rewards
                       and benefits from adiClub.  </p> <br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts') @endsection
