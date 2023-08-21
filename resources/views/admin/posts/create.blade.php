@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center my-5">
                    <div>
                        <h1>Aggiungi Nuovo post</h1>
                    </div>
                    <div>
                        <a href="{{route('admin.posts.index')}}" class="btn btn-sm btn-primary">Tutti gli articoli</a>
                    </div>

                </div>
            </div>
            <div class="col-12">
                <form action="{{route('admin.posts.store')}}" method="post">
                    @csrf
                    <div class="form-group mt-4">
                        <input type="text" name="title" id="title" placeholder="Titolo" require>
                    </div>
                    <div class="form-group mt-4">
                        
                        <textarea class="form-control" name="content" id="content" placeholder="Contenuto"></textarea>
                    </div>
                    <div class="form-group mt-4">
                        <button type="submit" class="btn btn-success">Salva
                    </div>
                </form>
            </div>
                        

                    
                    
                    
        </div>
    </div>
@endsection
