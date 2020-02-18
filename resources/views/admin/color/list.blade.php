@extends('layouts.admin.admin')
@section('page-heading','Color')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 col-12">
                <a class="btn btn-primary" href="{{route('color.create')}} ">Create</a>
                <table class="table table-bordered mt-3">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Color</th>
                    </tr>
                    </thead>
                    <tbody>

                    @if(count($colors) == 0 )
                        <tr>
                            <td colspan="4" style="color: #cd0a0a">Không có dữ liệu</td>
                        </tr>
                    @else
                        @foreach($colors as $key => $color)
                            <tr>
                                <th scope="row">{{++$key}}</th>
                                <td>{{$color->color}}</td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>

            </div>
        </div>
    </div>

@endsection
