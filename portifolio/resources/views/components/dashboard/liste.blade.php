<div class="justify-content-center align-items-center row">
    <div class="input-group mb-3 col-md-6">
        <form action="/search/{{$service}}" method="post" class="input-group mb-6 col-md-6"> 
            @csrf
            <input type="text" name="search" class="form-control col-12" placeholder="Search" aria-label="Recipient's username" aria-describedby="button-addon2" maxlength="255">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit" id="button-addon2">Search</button>
            </div>
        </form>
    </div>
</div>
@if (isset($result))
<div class="row">
    @foreach ($result as $key)
    <div class="card" style="width: 18rem; margin:20px;">
        <div class="card-body">
            <h5 class="card-title">{{$service}}</h5>
            <p class="card-text">{{$key->description}}</p>
            <form action="/editar/{{$service}}" method="post">
                @csrf
                    <input type="hidden" name="id" value="{{$key->id}}">
                    <button type="submit" class="btn btn-warning">Editar</button>
            </form>
            <form action="/deletar/{{$service}}" method="post">
                @csrf
                    <input type="hidden" name="id" value="{{$key->id}}">
                    <button type="submit" class="btn btn-danger">Remover</button>
            </form>
        </div>
    </div>
    <br>
    @endforeach
</div>
@endif
