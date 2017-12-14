@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12">
        @if($errors->any())
            <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach()
            </div>
        @endif
        <div class="panel panel-default">
            <div class="panel-heading">
                Add User ao Grupo <a href="{{ route('user.index') }}" class="label label-primary pull-right">Back</a>
            </div>
            <div class="panel-body">
                <form action="{{ route('user.insertug') }}" method="POST" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="control-label col-sm-2" >Nome</label>
                        <select id="grupo_id" name="grupo_id" class="input-xlarge">
                            <option value="{{$grupo->id}}">{{$grupo->name}}</option>
                        </select >
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" >Description</label>
                        <select id="user_id" name="user_id" class="input-xlarge">
                            <option></option>
                            @foreach($users as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach
                        </select >
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <input type="submit" class="btn btn-default" value="Add UGrupo" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection