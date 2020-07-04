@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class='d-flex justify-content-between'>
                        <div class="card text-white bg-danger mb-3 ml-1 col-md-3 col-sm-3 col-lg-3 col-3" style="max-width: 18rem;">
                            <div class="card-body">
                                <h2 class="card-title text-center"> 
                                    @if(isset($atraso))
                                        {{$atraso}} 
                                    @else
                                        {{0}}
                                    @endif
                                </h5>
                                <p class="card-text text-center"> Estudo em atraso </p>
                            </div>
                        </div>
                        <div class="card text-white bg-primary mb-3 col-md-3 col-sm-3 col-lg-3 col-3" style="max-width: 18rem;">
                            <div class="card-body">
                                <h2 class="card-title text-center"> 
                                    @if(isset($andamento))
                                        {{$andamento}}
                                    @else
                                        {{0}}
                                    @endif
                                 </h5>
                                <p class="card-text text-center">Estudos em andamento</p>
                            </div>
                        </div>
                        <div class="card text-white bg-success mb-3 mr-1 col-md-3 col-sm-3 col-lg-3 col-3" style="max-width: 18rem;">
                            <div class="card-body">
                                <h2 class="card-title text-center"> 
                                    @if(isset($finalizado))
                                        {{$finalizado}}
                                    @else
                                        {{0}}
                                    @endif </h5>
                                <p class="card-text text-center"> Estudos concluídos </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
