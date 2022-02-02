@extends('layouts.main')
@section('title','Cadastrar Usuário')
@section('content')

<section class="container col-md-5">
    <h1 class="text text-primary text-center">Controlo de Usuários</h1>
    <form action="{{$action}}" method="POST" enctype="multipart/form-data">
    @csrf
    @if (isset($userEdit))
        @method('PUT')
    @endif
        <div class="form-group">
          
            <label for="first_name">Nome:</label>
            <input type="text" name="first_name" id="first_name" class="form-control" placeholder="Nome" value="{{$userEdit->first_name ?? ''}}">
            @error('first_name')
                <small class="text text-danger" >O campo nome é obrigatório</small>  
             @enderror
        </div>
        <div class="form-group">
            <label for="second_name">Sobrenome:</label>
            <input type="text" name="second_name" id="second_name" class="form-control" placeholder="Sobrenome" value="{{$userEdit->second_name ?? ''}}">
            @error('second_name')
                 <small class="text text-danger">O campo sobrenome é obrigatório</small>  
            @enderror
        </div>
        <div id="display">
            <div class="form-group col-md-5 ">
                <label for="sexo">Sexo:</label>
                <select name="sexo" id="sexo" class="form-control">
                    <option value="{{$userEdit->sexo ?? ''}}">{{$userEdit->sexo ?? 'Selecionar...' }}</option>
                    <option value="Masculino" >Masculino</option>
                    <option value="Femenino">Femenino</option>
                </select>
               
            </div>
            <div class="form-group col-md-6">
                <label for="birth">Nascimento:</label>
                <input type="date" name="birth" id="birth" class="form-control" value="{{$userEdit->birth ?? ''}}">
            </div>
        </div>
        <div class="form-group">
            <label for="tel">Telefone:</label>
            <input type="tel" name="tel" id="tel" class="form-control" placeholder="Telefone" value="{{$userEdit->contact->tel ?? ''}}">
        </div>
        @error('tel')
          <small class="text text-danger">O campo telefone é obrigatório</small>  
        @enderror
        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="E-mail" value="{{$userEdit->contact->email ?? ''}}">
        </div>
        @error('second_name')
            <small class="text text-danger">O campo e-mail é obrigatório</small>  
        @enderror
        <div class="form-group">
            <label for="city">Cidade:</label>
            <input type="city" name="city" id="city" class="form-control" placeholder="Cidade" value="{{$userEdit->address->city ?? ''}}">
        </div>
        @error('city')
           <small class="text text-danger">O campo cidade é obrigatório</small>  
        @enderror
        <div class="form-group">
            <label for="street">Birro:</label>
            <input type="text" name="street" id="street" class="form-control" placeholder="Bairro" value="{{$userEdit->address->street ?? ''}}">
        </div>
        @error('street')
        <small class="text text-danger">O campo bairro é obrigatório</small>  
       @enderror
        <div class="form-group">
            <label for="photo">Foto:</label>
            <input type="file" name="photo" id="photo" class="form-control">
            @if (isset($userEdit))
            <p class="mt-1">Foto existente:</p>
            <img src="{{asset('/storage/photo/'.$userEdit->photo)}}" class="photo"  alt="{{$userEdit->first_name ?? ''}}">
           
            @endif
            
        </div>
      
        <br>
        <div class="form-group">
            @if (isset($userEdit))
             <button type="submit" class="btn btn-primary fa fa-edit"> Editar</button>
            <a href="/listar" class="btn btn-primary fa fa-users"> Lista de Usuários</a>
                <input type="hidden" name="id" value="{{$userEdit->id}}">
        </div>  
            @else
            <button type="submit" class="btn btn-primary fa fa-plus"> Adicionar</button>
            <a href="/listar" class="btn btn-primary fa fa-users"> Lista de Usuários</a>
            </div>  
            @endif
            
    </form>
</section>


@endsection