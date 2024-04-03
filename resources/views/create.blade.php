@extends('templates.template')

@section('content') 

    <h1 class="text-center">Cadastrar</h1>

    <div class="col-8 m-auto">
    <form name="formCad" id="formCad" method="post" action="{{url('products')}}">
     @csrf
     
     <input class="form-control" type="text" name="name" id="name" placeholder="Nome">
     
     <input class="form-control" type="text" name="description" id="description" placeholder="Descrição">
     
     <input class="form-control" type="text" name="brand" id="brand" placeholder="Marca">
     
     <input class="form-control" type="text" name="price" id="price" placeholder="Preço"> 
     
     <input clas="btn btn-primary" type="submit" value="Cadastrar">  
    </form>
</div>
@endsection