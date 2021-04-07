@extends('admin.master')
@section('content')
    <div class="col-md-12">
        @include('admin.partials.flash')
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-category">Settings</h4>
            </div>
            <div class="card-body">
                <form action="{{route('setting.update')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="bmd-label-floating">Website Title</label>
                                <input type="text" class="form-control" name="website_title" value="{{$allSetting->website_title}}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <img src="{{asset('uploads/logo/'.$allSetting->website_logo)}}" width="50" alt="">
                            <div class="form-group">
                                <label class="bmd-label-floating">Website Logo</label>
                                <input type="file" class="form-control" name="website_logo">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="bmd-label-floating">Address</label>
                                <input type="text" class="form-control" name="address" value="{{$allSetting->address}}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="bmd-label-floating">Phone Number</label>
                                <input type="number" class="form-control" name="phone_number" value="{{$allSetting->phone_number}}" >
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="bmd-label-floating">Email Address</label>
                                <input type="email" class="form-control" name="email_address" value="{{$allSetting->email_address}}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="bmd-label-floating">Facebook Link</label>
                                <input type="text" class="form-control" name="facebook_link" value="{{$allSetting->facebook_link}}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="bmd-label-floating">Youtube Link</label>
                                <input type="text" class="form-control" name="youtube_link" value="{{$allSetting->youtube_link}}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="bmd-label-floating">Twitter Link</label>
                                <input type="text" class="form-control" name="twitter_link" value="{{$allSetting->twitter_link}}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="bmd-label-floating">Instagram Link</label>
                                <input type="text" class="form-control" name="linked_link" value="{{$allSetting->linked_link}}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="bmd-label-floating">Copywrite Text</label>
                                <input type="text" class="form-control" name="copywrite_text" value="{{$allSetting->copywrite_text}}">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Save Changes</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
@endsection
