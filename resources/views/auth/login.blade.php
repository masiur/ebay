<!DOCTYPE html>
<html lang="en">



@include('includes.header')



<body>

<div class="wrapper-page animated fadeInDown">
    <div class="panel panel-color panel-primary">
        <div class="panel-heading">
            <h3 class="text-center m-t-10"> Sign In to <strong>Velonic</strong> </h3>
        </div>
        <br>
             @include('includes.alert')

            {!! Form::open(array('route' => 'login', 'method' => 'post', 'class' => 'form-horizontal m-t-40')) !!}
            <div class="form-group ">
                <div class="col-xs-12">
                    {!! Form::text('email', '', array('class' => 'form-control', 'placeholder' => 'Email Address', 'type'=>'text','autofocus')) !!}
                </div>
            </div>
            <div class="form-group ">

                <div class="col-xs-12">
                    {!! Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password','type'=>'text')) !!}
                </div>
            </div>

            <div class="form-group ">
                <div class="col-xs-12">
                    <label class="cr-styled">
                        <input type="checkbox" checked>
                        <i class="fa"></i>
                        Remember me
                    </label>
                </div>
            </div>

            <div class="form-group text-right">
                <div class="col-xs-12">
                    {!! Form::submit('Log in', array('class' => 'btn btn-purple w-md', 'type'=>'submit')) !!}
                </div>
            </div>

            <div class="form-group m-t-30">
                <div class="col-sm-7">
                    <a data-toggle="modal" href="#myModal"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
                </div>
                <div class="col-sm-5 text-right">
                    <a href="#">Create an account</a>
                </div>
            </div>
        {!! Form::close() !!}

    </div>
</div>






<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Forgot Password ?</h4>
            </div>
            <div class="modal-body">
                <p>Enter your e-mail address below to reset your password.</p>


                {!! Form::open(array('action' => 'RemindersController@postRemind', 'method' => 'post')) !!}

                {!! Form::email('email', '', array('class' => 'form-control placeholder-no-fix', 'placeholder' => 'Email Address', 'autocomplete'=>'off')) !!}

            </div>
            <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>

                {!! Form::submit('Submit', array('class' => 'btn btn-success')) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
<!-- modal -->


</body>


</html>
