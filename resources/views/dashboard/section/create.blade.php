@extends('layouts.dashboard')
@section('title')
    Add Section
@stop
@section('content')

    <form method="post" action="{{route('section.store')}}">
        @csrf
        <div class="col-lg-4">
            @include('dashboard.includes.alerts.success')
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Section Info
                </div>

                <div class="panel-body">

                    <div class="form-group">
                        <lable>Name :</lable>
                        <input type="text" name="name" class="form-control" placeholder="Section Name">
                        @error('name')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <lable>Choose Editro For This Section :</lable>
                        <select name="user_id" class="form-control js-example-basic-single">
                            @foreach($users as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach
                            <option selected="selected" value="">Empty</option>
                        </select>

                    </div>

                </div>
                <div class="panel-footer">
                    <input type="submit" value="Save" class="btn btn-primary">
                </div>
            </div>
    </form>
    </div>
    <script>
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
    </script>
@stop
