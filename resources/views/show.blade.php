@extends('templates.template')

@section('content') 
    <h1 class="text-center">Vizualizar</h1>
<div class="col-8 m-auto">
    Nome: {{$product->name}}<br>
    Descrição: {{$product->description}}<br>
    Marca: {{$product->brand}}<br>
    Preço: R${{$product->price}}<br>
</div>
@endsection