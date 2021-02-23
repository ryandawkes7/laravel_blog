@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create Post</div>
                    <div class="card-body">
                        <form action="{{ route('posts.store') }}" method="post">
                            <div class="form-group">
                                @csrf
                                <label class="label">Post Title: </label>
                                <input type="text" name="title" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label class="label">Form Body: </label>
                                <textarea name="body" cols="30" rows="10" required></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-success">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
