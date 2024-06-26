@extends('templates.template')

@section('content') 
    <h1 class="text-center">CRUD</h1>

    <div class="text-center">
    <a href="{{url("products/create")}}" class="text-center mt-3 mb-4">
      <button class="btn btn-success">Cadastrar</button>
    </a>
    </div>

    <div class="col-8 m-auto">
    <table class="table text-center" >
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Descrição</th>
      <th scope="col">Marca</th>
      <th scope="col">Preço</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    
  @foreach($product as $products)
  
  
  
    <tr>
      <th scope="row">{{$products->id}}</th>
      <td>{{$products->name}}</td>
      <td>{{$products->description}}</td>
      <td>{{$products->brand}}</td>
      <td>R${{$products->price}}</td>
      <td>

      <div class="d-flex justify-content-between">
        <a href="{{"products/$products->id"}}">
          <button class="btn btn-dark btn-sm">Vizualizar</button>
        </a>
        <a href="{{url("products/$products->id/edit")}}">
          <button class="btn btn-primary btn-sm">Editar</button>
        </a>
        
        <form method="POST" action="{{ route('products.destroy', $products->id) }}">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
        </form>
        </div>
      </td>
    </tr>
  
    @endforeach
        
  </tbody>
</table>
    </div>
@endsection