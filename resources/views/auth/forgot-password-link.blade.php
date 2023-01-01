@extends('common.home.layouts.app')
@section('content')
    <div class="fix-height"></div>
    <section class="reset-password" style="background-color: #E8F8F2;">
        <div class="container-fluid m-width">
            <div class="row col-12 justify-content-md-middle p-md-5">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-md-6 mt-md-auto col-xl-4 p-2">
                                <img src="/new-design/assets/image/home/reset.jpeg" alt="">
                            </div>
                            <div class="col-12 col-md-6 p-2 mt-5">
                                <div class="reset-password-text">
                                    <h1>Change your Password</h1>
                                    <p>Enter your email, and we'll send you the link to reset your password</p>
                                </div>
                                <div class="form-content mt-2">
                                    <form action="{{ route('reset.password.post') }}" method="POST">
                                        @csrf()
                                        <input type="hidden" name="token" value="{{ $token }}">
                                        <div class="form-area-wrapper mb-4">
                                            <div class="form-input-wrapper">
                                                <input type="text" class="form-control" placeholder="E-Mail Address" value="{{ old('email') }}" name="email">
                                                @if ($errors->has('email'))
                                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-area-wrapper mb-4">
                                            <div class="form-input-wrapper">
                                                <input type="text" class="form-control" placeholder="Password" name="password">
                                                @if ($errors->has('password'))
                                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-area-wrapper">
                                            <div class="form-input-wrapper">
                                                <input type="text" class="form-control" placeholder="Confirm Password" name="password_confirmation">
                                                @if ($errors->has('password_confirmation'))
                                                    <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="d-grid gap-2 col-6 mx-auto mt-3">
                                            <button class="btn btn-primary" type="submit" style="background-color: #208C84;">Confirm Change</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection