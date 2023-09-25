@extends('layouts.app')
@section('content')
    <div class="container my-5 w-50">

        <h2 class="text-center">Creer un categorie</h2>

        <form method="post" action="{{ route('categories.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <input type="text" name="name" class="form-control" placeholder="name">
            </div>


            <div class="mb-3">
                <input type="file" class="form-control" name="image" placeholder="image">
            </div>



            <button type="submit" class="btn btn-primary">Valider</button>
        </form>

    </div>
@endsection
