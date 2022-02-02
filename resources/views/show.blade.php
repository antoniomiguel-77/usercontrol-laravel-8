@extends('layouts.main')
@section('title','Mostrar Usuário')
@section('content')

<section class=" container col-md-6 shows">

        <div class="card " style="width: 18rem;">
            <img src="{{asset('/storage/photo/'.$find->photo)}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Nome: {{$find->first_name}}</h5>
              <p class="card-text">Nascimento:{{$find->birth}}</p>
              <p class="card-text">Cidade actual:{{$find->city}}</p>
              <a href="/listar" class="btn btn-primary">Voltar</a>
            </div>
          </div>

</section>

@endsection