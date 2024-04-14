@extends('layouts.master')
@section('content')
    <div class="main-content">
        <div class="card">
            <div class="card-header">
                Show post
                <a href="{{route('posts.create')}}" class="btn btn-success">Create</a>
                <a href="" class="btn btn-dark">Trashed</a>
            </div>
            <div class="card-body">
                <table class="table table-striped table-bordered border-dark">
                    {{-- <thead>
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
                        <tr>
                            <th scope="row">{{$post->id}}</th>
                            <td><img width="80" src="{{asset('storage/'.$post->image)}}" alt=""></td>
                            <td>{{$post->title}}</td>
                            <td>{{$post->description}}</td>
                            <td>{{$post->category_id}}</td>
                            <td>{{date('d-m-Y', strtotime($post->created_at))}}</td>
                            <td>
                                <a href="{{route('posts.edit', $post->id)}}" class="btn btn-primary">Edit</a>
                                <a href="" class="btn btn-success">Show</a>
                                <form action="{{route('posts.destroy', $post->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    </tbody> --}}
                    <tr>
                        <td>id</td>
                        <td>{{$post->id}}</td>
                    </tr>
                    <tr>
                        <td>Image</td>
                        <td><img src="{{asset('storage/'.$post->image)}}" alt=""></td>
                    </tr>
                    <tr>
                        <td>Title</td>
                        <td>{{$post->title}}</td>
                    </tr>
                    <tr>
                        <td>Description</td>
                        <td>{{$post->description}}</td>
                    </tr>
                    <tr>
                        <td>Category</td>
                        <td>{{$post->category_id}}</td>
                    </tr>
                    <tr>
                        <td>Publish date</td>
                        <td>{{date('d-m-Y'), strtotime($post->created_at)}}</td>
                    </tr>
                  </table>
            </div>
        </div>
    </div>
@endsection
