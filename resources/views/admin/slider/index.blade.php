@extends('admin.layouts.master')
@section('content-me')
    <section class="row m-0">
        @if (session('delete'))
            <section class="col-8 offset-2 alert alert-form-for-me mt-5">
                <h4 class="text-center">{{session('delete')}}</h4>
            </section>
        @endif
        @if (session('update'))
            <section class="col-8 offset-2 alert alert-form-for-me mt-5 mb-3">
                <h4 class="text-center">{{session('update')}}</h4>
            </section>
        @endif
        <section class="col-10 offset-1 text-center mt-5">
            <h1 class="font-weight-bolder text-capitalize text-white">All Index Slider</h1>
        </section>
        <section class="col-10 offset-1 mt-5 mb-5 pt-5 pl-5 pr-5 pb-4 main-section-for-me">
            <table class="table table-hover table-bordered table-dark">
                <thead class="bg-dark">
                <tr>
                    <th>#</th>
                    <th>title</th>
                    <th>caption</th>
                    <th>image</th>
                    <th>alt</th>
                    <th>update</th>
                    <th>delete</th>
                </tr>
                </thead>
                <tbody class="bg-secondary">
                @forelse ($slider as $value=>$item)
                    <tr>
                        <td>{{$value+1}}</td>
                        <td>{{$item->title}}</td>
                        <td>{{$item->caption}}</td>
                        <td><img src="{{asset('images/slider/'.$item->image)}}" alt="" width="50" height="50"></td>
                        <td>{{$item->alt}}</td>
                        <td><a href="{{route('slider.edit',$item->id)}}" class="btn btn-warning">
                                update</a></td>
                        <td>
                            {!! Form::open(['route'=>['slider.destroy',$item->id],'method'=>'delete']) !!}
                            {!! Form::submit('delete',['class'=>'btn btn-danger']); !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7">
                            <h1 class="text-center">no data</h1>
                        </td>
                    </tr>
                @endforelse
                </tbody>
            </table>
            <section class="mt-3">
                {{$slider->links()}}
            </section>
            <a class="btn btn-success text-white text-capitalize font-weight-bolder mt-3 mb-3"
               href="{{route('slider.create')}}">go to create slider website</a>
        </section>
    </section>
@endsection
@section('css-me')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection
