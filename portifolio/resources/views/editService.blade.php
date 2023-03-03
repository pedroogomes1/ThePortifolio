@extends('layouts.layout')
@section('title', 'Editar About')
@section('content')

<x-dashboard.navbar />

<div class="card w-75">
    <div class="row no-gutters">
        <div class="col-md-4">
            <img src="{{Storage::url($list->icon)}}" alt="service" width="200px" height="200px">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">Serviços</h5>
                <form action="/add/service" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Titulo</label>
                        <input type="text" class="form-control" placeholder="Titulo" value="{{$list->title}}" aria-label="Username" aria-describedby="basic-addon1" name="title">
                        <label for="exampleFormControlTextarea1">Descrição</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3">{{$list->description}}</textarea>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile01" name="imagem" aria-describedby="inputGroupFileAddon01">
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                    </div>
            </div>
            <button type="submit" class="btn btn-success">Editar</button>
        </div>
        </form>
    </div>
</div>
</div>
@endsection