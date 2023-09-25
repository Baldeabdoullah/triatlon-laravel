@extends('layouts.app')
@section('content')
    <div class="container my-5">

        <form method="post" action="{{ route('categories.update', $categorie->id) }}" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-3">
                <input type="text" value="{{ $categorie->name }}" class="form-control" name="name" placeholder="name">
            </div>


            <div class="mb-3">
                <input type="file" class="form-control" name="image" placeholder="image">
            </div>



            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
@endsection
