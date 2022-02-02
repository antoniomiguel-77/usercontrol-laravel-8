@extends('layouts.main')
@section('title','Lista de Usuários')
@section('content')
    <section class="container col-md-12">
        <table class="table table-hover table-striped reponsive-table">
            <thead>
                <tr>
                    <th>[#]</th>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>Nascimento</th>
                    <th>Sexo</th>
                    <th>Telefone</th>
                    <th>E-mail</th>
                    <th>Cidade</th>
                    <th>Bairro</th>
                    <th>Operações</th>

                </tr>
            </thead>
            <tbody>
               @foreach ($users as $user)
               <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->first_name}}</td>
                <td>{{$user->second_name}}</td>
                <td>{{$user->birth}}</td>
                <td>{{$user->sexo}}</td>
                <td>{{$user->contact->tel}}</td>
                <td>{{$user->contact->email}}</td>
                <td>{{$user->address->city}}</td>
                <td>{{$user->address->street}}</td>
                <td id="operation">
                    <!--Edit -->
                    <form action="/usuario.editar" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{$user->id}}">
                        <button type="submit" class="btn btn-info fa fa-edit"title="Editar Usuário"></button>
                    </form>
                    <!--See -->
                    <form action="/ver" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{$user->id}}">
                        <button type="submit" class="btn btn-primary fa fa-eye" title="Mais detalhes "></button>
                    </form>
                    <!--Delete -->
                    <form action="/usuario.deletar" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" name="id" value="{{$user->id}}">
                        <button type="submit" class="btn btn-danger fa fa-trash" title="Excluir Usuário"></button>

                    </form>
                </td>
                
            </tr>
               @endforeach
            </tbody>
        </table>
        <a href="/" class="btn btn-primary fa fa-arrow-left"> Voltar</a>
        <a href="/relatorio" class="btn btn-primary ">Imprimir Relatório</a>
    </section>
@endsection 