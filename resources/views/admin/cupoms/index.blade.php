@extends('app')

@section('content')

    <div class="container">
        <h3>Categorias</h3>
        <br>
        <a href="{{ route('admin.cupoms.create') }}" class="btn btn-default">Novo Cupom</a>
        <br><br>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>Id</td>
                    <td>Código</td>
                    <td>Valor</td>
                    <td>Ação</td>
                </tr>
            </thead>
            <tbody>
            @foreach($cupoms as $cupom)
                <tr>
                    <td>{{ $cupom->id }}</td>
                    <td>{{ $cupom->code }}</td>
                    <td>{{ $cupom->value }}</td>
                    <td>
                        -
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {!! $cupoms->render() !!}

    </div>

@endsection