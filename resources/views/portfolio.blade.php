@extends('layout')
@section('title', 'Portfolio')
@section('content')
    <h1>Portfolio:</h1>
    <ul>
        @if($projects)
            @foreach ($projects as $project)
                <li>
                    <a href="{{ route('$project.show', $project) }}">{{ $project->title }}</a>
                </li>
            @endforeach
        @else
            <li>ERROR: No hay proyectos para mostrar.</li>
        @endif

        {{ $projects->links() }}
    </ul>
@endsection
