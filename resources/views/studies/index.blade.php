@extends('layouts.app')

@section('content')
  <div class="container">
    <h1>Listagem de Estudos
      <a href="{{ route('studies.create') }}">
        <button class="btn btn-success">Cadastrar novo estudo</button>
      </a>
    </h1>
    <div class="table-responsive">
      <table class="table">
        <thead class="thead-light">
          <tr>
            <th scope="col"></th>
            <th scope="col">Descrição</th>
            <th scope="col">Áreas</th>
            <th scope="col">Data inicial</th>
            <th scope="col">Data final</th>
            <th scope="col">Situação</th>
            <th scope="col">Ações</th>
          </tr>
        </thead>
        <tbody>
          @foreach($studies as $study)
            <tr>
              <th scope="row">{{$study->id}}</th>
              <td>{{$study->description}}</td>
              <td>{{$study->area->description}}</td>
              <td>{{$study->date_init}}</td>
              <td>{{$study->date_finish}}</td>
              <td>{{$study->status}}</td>
              <td>
                <a href="{{ route('studies.edit', ['study' => $study->id]) }}" type="button" class="btn btn-primary">Editar</a>
                <form action="{{ route('studies.destroy', ['study' => $study->id]) }}" method="post">
                  @csrf
                  <input type="hidden" name="_method" value="delete">
                  <button type="delete" class="btn btn-danger">Excluir</button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    {{ $studies->links() }}
  </div>
@endsection