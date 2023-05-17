@extends('layouts.app')






@section('content')

    @foreach ($projects as $project)
    <div>
        <h1>progetto:{{$project->title}}</h1>
        
    </div>
    @endforeach
    
@endsection