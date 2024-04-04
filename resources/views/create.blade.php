@extends('templates.template')

@section('content') 

    <h1 class="text-center">@if(isset($product)) Editar @else Cadastrar @endif</h1>

    <div class="col-8 m-auto">
    
    @if(isset($product))
    <form name="formEdit" id="formEdit" method="post" action="{{url("products/$product->id")}}">
    @method('put')

    @else
    <form name="formCad" id="formCad" method="post" action="{{url('products')}}">
    @endif
    
    @csrf
     
     <input class="form-control" type="text" name="name" id="name" placeholder="Nome" value="{{$product->name ?? ''}}" required>
     
     <input class="form-control" type="text" name="description" id="description" placeholder="Descrição" value="{{$product->description ?? ''}}" required>
     
     <input class="form-control" type="text" name="brand" id="brand" placeholder="Marca" value="{{$product->brand ?? ''}}" required>
     
     <input class="form-control" type="text" name="price" id="price" placeholder="Preço" value="{{$product->price ?? ''}}" required> 
     
     <input type="submit" class="btn btn-primary" value="@if(isset($product))Editar @else Cadastrar @endif">  
    </form>
</div>
@endsection