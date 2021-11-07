@extends('admin.layouts.master')
@section('content-me')
    <section class="row m-0">
        @if (session('create'))
            <section class="col-8 offset-2 alert alert-form-for-me mt-5">
                <h4 class="text-center">{{session('create')}}</h4>
            </section>
        @endif
        <section class="col-8 offset-2 mt-5 mb-5 p-4 main-section-for-me">
            {!! Form::model($product,['route' => ['product.update',$product->id],'method'=>'put', 'files' => true]) !!}
            <section class="form-group">
                {!! Form::label('title', 'Title :', ['class' => 'text-white label-form-for-me']) !!}
                {!! Form::text('title',old('title'), ['class' => 'form-control text-form-for-me'
                     ,'placeholder'=>'please enter title product..!']); !!}
                @error('title')
                <div class="text-error-for-slider">
                    <p class="text-danger text-center font-weight-bolder">{{$message}}</p>
                </div>
                @enderror
            </section>
            <section class="form-group">
                {!! Form::label('alt', 'Alt image :', ['class' => 'text-white label-form-for-me']) !!}
                {!! Form::text('alt',old('alt'), ['class' => 'form-control text-form-for-me'
                     ,'placeholder'=>'please enter alt image product..!']); !!}
                @error('alt')
                <div class="text-error-for-slider">
                    <p class="text-danger text-center font-weight-bolder">{{$message}}</p>
                </div>
                @enderror
            </section>
            <section class="form-group">
                {!! Form::label('image', 'Image :', ['class' => 'text-white label-form-for-me']) !!}
                {!! Form::file('image', ['class' => 'form-control text-form-for-me'
                     ,'placeholder'=>'please image product..!']); !!}
                <p class="text-left mt-4"><img src="{{asset('images/product/'.$product->image)}}" alt=""
                                               width="100" height="100"></p>
                @error('image')
                <div class="text-error-for-slider">
                    <p class="text-danger text-center font-weight-bolder">{{$message}}</p>
                </div>
                @enderror
            </section>
            <section class="form-group">
                {!! Form::label('body', 'Body :', ['class' => 'text-white label-form-for-me']) !!}
                {!! Form::textarea('body',old('body'), ['class' => 'form-control textarea-form-for-me-big'
                     ,'placeholder'=>'please enter body product..!']); !!}
                @error('body')
                <div class="text-error-for-slider">
                    <p class="text-danger text-center font-weight-bolder">{{$message}}</p>
                </div>
                @enderror
            </section>
            <section class="form-group">
                {!! Form::label('title_web', 'Title web :', ['class' => 'text-white label-form-for-me']) !!}
                {!! Form::text('title_web',old('title_web'), ['class' => 'form-control text-form-for-me'
                     ,'placeholder'=>'please enter title_web product..!']); !!}
                @error('title_web')
                <div class="text-error-for-slider">
                    <p class="text-danger text-center font-weight-bolder">{{$message}}</p>
                </div>
                @enderror
            </section>
            <section class="form-group">
                {!! Form::label('keywords', 'Keywords :', ['class' => 'text-white label-form-for-me']) !!}
                {!! Form::text('keywords',old('keywords'), ['class' => 'form-control text-form-for-me'
                     ,'placeholder'=>'please enter keywords product..!']); !!}
                @error('keywords')
                <div class="text-error-for-slider">
                    <p class="text-danger text-center font-weight-bolder">{{$message}}</p>
                </div>
                @enderror
            </section>
            <section class="form-group">
                {!! Form::label('description', 'Description :', ['class' => 'text-white label-form-for-me']) !!}
                {!! Form::text('description',old('description'), ['class' => 'form-control text-form-for-me'
                     ,'placeholder'=>'please enter description product..!']); !!}
                @error('description')
                <div class="text-error-for-slider">
                    <p class="text-danger text-center font-weight-bolder">{{$message}}</p>
                </div>
                @enderror
            </section>
            <section class="form-group mt-5">
                {!! Form::submit('update',['class'=>'btn btn-success btn-block submit-form-for-me']); !!}
            </section>
            {!! Form::close() !!}
            <a class="btn btn-info text-white text-capitalize font-weight-bolder"
               href="{{route('product.index')}}">go to panel index product</a>
        </section>
    </section>
@endsection
@section('css-me')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection
