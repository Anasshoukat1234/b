@extends('layout.web')

@section('content')
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="show-form">Add Book <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
            </ul>
            <form action="{{ route('web.index') }}" method="GET" class="col-200">
                <input type="text" name="search" placeholder="Search books by name">
                <button type="submit">Search</button>
            </form>
        </div>
    </nav>
    <div class="container">
        <div class="row d-flex px-3">
            @foreach ($data as $book)
                <div class="col-md-3">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('images/books/' . $book->image) }}" alt="Card image cap"
                            height="300" width="150">
                        <div class="card-body">
                            <h5 class="card-title"><strong>{{ $book->name ?? '' }}</strong></h5>
                            <p class="card-text">Author : {{ $book->author->name ?? '' }}</p>
                            <p class="card-text">Category : {{ $book->category->name ?? '' }}</p>
                            <p class="card-text"> <strong>Content:</strong> {{ $book->content ?? '' }}<br></p>
                            <p class="card-text"> <strong>Rating:</strong> {{ $book->rating ?? '' }}<br><br></p>
                            <p class="card-text"> <strong>User ID:</strong> {{ $book->user_id ?? '' }}<br></p>
                            <a href="#" class="btn btn-primary">{{ $book->price ?? '' }}</a> Price<br><br>
                            <button><a href={{ 'edit/' . $book['id'] }}>edit</a></button><br><br>
                            <button><a href={{ 'delete/' . $book['id'] }}>Delete</a></button><br><br>


                            <button><a href={{ 'show-form' }}>Add</a></button>



                        </div>

                    </div>
                </div>
            @endforeach

            {{ $data->links() }}

            <style>
                .w-5 {
                    display: none
                }
            </style>
