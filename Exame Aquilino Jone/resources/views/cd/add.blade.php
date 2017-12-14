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
                Add a Novo Cidadao <a href="{{ route('user.index') }}" class="label label-primary pull-right">Back</a>
            </div>
            <div class="panel-body">
                <form action="{{ route('cd.insert') }}" method="POST" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="control-label col-sm-2" >Nome</label>
                        <div class="col-sm-10">
                            <input type="text" name="nome" id="nome" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" >Nome</label>
                        <div class="col-sm-10">
                            <input type="text" name="nome" id="nome" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" >BI</label>
                        <div class="col-sm-10">
                            <input type="text" name="bi" id="bi" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" >NUIT</label>
                        <div class="col-sm-10">
                            <input type="number" name="nuit" id="nuit" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" >Data Nascimento</label>
                        <div class="col-sm-10">
                            <input type="text" name="data_nascimento" id="data_nascimento" class="form-control">
                        </div>
                    </div>
                                        
                    <div class="form-group">
                        <label class="control-label col-sm-2" >Provincia</label>
                        <select id="provincia_id" name="provincia_id" class="input-xlarge">
                            <option></option>
                            @foreach($provincias as $provincia)
                                <option value="{{$provincia->id}}">{{$provincia->name}}</option>
                            @endforeach
                        </select >
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <input type="submit" class="btn btn-default" value="Add Post" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection