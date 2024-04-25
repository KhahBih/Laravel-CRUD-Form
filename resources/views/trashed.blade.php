@extends('layouts.master')
@section('content')
    <div class="main-content">
        <div class="card">
            <div class="card-header">
                Trashed post
                <a href="" class="btn btn-dark">Trashed</a>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col" style="width: 1%">#</th>
                        <th scope="col" style="width: 10%">Image</th>
                        <th scope="col" style="width: 20%">Title</th>
                        <th scope="col" style="width: 30%">Description</th>
                        <th scope="col" style="width: 10%">Category</th>
                        <th scope="col" style="width: 10%">Publish date</th>
                        <th scope="col" style="width: 25%">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <th scope="row">{{$post->id}}</th>
                                <td><img width="80" src="{{asset('storage/'.$post->image)}}" alt=""></td>
                                <td>{{$post->title}}</td>
                                <td>{{$post->description}}</td>
                                <td>{{$post->category_id}}</td>
                                <td>{{date('d-m-Y', strtotime($post->created_at))}}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{route('posts.restore', $post->id)}}" class="btn btn-success">Restore</a>
                                        <form action="" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
@endsection
