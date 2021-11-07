@extends('admin.layouts.master')
@section('content-me')
    <section class="row m-0">
        @if (session('create'))
            <section class="col-8 offset-2 alert alert-form-for-me mt-5">
                <h4 class="text-center">{{session('create')}}</h4>
            </section>
        @endif
        <section class="col-10 offset-1 text-center mt-5">
            <h1 class="font-weight-bolder text-capitalize text-white">Create Index Team</h1>
        </section>
        <section class="col-8 offset-2 mt-5 mb-5 p-4 main-section-for-me">
            {!! Form::open(['route' => 'team.store','method'=>'post', 'files' => true]) !!}
            <section class="form-group">
                {!! Form::label('alt', 'Alt image :', ['class' => 'text-white label-form-for-me']) !!}
                {!! Form::text('alt',old('alt'), ['class' => 'form-control text-form-for-me'
                     ,'placeholder'=>'please enter alt image team..!']); !!}
                @error('alt')
                <div class="text-error-for-slider">
                    <p class="text-danger text-center font-weight-bolder">{{$message}}</p>
                </div>
                @enderror
            </section>
            <section class="form-group">
                {!! Form::label('image', 'Image :', ['class' => 'text-white label-form-for-me']) !!}
                {!! Form::file('image', ['class' => 'form-control text-form-for-me'
                     ,'placeholder'=>'please image team..!']); !!}
                @error('image')
                <div class="text-error-for-slider">
                    <p class="text-danger text-center font-weight-bolder">{{$message}}</p>
                </div>
                @enderror
            </section>
            <section class="form-group">
                {!! Form::label('fullName', 'FullName :', ['class' => 'text-white label-form-for-me']) !!}
                {!! Form::text('fullName',old('fullName'), ['class' => 'form-control text-form-for-me'
                     ,'placeholder'=>'please enter fullName team..!']); !!}
                @error('fullName')
                <div class="text-error-for-slider">
                    <p class="text-danger text-center font-weight-bolder">{{$message}}</p>
                </div>
                @enderror
            </section>
            <section class="form-group">
                {!! Form::label('job', 'Job :', ['class' => 'text-white label-form-for-me']) !!}
                {!! Form::text('job',old('job'), ['class' => 'form-control text-form-for-me'
                     ,'placeholder'=>'please enter job team..!']); !!}
                @error('job')
                <div class="text-error-for-slider">
                    <p class="text-danger text-center font-weight-bolder">{{$message}}</p>
                </div>
                @enderror
            </section>
            <section class="form-group">
                {!! Form::label('instagram', 'Instagram :', ['class' => 'text-white label-form-for-me']) !!}
                {!! Form::text('instagram',old('instagram'), ['class' => 'form-control text-form-for-me'
                     ,'placeholder'=>'please enter address instagram team..!']); !!}
                @error('instagram')
                <div class="text-error-for-slider">
                    <p class="text-danger text-center font-weight-bolder">{{$message}}</p>
                </div>
                @enderror
            </section>
            <section class="form-group">
                {!! Form::label('telegram', 'Telegram :', ['class' => 'text-white label-form-for-me']) !!}
                {!! Form::text('telegram',old('telegram'), ['class' => 'form-control text-form-for-me'
                     ,'placeholder'=>'please enter address telegram team..!']); !!}
                @error('telegram')
                <div class="text-error-for-slider">
                    <p class="text-danger text-center font-weight-bolder">{{$message}}</p>
                </div>
                @enderror
            </section>
            <section class="form-group">
                {!! Form::label('linkedin', 'Linkedin :', ['class' => 'text-white label-form-for-me']) !!}
                {!! Form::text('linkedin',old('linkedin'), ['class' => 'form-control text-form-for-me'
                     ,'placeholder'=>'please enter address linkedin team..!']); !!}
                @error('linkedin')
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
               href="{{route('team.index')}}">go to panel index team</a>
        </section>
    </section>
@endsection
@section('css-me')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection
