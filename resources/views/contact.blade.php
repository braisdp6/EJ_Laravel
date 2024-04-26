@extends('layout')
@section('title', 'Contact')
@section('content')
    <h1>Contact:</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('contact') }}">
        @csrf
        <input name="name" placeholder="Nombre..." value="Brais" ><br>
        <input type="email" name="email" placeholder="Email..." value="brais@gmail.com"><br>
        <input name="subject" placeholder="Asunto..." value="Asunto 1"><br>
        <textarea name="content" placeholder="Mensaje...">Contenido del mensaje del textarea, contenido del mensaje del textarea, contenido del mensaje del textarea, contenido del mensaje del textarea.</textarea><br>
        <button>Enviar</button>
    </form>
@endsection
