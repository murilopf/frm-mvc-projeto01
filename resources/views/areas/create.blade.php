@extends('layouts.app')

@section('content')
  <div class="container">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h1> Cadastro de Área </h1>
    <form action="{{ route('areas.store') }}" method="post">
      @include('areas._partial.form')
    </form>
  </div>
@endsection
