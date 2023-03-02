@extends('layouts.layout')
@section('title', 'Editar About')
@section('content')

<x-dashboard.navbar />

<div class="card w-75">
    <div class="row no-gutters">
        <div class="col-md-4">
            <img src="{{Storage::url($list->patch)}}" alt="service" width="200px" height="200px">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">Serviços</h5>
                <form action="/update/service" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{$list->id}}">
                    <textarea name="description" class="form-control" cols="25" rows="4">{{$list->description}}</textarea>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupFileAddond01">Updload</span>
                        </div>
                        <div class="custom-file">
                            <input type="hidden" name="patch" value="{{$list->patch}}">
                            <input type="file" class="custom-file-input" name="imagem" id="inputGroupFile01" aria-describedby="inputGroupFileAddond01">
                            <label class="custom-file-label" for="inputGroupFile01">Choose File</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Editar</button>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection