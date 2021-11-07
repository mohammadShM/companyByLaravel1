@extends('admin.layouts.master')
@section('content-me')
    <section class="row m-0">
        @if (session('create'))
            <section class="col-8 offset-2 alert alert-form-for-me mt-5">
                <h4 class="text-center">{{session('create')}}</h4>
            </section>
        @endif
        <section class="col-8 offset-2 mt-5 mb-5 p-4 main-section-for-me">
            {!! Form::model($info,['route' => ['info.update',$info->id],'method'=>'put']) !!}
            <section class="form-group">
                {!! Form::label('phone', 'Phone :', ['class' => 'text-white label-form-for-me']) !!}
                {!! Form::text('phone',old('phone'), ['class' => 'form-control text-form-for-me'
                     ,'placeholder'=>'please enter phone image info..!']); !!}
                @error('phone')
                <div class="text-error-for-slider">
                    <p class="text-danger text-center font-weight-bolder">{{$message}}</p>
                </div>
                @enderror
            </section>
            <section class="form-group">
                {!! Form::label('email', 'Email :', ['class' => 'text-white label-form-for-me']) !!}
                {!! Form::email('email',old('email'), ['class' => 'form-control text-form-for-me'
                     ,'placeholder'=>'please enter email info..!']); !!}
                @error('email')
                <div class="text-error-for-slider">
                    <p class="text-danger text-center font-weight-bolder">{{$message}}</p>
                </div>
                @enderror
            </section>
            <section class="form-group">
                {!! Form::label('working_hours', 'Working Hours :', ['class' => 'text-white label-form-for-me']) !!}
                {!! Form::text('working_hours',old('working_hours'), ['class' => 'form-control text-form-for-me'
                     ,'placeholder'=>'please enter working_hours info..!']); !!}
                @error('working_hours')
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
               href="{{route('info.index')}}">go to panel index info</a>
        </section>
    </section>
@endsection
@section('css-me')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection
