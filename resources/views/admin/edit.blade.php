@extends('layouts.app')

@section('page-title', 'Project')

@section('main-content')
    <form action="{{route('admin.projects.update', ['project' => $project])}}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label"></label>
            <input name="title" type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" value="{{old('title', $project->title)}}">
          </div>

         
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label"></label>
            <input name="category" type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com"value="{{old('category', $project->category)}}">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
            <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3" >{{old('description', $project->description)}}</textarea>
          </div>
          <div>
            <button type="submit">merdonies</button>

          </div>
    </form>
  
@endsection
