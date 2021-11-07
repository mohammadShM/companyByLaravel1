@extends('admin.layouts.master')
@section('content-me')
    <section class="row m-0">
        @if (session('create'))
            <section class="col-8 offset-2 alert alert-form-for-me mt-5">
                <h4 class="text-center">{{session('create')}}</h4>
            </section>
        @endif
        <section class="col-8 offset-2 mt-5 mb-5 p-4 main-section-for-me">
            {!! Form::model($link,['route' => ['link.update',$link->id],'method'=>'put']) !!}
            <section class="form-group">
                {!! Form::label('name', 'Name :', ['class' => 'text-white label-form-for-me']) !!}
                {!! Form::text('name',old('name'), ['class' => 'form-control text-form-for-me'
                     ,'placeholder'=>'please enter name image link..!']); !!}
                @error('name')
                <div class="text-error-for-slider">
                    <p class="text-danger text-center font-weight-bolder">{{$message}}</p>
                </div>
                @enderror
            </section>
            <section class="form-group">
                {!! Form::label('link', 'Link :', ['class' => 'text-white label-form-for-me']) !!}
                {!! Form::text('link',old('link'), ['class' => 'form-control text-form-for-me'
                     ,'placeholder'=>'please enter link link..!']); !!}
                @error('link')
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
               href="{{route('link.index')}}">go to panel index link</a>
        </section>
    </section>
@endsection
@section('css-me')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection
