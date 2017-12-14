@extends('layouts.app')

@section('content')
@if(!empty($grupo))
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Lista de Usuarios do Grupo - {{$grupo->name}} - com {{count($grupo->chats)}} users. </h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('user.index') }}"> Voltar</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <table class="table table-striped task-table">
                    <!-- Table Headings -->
                    <thead>
                        <th width="25%">Name</th>
                        <th width="40%">Email</th>
                        <th width="15%">Created</th>
                        <th width="20%">Action</th>
                    </thead>
    
                    <!-- Table Body -->
                    <tbody>
                    @foreach($grupo->chats as $user)
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
                                <a href="{{ route('user.ugdelete', $grupo->id) }}" class="label label-danger" onclick="return confirm('Are you sure to delete?')">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection