@extends('layouts.app')

@section('content')
  <div class="container">
    <h1>Listagem de Áreas
      <a href="{{ route('areas.create') }}">
        <button class="btn btn-success">Cadastrar</button>
      </a>
    </h1>
    <div class="table-responsive">
      <table class="table">
        <thead class="thead-light">
          <tr>
            <th scope="col"></th>
            <th scope="col">Descrição</th>
            <th scope="col">Cor</th>
            <th scope="col">Ações</th>
          </tr>
        </thead>
        <tbody>
          @foreach($areas as $area)
            <tr>
              <th scope="row">{{$area->id}}</th>
              <td>{{$area->description}}</td>
              <td>{{$area->color}}</td>
              <td>
                <a href="{{ route('areas.edit', ['area' => $area->id]) }}" type="button" class="btn btn-primary">Editar</a>
                <form action="{{ route('areas.destroy', ['area' => $area->id]) }}" method="post">
                  @csrf
                  <input type="hidden" name="_method" value="delete">
                  <button type="submit" class="btn btn-danger">Excluir</button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    {{ $areas->links() }}
  </div>
@endsection