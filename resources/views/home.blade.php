@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-5">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="">
                        <div class="form-group">
                            <label for="my-input">Ahora estoy pensando en:</label>
                            <input id="my-input" class="form-control" type="text" name="pensamientos">
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar Pensamiento</button>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-header">Publicado en 09/01/2019</div>

                <div class="card-body">
                        <p>
                                Lorem, ipsum dolor sit amet consectetur 
                                adipisicing elit. Aperiam recusandae, commodi 
                                ducimus maxime ad eum expedita dolores ut 
                                voluptatibus odit molestias odio veniam 
                                dignissimos atque suscipit explicabo 
                                voluptatum ipsam animi.
                        </p>
                </div>
                <div class="card-footer">
                    <button type="button" class="btn btn-primary">
                        Editar
                    </button>
                    <button type="button" class="btn btn-danger">
                        Eliminar
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
