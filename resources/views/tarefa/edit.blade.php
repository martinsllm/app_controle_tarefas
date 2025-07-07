@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Atualizar Tarefa') }}</div>

                    <div class="card-body">
                        <form method="post" action="{{route('tarefa.update', ['tarefa' => $tarefa->id])}}">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label">Tarefa</label>
                                <input type="text" name="tarefa" class="form-control" value="{{ $tarefa->tarefa }}">
                                @include('layouts._partials.error', ['field_name' => 'tarefa'])
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Data limite conclusão</label>
                                <input type="date" name="data_limite_conclusao" class="form-control"
                                    value="{{ $tarefa->data_limite_conclusao }}">
                                @include('layouts._partials.error', ['field_name' => 'data_limite_conclusao'])
                            </div>
                            <button type=" submit" class="btn btn-success">Confirmar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection