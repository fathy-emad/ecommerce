@extends('layouts.web.auth')

@section('title', 'registration')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/web/auth/login-register.css') }}">
@endsection

@section('content')
@php

echo Helpers::getValidationErrorMessages(["required","min","max"]);
@endphp
    <div class="row p-3 mt-3">

        <div class="col-md mb-5">

            <div class="row mb-5 text-center">
                <div class="col-md mx-auto">
                    <h3> @lang('web/register.createYourAccount') </h3>
                    <p> @lang('web/register.haveAccount') <a href="#"> @lang('common.login') </a></p>
                </div>
            </div>


            <div class="row mb-1 text-center">
                <div class="col-md-6 mx-auto">
                    <h6> @lang('web/register.signUpWith') </h6>
                </div>
            </div>

            <div class="row g-2 mb-4">
                <div class="col-md">
                    @include('components.button', [
                        'id' => '',
                        'customAttrs' => '',
                        'button_classes' => 'btn btn-outline-primary rounded-0 text-center',
                        'button_value' => __('common.facebook'),
                        'icon' => 'bi bi-facebook',
                        'type' => 'button'
                    ])
                </div>
                <div class="col-md">
                    @include('components.button', [
                        'id' => '',
                        'customAttrs' => '',
                        'button_classes' => 'btn btn-outline-danger rounded-0 text-center',
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

            <form>

                <div class="row g-2 mb-3">

                    <div class="col-md">
                        @include('components.input', [
                            //label
                            'label' => __('formInputs.labels.first_name'),
                            'label_classes' => '',

                            //input
                            'type' => 'text',
                            'id' => 'first_name',
                            'name' => 'first_name',
                            'value' => '',
                            'classes' => '',
                            'customAttrs' => '',
                            'placeholder' => __('formInputs.placeholders.first_name'),
                            'data_validations' => 'required,min:4,max:25',
                            'validationErrorMessages' => Helpers::getValidationErrorMessages(["required","min","max"]),

                            //error container
                            'invalid_feedback_message' => '',

                            //input form text
                            'formText' => ''
                        ])
                    </div>

                    <div class="col-md">
                        @include('components.input', [
                            //label
                            'label' => __('formInputs.labels.last_name'),
                            'label_classes' => '',

                            //input
                            'type' => 'text',
                            'id' => 'last_name',
                            'name' => 'last_name',
                            'value' => '',
                            'classes' => '',
                            'customAttrs' => '',
                            'placeholder' => __('formInputs.placeholders.last_name'),
                            'data_validations' => 'required,min:4,max:25',
                            'validationErrorMessages' => Helpers::getValidationErrorMessages(["required","min","max"]),

                            //error container
                            'invalid_feedback_message' => '',

                            //input form text
                            'formText' => ''
                        ])
                    </div>
                </div>

                <div class="row mb-3">

                    <div class="col-md">
                        @include('components.input', [
                            //label
                            'label' => __('formInputs.labels.email'),
                            'label_classes' => '',

                            //input
                            'type' => 'email',
                            'id' => 'email',
                            'name' => 'email',
                            'value' => '',
                            'classes' => '',
                            'customAttrs' => '',
                            'placeholder' => __('formInputs.placeholders.email'),
                            'data_validations' => 'email',
                            'validationErrorMessages' => Helpers::getValidationErrorMessages(["email"]),

                            //error container
                            'invalid_feedback_message' => '',

                            //input form text
                            'formText' => __('formText.email')
                        ])
                    </div>
                </div>

                <div class="row mb-3">

                    <div class="col-md">
                        @include('components.input', [
                            //label
                            'label' => __('formInputs.labels.phone'),
                            'label_classes' => '',

                            //input
                            'type' => 'number',
                            'id' => 'phone',
                            'name' => 'phone',
                            'value' => '',
                            'classes' => '',
                            'customAttrs' => '',
                            'placeholder' => __('formInputs.placeholders.phone'),
                            'data_validations' => 'length:11,phone',
                            'validationErrorMessages' => Helpers::getValidationErrorMessages(["length", "phone"]),

                            //error container
                            'invalid_feedback_message' => '',

                            //input form text
                            'formText' => __('formInputs.formText.phone')
                        ])
                    </div>
                </div>


                <div class="row g-2 mb-3">

                    <div class="col-md">
                        @include('components.inputPassword', [
                            //label
                            'label' => __('formInputs.labels.password'),
                            'label_classes' => '',

                            //input
                            'id' => 'password',
                            'name' => 'password',
                            'value' => '',
                            'classes' => '',
                            'customAttrs' => '',
                            'placeholder' => __('formInputs.placeholders.password'),
                            'data_validations' => 'min:8,complex',
                            'validationErrorMessages' => Helpers::getValidationErrorMessages(["min", "complex"]),

                            //error container
                            'invalid_feedback_message' => '',

                            //input form text
                            'formText' => '',

                            //button
                            'buttonId' => '',
                            'buttonCustomAttrs' => 'showPassword',
                            'button_classes' => 'btn btn-outline-primary',
                            'button_value' => '',
                            'icon' => 'bi bi-eye-fill',
                            'type' => 'button'

                        ])
                    </div>

                    <div class="col-md">
                        @include('components.inputPassword', [
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
                            'data_validations' => 'match:password',
                            'validationErrorMessages' => Helpers::getValidationErrorMessages(["match"]),

                            //error container
                            'invalid_feedback_message' => '',

                            //input form text
                            'formText' => '',

                            //button
                            'buttonId' => '',
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
                    <div class="col-md-12">
                        @include('components.inputCheck', [
                            'label' => __('formInputs.labels.male'),
                            'label_classes' => '',
                            'type' => 'radio',
                            'id' => 'genderMale',
                            'name' => 'gender[]',
                            'value' => '',
                            'classes' => '',
                            'customAttrs' => 'checked',
                            'data_validations' => '',
                            'validationErrorMessages' => '',
                            'invalid_feedback_message' => '',
                            'formText' => '',
                        ])
                    </div>

                    <div class="col-md-12">
                        @include('components.inputCheck', [
                            'label' => __('formInputs.labels.female'),
                            'label_classes' => '',
                            'type' => 'radio',
                            'id' => 'genderFemale',
                            'name' => 'gender[]',
                            'value' => '',
                            'classes' => '',
                            'customAttrs' => '',
                            'data_validations' => '',
                            'validationErrorMessages' => '',
                            'invalid_feedback_message' => '',
                            'formText' => '',
                        ])
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-12">
                        @include('components.button', [
                            'id' => '',
                            'customAttrs' => '',
                            'button_container_classes' => 'border-start border-bottom border-info p-1 text-center ',
                            'button_classes' => 'btn-primary rounded-0 ',
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
                <div class="col-md image_signup rounded-1" style="background-image: url({{ asset('images/web/auth/image_signup.jpg') }})">
                    <div class="image_signup_free_space"></div>
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

@section('scripts')
<script type="text/javascript" src="{{ asset('js/web/auth/register.js') }}"></script>
@endsection
