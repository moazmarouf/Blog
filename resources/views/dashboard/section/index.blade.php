@extends('layouts.dashboard')
@section('title')
    All Section
@stop
@section('content')
    <div class="row">
        <div class="col-lg-12">
            @include('dashboard.includes.alerts.errors')
            <div class="panel panel-primary">

                <!-- /.panel-heading -->
                <div class="panel-body">
                    <a style="margin-bottom:10px;" class="btn btn-primary" href="{{route('section.create')}}">Add Section</a>
                    <div class="panel panel-primary">
                        <div class=" panel-heading">
                            All Sections
                        </div>
                    </div>
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Admin</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($sections as $section)
                            <tr class="odd gradeX">
                                <td>{{$section->name}}</td>
                                <td>{{is_null($section->Admin)?'':$section->Admin->name}}</td>
                                <td>
                                    <a class="btn btn-success" href="{{route('section.edit',$section->id)}}">Edit</a>
                                    <a class="btn btn-danger" href="{{route('section.delete',$section->id)}}">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <!-- /.table-responsive -->

                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
@stop
