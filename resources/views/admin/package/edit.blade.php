@extends('admin.layouts.default')
@section('content')
    <div class="wraper container-fluid">

        @include('includes.alert')
        <!-- <div class="page-title"> 
            <h3 class="title">{!!$title!!}</h3> 
        </div> -->
        <!-- Masiur Rahman Siddiki -->
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="panel panel-default">

                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                    <h4>{{ $title }}</h4>
                            </div>
                            <div class="col-md-6">                            
                                <a class="pull-right" href="{!! route('package.index')!!}"><button class="btn btn-success">Sub Category List</button></a>
                            </div>
                         </div>
                    </div>

                    <div class="panel-body">
                            
                                <div class=" form"> 

                                    {!! Form::model($package, array('route' => ['package.update',$package->id], 'method' => 'PUT', 'class' => 'cmxform form-horizontal tasi-form')) !!}


                                    <div class="form-group">
                                        {!! Form::label('title', "Package title*", array('class' => 'control-label col-lg-2')) !!}
                                        <div class="col-lg-6">
                                            {!! Form::text('title', null, array('class' => 'form-control', 'placeholder' => 'Enter Package Title', 'required' => 'required', 'aria-required' =>'true')) !!}
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('monthly_fee', "Monthly Fee*", array('class' => 'control-label col-lg-2')) !!}
                                        <div class="col-lg-6">
                                            {!! Form::text('monthly_fee', null, array('class' => 'form-control','placeholder' => 'Amount of Monthly Fee', 'required' => 'required')) !!}
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('sales_limit', "Sales Limit*", array('class' => 'control-label col-lg-2')) !!}
                                        <div class="col-lg-6">
                                            {!! Form::text('sales_limit', null, array('class' => 'form-control', 'placeholder' => 'Sales Limit', 'required' => 'required', 'aria-required' =>'true')) !!}
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-6">
                                        {!! Form::submit('Save Changes', array('class' => 'btn btn-success')) !!}
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
   <!-- <script type="text/javascript">

        // jQuery(document).ready(function(){
                
        //         $('.wysihtml5').wysihtml5();

        //         $('.summernote').summernote({
        //             height: 200,                 // set editor height

        //             minHeight: null,             // set minimum height of editor
        //             maxHeight: null,             // set maximum height of editor

        //             focus: true                 // set focus to editable area after initializing summernote
        //         });

        // });
    </script> -->


@stop