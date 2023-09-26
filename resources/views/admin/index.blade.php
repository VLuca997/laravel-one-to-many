@extends('layouts.app')

@section('page-title', 'AllProgect')

@section('main-content')
        <div class="container">
            <div class="row">
                <div class="col">
                    @foreach ($projects as $project)
                            <h3> {{$project->title}}</h3>
                            
                            <a href="{{ route('admin.projects.show', ['project' => $project ])}}" class="btn btn-primary"> view</a>
                            <a href="{{ route('admin.projects.edit', ['project' => $project ])}}" class="btn btn-warning"> update</a>


                            <form class="mt-5" action="{{route('admin.projects.destroy', ['project' => $project ]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">delete</button>
                            </form>
                    @endforeach
                    <div class="py-3">

                        <a href="{{ route('admin.projects.create')}}" class="btn btn-success"> create</a>
                    </div>

                </div>
            </div>
        </div>
@endsection
