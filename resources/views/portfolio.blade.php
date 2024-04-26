@extends('layout')
@section('title', 'Project')
@section('content')
    <h1>Portfolio:</h1>
    <ul>
        @forelse ($projects as $project)
            <li>
                {{ $project->title }}
            </li>
        @empty
            <li>Projects not found.</li>
        @endforelse
    </ul>
{{--    {{ $projects->links() }}--}}
@endsection
