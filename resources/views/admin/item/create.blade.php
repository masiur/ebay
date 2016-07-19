@extends('admin.layouts.default')
@section('content')
    <div class="wraper container-fluid">

        @include('admin.includes.alert')
        <div class="page-title"> 
            <h3 class="title">{!!$title!!}</h3> 
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="panel panel-default">

                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                    <!-- <h4>{{ $title }}</h4> -->
                            </div>
                            @role('admin')
                            <div class="col-md-6">                            
                                <a class="pull-right" href="{!! route('product.index')!!}"><button class="btn btn-success">Product List</button></a>
                            </div>
                            @endrole
                            @role('user')
                            <div class="col-md-6">
                                <a class="pull-right" href="{!! route('product.indexForMember')!!}"><button class="btn btn-success">My Products</button></a>
                            </div>
                            @endrole
                        </div>
                    </div>

                    <div class="panel-body">
                            
                                <div class=" form"> 

                                    {!! Form::open(array('route' => 'product.store' , 'method' => 'post', 'files' => 'true', 'class' => 'cmxform form-horizontal tasi-form')) !!}


                                    <div class="form-group">
                                        {!! Form::label('name', "Product Name*: ", array('class' => 'control-label col-lg-2')) !!}
                                        <div class="col-lg-6">
                                            {!! Form::text('name', null, array('class' => 'form-control', 'placeholder' => 'Enter Product Name', 'required' => 'required', 'aria-required' =>'true')) !!}
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('product_category_id', "Product Category*: ", array('class' => 'control-label col-lg-2')) !!}
                                        <div class="col-lg-6">
                                            {!! Form::select('product_category_id', $product_categories, null, array('class' => 'form-control', 'required' => 'required')) !!}
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('price', "Price*: ", array('class' => 'control-label col-lg-2')) !!}
                                        <div class="col-lg-6">
                                            {!! Form::text('price', null, array('class' => 'form-control', 'placeholder' => 'Price of the Product', 'required' => 'required')) !!}
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('amount', "Stock Amount*: ", array('class' => 'control-label col-lg-2')) !!}
                                        <div class="col-lg-6">
                                            {!! Form::text('amount', null, array('class' => 'form-control', 'placeholder' => 'Amount in Stock', 'required' => 'required')) !!}
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('description', "Description: ", array('class' => 'control-label col-lg-2')) !!}
                                        <div class="col-lg-6">
                                            {!! Form::textarea('description', null, array('class' => 'form-control','placeholder' => 'Description of the Item', 'row' => 3)) !!}
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('img_url', "Image of the Item*", array('class' => 'control-label col-lg-2')) !!}
                                        <div class="col-lg-6">
                                            {!! Form::file('img_url', null, array('class' => 'form-control', 'placeholder' => 'Image of the Item', 'required' => 'required')) !!}
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-6">
                                        {!! Form::submit('Add Product', array('class' => 'btn btn-success')) !!}
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

        jQuery(document).ready(function(){
                
                $('.wysihtml5').wysihtml5();

                $('.summernote').summernote({
                    height: 200,                 // set editor height

                    minHeight: null,             // set minimum height of editor
                    maxHeight: null,             // set maximum height of editor

                    focus: true                 // set focus to editable area after initializing summernote
                });

        });
    </script> -->


@stop