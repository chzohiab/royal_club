<!-- resources/views/clubs/create.blade.php -->

@extends('admin.layouts.app')

@section('admincontent')
    <div class="">
        <div class="breadcrumps">
            <ul>
                <li>
                    <a href="{{ route('Dashboard') }}">Dashboard</a>
                </li>
                <li>
                    <a href="{{ route('clubs') }}">Clubs</a>
                </li>
                <li>
                    <span>Create</a>
                </li>
            </ul>
        </div>
        <form action="{{route('clubs-store')}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            @if ($errors->any())
                <div class="mt-2 alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="" class="form-label">Title</label>
                        <input id="name" name="name" type="text" class="form-control" placeholder="Enter Title">
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="" class="form-label">City</label>
                        <input id="city" name="city" type="text" class="form-control" placeholder="Enter city">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="" class="form-label">Established Year</label>
                        <input id="established_year" name="established_year" type="text" class="form-control" placeholder="Enter Year">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="" class="form-label">Image</label>
                        <input id="image" name="image" type="file" class="form-control">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="" class="form-label">Bio</label>
                        <textarea id="bio" name="bio" class="form-control" placeholder="Enter Bio"></textarea>
                    </div>
                </div>
            </div>
            <div class="d-flex align-items-center justify-content-end mt-5">
                <a href="{{route('clubs')}}" class="btn btn-secondary me-2">Cancel</a>
                <button type="submit" class="btn btn-primary">Save and Proceed</button>
            </div>
        </form>
    </div>
@endsection
