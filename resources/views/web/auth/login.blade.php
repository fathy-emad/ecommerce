@extends('layouts.web.auth')

@section('title', 'Sign in')

@section('styles') @endsection

@section('content')

    <div class="row p-3 mt-3">

        <div class="col-md mb-5">

            <div class="row mb-5 text-center">
                <div class="col-md mx-auto">
                    <h5> @lang('web/login.welcomeBack') </h5>
                    <h3> @lang('common.login') </h3>
                    <p> @lang('web/login.haveNotAccount') <a href="{{ route('web.register') }}"> @lang('common.register') </a></p>
                </div>
            </div>


            <div class="row mb-1 text-center">
                <div class="col-md-6 mx-auto">
                    <h6> @lang('web/login.signInWith') </h6>
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

            <div class="row mb-3 text-center">
                <div class="col-md-6 mx-auto">
                    <h6 class="border-bottom border-info" style="line-height: 0.1em; margin: 10px 0 20px;">
                        <span class="bg-white" style="padding:0 10px; "> @lang('common.or') </span>
                    </h6>
                </div>
            </div>

            <form method="post" action="{{ route('web.login') }}"> @csrf

                <div class="row mb-3">

                    <div class="col-md">
                        @include('components.inputs.input', [
                            //label
                            'label' => __('formInputs.labels.email_phone'),
                            'label_classes' => '',

                            //input
                            'type' => 'text',
                            'id' => 'email_phone',
                            'name' => 'email_phone',
                            'value' => '',
                            'classes' => $errors->any() ? 'is-invalid' : '',
                            'customAttrs' => '',
                            'placeholder' => __('formInputs.placeholders.email_phone'),
                            'data_validations' => 'required',
                            'validationErrorMessages' => getValidationErrorMessages(["required"]),

                            //error container
                            'invalid_feedback_message' => implode(",", $errors->all()),

                            //input form text
                            'formText' => __('formInputs.formText.email_phone')
                        ])
                    </div>
                </div>

                <div class="row g-2">

                    <div class="col-md">
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


                <div class="row g-2 mb-3">

                    <div class="col-md">
                        @include('components.inputs.inputCheck', [
                            //label
                            'label' => __("formInputs.labels.remember"),
                            'label_classes' => '',

                            //input
                            'type' => 'checkbox',
                            'id' => 'remember',
                            'name' => 'remember',
                            'value' => 1,
                            'classes' => '',
                            'customAttrs' => '',
                            'data_validations' => '',
                            'validationErrorMessages' => '',

                            //error message
                            'invalid_feedback_message' => '',

                            //form text
                            'formText' => '',
                        ])
                    </div>
                    <div class="col-md text-end">
                        <a href="#"> @lang('web/login.forgotPassword') </a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md border-start border-bottom border-info p-1 text-center">
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
