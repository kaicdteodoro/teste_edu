@extends('layouts.app')

@section('title', '| Dashboard')

@section('content')
    <a href="{{ route('logout') }}" class="position-absolute top-0 end-0 link-secondary p-3">
        <i class="bi bi-box-arrow-right fs-3"></i>
    </a>

    <div class="min-vh-100 d-flex justify-content-center align-items-center">
        <div class="shadow-lg p-3 bg-dark text-white rounded p-5" style="width: 850px; min-height: 300px;">
            <a href="{{route('dashboard')}}"><i class="bi bi-backspace mb-auto"></i></a>

            <h1>Editar Tarefa</h1>
{{--            <small class="text-info">{{ $todos->where('is_complete', false)->count() }} ativas</small>--}}
            <form action="/todos/{{$todo->id}}" method="post" class="mt-3">
                @csrf
                @method('PUT')
                <div class="input-group">
                    <div class="input-group-text bg-white p-0">
                        <input type="color" class="form-control form-control-color border-0" name="color" title="Cor" value="{{$todo->color}}">
                    </div>
                    <input type="text" class="form-control" name="title" value="{{$todo->title}}" required>
                    <button type="submit" class="btn btn-secondary">
                        <i class="bi bi-pencil fs-4"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
