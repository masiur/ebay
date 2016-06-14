@extends('layouts.default')
    @section('content')
    @include('includes.alert')

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <!-- Login Panel Joy 2/10/16-->
                <div id="login-dialog" class="mfp-with-anim  mfp-dialog clearfix">
                    <i class="fa fa-sign-in dialog-icon"></i>
                    <h3>{{ $title }}</h3>
                    <!-- <h5>Welcome back, friend. Login to get started</h5> -->
                    {!! Form::open(array('route' => ['cart.store'], 'method' => 'post', 'class' => 'dialog-form' )) !!}
                        <div class="form-group">
                            <label>Item Type </label>
                            <input type="hidden" name="item_id" value="{{ $item->id }}" placeholder="Amount" class="form-control">

                            <img src="{{ asset($item->img_url)}}" alt="Image Not Found" title="{{ $item->name }}" />
                        </div>
                        <div class="form-group">
                            <label>Amount (Available : {{ $item->amount_in_stock }})</label>
                            <input type="text" name="amount" value="" placeholder="Amount" class="form-control">
                        </div>
                        {!! Form::submit('Add', array('class' => 'btn btn-primary')) !!}
                   {!! Form::close() !!}
                   <!--  <ul class="dialog-alt-links">
                        <li><a class="" href="{{route('user.create')}}" data-effect="mfp-zoom-out">Not member yet</a>
                        </li>
                        <li><a class="" href="#password-recover-dialog" data-effect="mfp-zoom-out">Forgot password</a>
                        </li>
                    </ul> -->
                </div>
                <!-- Login Panel -->
                
            <!--  <h3 >Member Login</h3>
            <h5>Welcome back, friend. Login to get started</h5>

            {{ Form::open(array('route' => 'login', 'method' => 'post', 'class' => 'dialog-form' )) }}
                <div class="form-group">
                    <label>E-mail</label>
                    <input type="text" name="email" placeholder="email@domain.com" class="form-control" >
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="My secret password" class="form-control">
                </div>
                <div class="checkbox">
                    <label>
                        <input name="remember" type="checkbox">Remember me
                    </label>
                </div>
                {{ Form::submit('Log in', array('class' => 'btn btn-primary')) }}
            {{ Form::close() }}


            <ul class="dialog-alt-links">
                <li><a class="popup-text" href="#register-dialog" data-effect="mfp-zoom-out">Not member yet</a>
                </li>
                <li><a class="popup-text" href="#password-recover-dialog" data-effect="mfp-zoom-out">Forgot password</a>
                </li>
            </ul> -->

            </div>
        </div>
    </div>

        <!-- END LOGIN AREA -->

        <div class="gap"></div>


        <div class="gap"></div>



        <!-- //////////////////////////////////
    //////////////END PAGE CONTENT/////////
    ////////////////////////////////////-->
@stop
