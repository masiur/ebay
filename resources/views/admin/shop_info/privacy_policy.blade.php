@extends('admin.layouts.default')
@section('content')
    <div class="wraper container-fluid">

        @include('includes.alert')
                <!-- <div class="page-title">
            <h3 class="title">{!!$title!!}</h3> 
        </div> -->
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="panel panel-default">

                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                <h4>{{ $title }}</h4>
                            </div>
                        </div>
                    </div>

                    <div class="panel-body">

                        <div class=" form">

                            {!! Form::model($shop, ['route' => ['shop.pp.update',$shop->id], 'method' => 'PUT', 'files' => 'true', 'class' => 'form-horizontal']) !!}

                            <div class="form-group">
                                {!! Form::label('privacy_policy', "Privacy Policy: ", array('class' => 'control-label col-lg-2')) !!}
                                <div class="col-lg-6">
                                    {!! Form::textarea('privacy_policy', null, array('class' => 'form-control','placeholder' => 'Terms and Conditions', 'id' =>'summernote')) !!}
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-6">
                                    {!! Form::submit('Update Terms & Conditions', array('class' => 'btn btn-success')) !!}
                                </div>
                            </div>

                            {!! Form::close() !!}
                        </div>

                    </div>
                </div>

            </div>

        </div>

        @stop


        @section('style')

        {!! Html::style('assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css') !!}
        {!! Html::style('assets/summernote/summernote.css') !!}
        @stop

        @section('script')

        {!! Html::script('assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js') !!}
        {!! Html::script('assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js') !!}
        {!! Html::script('assets/summernote/summernote.min.js') !!}


        {!! Html::script('assets/jquery.validate/jquery.validate.min.js') !!}
        {!! Html::script('assets/jquery.validate/form-validation-init.js') !!}



                <!-- for editor-->
        <script type="text/javascript">

            jQuery(document).ready(function(){

                $('.wysihtml5').wysihtml5();

                $('#summernote').summernote({
                    height: 200,                 // set editor height

                    minHeight: null,             // set minimum height of editor
                    maxHeight: null,             // set maximum height of editor

                    focus: true                 // set focus to editable area after initializing summernote
                });

            });
        </script>


@stop