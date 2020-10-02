@extends('layouts.app')

@section ('botones')

<a href="{{ route('recetas.create')}}" class="btn btn-outline-primary mr-2 text-uppercase font-weight-bold"> 
    <svg width="3.5em" height="3.5em" viewBox="0 0 16 16" class="bi bi-plus-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
      </svg>
      <br>
      Crear receta
</a>

@endsection

@section('content')

<h2 class="text-center mb-5"> Administra tus recetas </h2>

<div class="col px-md-5 mx=auto bg=white p=3">
    <table class="table">
        <thead class="bg-primary text-light">
            <tr>
                 <th scole="col">Nombre </th> 
                 <th scole="col">Categoria </th> 
                 <th scole="col">Acciones </th> 
            </tr>
        </thead>
        <tbody>

            @foreach ($recetas as $receta)
                <tr>
                    <td> {{$receta->titulo}} </td>
                    <td> {{$receta->categoria->nombre}} </td>
                    <td >
                            <a href="{{ route('recetas.show', ['receta' => $receta->id]) }}" class="btn btn-success d-block mb-2">Ver</a>
                            
                            <a href=" {{ route('recetas.edit', ['receta' => $receta->id]) }}" class="btn btn-dark d-block mb-2 ">Editar</a>
                            <eliminar-receta
                            receta-id={{$receta->id}}
                        ></eliminar-receta>
                        
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>           
@endsection