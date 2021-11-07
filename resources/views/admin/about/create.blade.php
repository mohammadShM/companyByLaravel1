@extends('admin.layouts.master')
@section('content-me')
    <section class="row m-0">
        @if (session('create'))
            <section class="col-8 offset-2 alert alert-form-for-me mt-5">
                <h4 class="text-center">{{session('create')}}</h4>
            </section>
        @endif
        <section class="col-10 offset-1 text-center mt-5">
            <h1 class="font-weight-bolder text-capitalize text-white">Create Index Slider</h1>
        </section>
        <section class="col-8 offset-2 mt-5 mb-5 p-4 main-section-for-me">
            {!! Form::open(['route' => 'about.store','method'=>'post', 'files' => true]) !!}
            <section class="form-group">
                {!! Form::label('title', 'Title :', ['class' => 'text-white label-form-for-me']) !!}
                {!! Form::text('title',old('title'), ['class' => 'form-control text-form-for-me'
                     ,'placeholder'=>'please enter title slider..!']); !!}
                @error('title')
                <div class="text-error-for-slider">
                    <p class="text-danger text-center font-weight-bolder">{{$message}}</p>
                </div>
                @enderror
            </section>
            <section class="form-group">
                {!! Form::label('image', 'Image :', ['class' => 'text-white label-form-for-me']) !!}
                {!! Form::file('image', ['class' => 'form-control text-form-for-me'
                     ,'placeholder'=>'please image slider..!']); !!}
                @error('image')
                <div class="text-error-for-slider">
                    <p class="text-danger text-center font-weight-bolder">{{$message}}</p>
                </div>
                @enderror
            </section>
            <section class="form-group">
                {!! Form::label('alt', 'Alt image :', ['class' => 'text-white label-form-for-me']) !!}
                {!! Form::text('alt',old('alt'), ['class' => 'form-control text-form-for-me'
                     ,'placeholder'=>'please enter alt image slider..!']); !!}
                @error('alt')
                <div class="text-error-for-slider">
                    <p class="text-danger text-center font-weight-bolder">{{$message}}</p>
                </div>
                @enderror
            </section>
            <section class="form-group">
                {!! Form::label('description', 'Description :', ['class' => 'text-white label-form-for-me']) !!}
                {!! Form::textarea('description',old('description'), ['class' => 'form-control textarea-form-for-me-big'
                     ,'placeholder'=>'please enter description slider..!']); !!}
                @error('description')
                <div class="text-error-for-slider">
                    <p class="text-danger text-center font-weight-bolder">{{$message}}</p>
                </div>
                @enderror
            </section>
            <section class="form-group mt-5">
                {!! Form::submit('create',['class'=>'btn btn-success btn-block submit-form-for-me']); !!}
            </section>
            {!! Form::close() !!}
            <a class="btn btn-info text-white text-capitalize font-weight-bolder"
               href="{{route('about.index')}}">go to panel index about</a>
        </section>
    </section>
@endsection
@section('css-me')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection
