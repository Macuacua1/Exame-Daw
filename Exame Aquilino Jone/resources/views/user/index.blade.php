@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12">
        @if(Session::has('success_msg'))
        <div class="alert alert-success">{{ Session::get('success_msg') }}</div>
        @endif
    <!-- users list -->
    @if(!empty($users))
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Lista de Usuarios</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('user.add') }}"> Add New Group</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <table class="table table-striped task-table">
                    <!-- Table Headings -->
                    <thead>
                        <th width="25%">Name</th>
                        <th width="40%">Description</th>
                        <th width="15%">Created</th>
                        <th width="20%">Action</th>
                    </thead>
    
                    <!-- Table Body -->
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td class="table-text">
                                <div>{{$user->name}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$user->email}}</div>
                            </td>
                                <td class="table-text">
                                <div>{{$user->created_at}}</div>
                            </td>
                            <td>
                                <a href="{{ route('user.details', $user->id) }}" class="label label-success">Details</a>
                                <a href="{{ route('user.edit', $user->id) }}" class="label label-warning">Edit</a>
                                <a href="{{ route('user.delete', $user->id) }}" class="label label-danger" onclick="return confirm('Are you sure to delete?')">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <h4>{{Auth::user()->name}} - Meus Grupos -  {{count(Auth::user()->grupos)}}</h4>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <table class="table table-striped task-table">
                    <!-- Table Headings -->
                    <thead>
                        <th width="25%">Name</th>
                        <th width="20%">Description</th>
                        <th width="20%">Manager</th>
                        <th width="15%">Created</th>
                        <th width="20%">Action</th>
                    </thead>
    
                    <!-- Table Body -->
                    <tbody>
                    @foreach(Auth::user()->grupos as $grupo)
                        <tr>
                            <td class="table-text">
                                <div>{{$grupo->name}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$grupo->description}}</div>
                            </td>
                            </td>
                                <td class="table-text">
                                <div>{{$grupo->user->name}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$grupo->created_at}}</div>
                            </td>
                            <td>
                                <a href="{{ route('user.addug', $grupo->id) }}" class="label label-success">Add UG</a>
                                <a href="{{ route('grupo.details', $grupo->id) }}" class="label label-warning">View</a>
                                <a href="{{ route('grupo.delete', $grupo->id) }}" class="label label-danger" onclick="return confirm('Are you sure to delete?')">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
    </div>
</div>
@endsection