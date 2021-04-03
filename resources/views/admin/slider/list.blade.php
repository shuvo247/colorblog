@extends('admin.master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            @include('admin.partials.flash')
            <div class="card card-plain">
                <div class="card-header card-header-primary">
                    <a href="{{route('slider.add')}}" class="btn btn-info pull-right">Add Slider</a>
                    <h4 class="card-category">Slider List</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="">
                            <th>
                                S.I.
                            </th>
                            <th>
                                Slider Image
                            </th>
                            <th>
                                Action
                            </th>
                            </thead>
                            <tbody>
                                @foreach($allSlider as $slider)
                                    <tr>
                                        <td>
                                            {{$loop->index+1}}
                                        </td>
                                        <td>
                                            <img src="{{asset('uploads/slider/'.$slider->slider_image)}}" width="90" alt="">
                                        </td>
                                        <td>
                                            <a href="{{route('slider.edit',['slider_id' => $slider->id])}}" class="btn btn-info">Edit</a>
                                            <a href="{{route('slider.destroy',['slider_id' => $slider->id])}}" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
