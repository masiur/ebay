@extends('layouts.default')
    @section('content')
        

        <div id="register-dialog" class="mfp-with-anim  mfp-dialog clearfix">
            <i class="fa fa-edit dialog-icon"></i>
            <h3>Member Register</h3>
            <h5>Ready to get best offers? Let's get started!</h5>
            <form class="dialog-form" action="{{ route('user.store') }}" method="POST">
            {{ csrf_field() }}
            @include('includes.alert')
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" placeholder="John Doe" class="form-control">
                </div>
                <div class="form-group">
                    <label>E-mail</label>
                    <input type="text" name="email" placeholder="email@domain.com" class="form-control">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="My secret password" class="form-control">
                </div>
                <div class="form-group">
                    <label>Repeat Password</label>
                    <input type="password" name="password_confirmation" placeholder="Type your password again" class="form-control">
                </div>
                <div class="form-group">
                    <label>Your Address</label>
                    <input type="text" name="address" placeholder="Type your address" class="form-control">
                </div>
                <div class="form-group">
                    <label>Your Address</label>
                    <input type="text" name="phone" placeholder="Type your phone number" class="form-control">
                </div>
                <!-- <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label>Your Area</label>
                            <input type="password" placeholder="Boston" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Postal/Zip</label>
                            <input type="password" placeholder="12345" class="form-control">
                        </div>
                    </div>
                </div> -->
                <div class="checkbox">
                    <label>
                        <input type="checkbox">Get hot offers via e-mail
                    </label>
                </div>
                <input type="submit" value="Sign Up" class="btn btn-primary">
            </form>
            <ul class="dialog-alt-links">
                <li><a  href="{{ route('login') }}" data-effect="mfp-zoom-out">Already member</a>
                </li>
            </ul>
        </div>


@stop