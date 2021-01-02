@extends('layouts.dashboard')
@section('title')
    Delete Section
@stop
@section('content')
    <form method="post" action="{{route('section.delete',$section->id)}}">
        @csrf
        <div class="col-lg-4">
            <div class="panel panel-red">
                <div class="panel-heading">
                    Section Info
                </div>
                <div class="panel-body">
                    <label>Are You Sure Delete</label>
                    <span style="color: red">{{$section->name . '' . '?'}}</span>

                </div>
                <div class="panel-footer">
                    <input type="submit" value="Delete" class="btn btn-danger">
                </div>
            </div>
    </form>
@stop
