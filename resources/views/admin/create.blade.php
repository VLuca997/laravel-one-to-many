@extends('layouts.app')

@section('page-title', 'Project')

@section('main-content')
    <form action="{{route('admin.projects.store')}}" method="POST">
        @csrf
        
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label"></label>
            <input name="title" type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
          </div>

         
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label"></label>
            <input name="category" type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
            <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          <div>
            <button type="submit">merdonies</button>

          </div>
    </form>




    
@endsection
