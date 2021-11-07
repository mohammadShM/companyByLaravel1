@extends('admin.layouts.master')
@section('content-me')
    <section class="row m-0">
        @if (session('create'))
            <section class="col-8 offset-2 alert alert-form-for-me mt-5">
                <h4 class="text-center">{{session('create')}}</h4>
            </section>
        @endif
        <section class="col-8 offset-2 mt-5 mb-5 p-4 main-section-for-me">
            {!! Form::model($social,['route' => ['social.update',$social->id],'method'=>'put']) !!}
            <section class="form-group">
                {!! Form::label('telegram', 'Telegram :', ['class' => 'text-white label-form-for-me']) !!}
                {!! Form::text('telegram',old('telegram'), ['class' => 'form-control text-form-for-me'
                     ,'placeholder'=>'please enter telegram image social..!']); !!}
                @error('telegram')
                <div class="text-error-for-slider">
                    <p class="text-danger text-center font-weight-bolder">{{$message}}</p>
                </div>
                @enderror
            </section>
            <section class="form-group">
                {!! Form::label('instagram', 'Instagram :', ['class' => 'text-white label-form-for-me']) !!}
                {!! Form::text('instagram',old('instagram'), ['class' => 'form-control text-form-for-me'
                     ,'placeholder'=>'please enter instagram social..!']); !!}
                @error('instagram')
                <div class="text-error-for-slider">
                    <p class="text-danger text-center font-weight-bolder">{{$message}}</p>
                </div>
                @enderror
            </section>
            <section class="form-group">
                {!! Form::label('linkedin', 'Linkedin :', ['class' => 'text-white label-form-for-me']) !!}
                {!! Form::text('linkedin',old('linkedin'), ['class' => 'form-control text-form-for-me'
                     ,'placeholder'=>'please enter linkedin social..!']); !!}
                @error('linkedin')
                <div class="text-error-for-slider">
                    <p class="text-danger text-center font-weight-bolder">{{$message}}</p>
                </div>
                @enderror
            </section>
            <section class="form-group">
                {!! Form::label('twitter', 'Twitter :', ['class' => 'text-white label-form-for-me']) !!}
                {!! Form::text('twitter',old('twitter'), ['class' => 'form-control text-form-for-me'
                     ,'placeholder'=>'please enter twitter social..!']); !!}
                @error('twitter')
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
               href="{{route('social.index')}}">go to panel index social</a>
        </section>
    </section>
@endsection
@section('css-me')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection
