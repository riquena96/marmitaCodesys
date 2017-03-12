@extends('app')

@section('content')

    <div class="container">
        <h3>Clientes</h3>
        <br>
        <a href="{{ route('admin.clients.create') }}" class="btn btn-default">Novo Cliente</a>
        <br><br>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>Id</td>
                    <td>Nome</td>
                    <td>E-mail</td>
                    <td>Telefone</td>
                    <td>Endereço</td>
                    <td>Cidade</td>
                    <td>Estado</td>
                    <td>CEP</td>
                    <td>Ação</td>
                </tr>
            </thead>
            <tbody>
            @foreach($clients as $client)
                <tr>
                    <td>{{ $client->id }}</td>
                    <td>{{ $client->user->name }}</td>
                    <td>{{ $client->user->email }}</td>
                    <td>{{ $client->phone }}</td>
                    <td>{{ $client->address }}</td>
                    <td>{{ $client->city }}</td>
                    <td>{{ $client->state }}</td>
                    <td>{{ $client->zipcode }}</td>
                    <td>
                        <a href="{{route('admin.clients.edit', ['id'=>$client->id])}}">
                            <i class="glyphicon glyphicon-pencil"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {!! $clients->render() !!}

    </div>

@endsection