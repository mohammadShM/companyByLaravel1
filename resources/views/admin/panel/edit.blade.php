@extends('admin.layouts.master')
@section('content-me')
    <section class="row m-0">
        <section class="col-10 offset-1 text-center mt-5">
            <h1 class="font-weight-bolder text-capitalize text-white">Create Index Seo</h1>
        </section>
        <section class="col-8 offset-2 mt-5 mb-5 p-4 main-section-for-me">
            {!! Form::model($seo ,['route' => ['panel.update',$seo->id],'method'=>'put']) !!}
            <section class="form-group">
                {!! Form::label('title', 'Title :', ['class' => 'text-white label-form-for-me']) !!}
                {!! Form::text('title',null, ['class' => 'form-control text-form-for-me'
                     ,'placeholder'=>'please enter title website..!']); !!}
                @error('title')
                <div class="text-error-for-slider">
                    <p class="text-danger text-center font-weight-bolder">{{$message}}</p>
                </div>
                @enderror
            </section>
            <section class="form-group">
                {!! Form::label('keywords', 'Keywords :', ['class' => 'text-white label-form-for-me']) !!}
                {!! Form::textarea('keywords',null, ['class' => 'form-control textarea-form-for-me'
                     ,'placeholder'=>'please enter keywords website..!']); !!}
                @error('keywords')
                <div class="text-error-for-slider">
                    <p class="text-danger text-center font-weight-bolder">{{$message}}</p>
                </div>
                @enderror
            </section>
            <section class="form-group">
                {!! Form::label('description', 'Description :', ['class' => 'text-white label-form-for-me']) !!}
                {!! Form::textarea('description',null, ['class' => 'form-control textarea-form-for-me'
                     ,'placeholder'=>'please enter description website..!']); !!}
                @error('description')
                <div class="text-error-for-slider">
                    <p class="text-danger text-center font-weight-bolder">{{$message}}</p>
                </div>
                @enderror
            </section>
            <section class="form-group">
                {!! Form::label('author', 'Author :', ['class' => 'text-white label-form-for-me']) !!}
                {!! Form::text('author',null, ['class' => 'form-control text-form-for-me'
                     ,'placeholder'=>'please enter author website..!']); !!}
                @error('author')
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
               href="{{route('panel.show.data')}}">go to panel index seo</a>
        </section>
    </section>
@endsection
@section('css-me')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection
