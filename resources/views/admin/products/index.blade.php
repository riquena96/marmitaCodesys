@extends('app')

@section('content')

    <div class="container">
        <h3>Produtos</h3>
        <br>
        <a href="{{ route('admin.products.create') }}" class="btn btn-default">Novo Produto</a>
        <br><br>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>Id</td>
                    <td>Produto</td>
                    <td>Categoria</td>
                    <td>Preço</td>
                    <td>Ação</td>
                </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->category->name }}</td>
                    <td>R$ {{ $product->price }}</td>
                    <td>
                        <a href="{{route('admin.products.edit', ['id'=>$product->id])}}">
                            <i class="glyphicon glyphicon-pencil"></i>
                        </a>
                        <a href="{{route('admin.products.destroy', ['id'=>$product->id])}}">
                            <i class="glyphicon glyphicon-trash"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {!! $products->render() !!}

    </div>

@endsection