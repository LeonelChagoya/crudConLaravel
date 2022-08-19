
@extends('layouts.app')

@section('content')
<div class="container">



@if(Session :: has('mensaje'))
<div class="alert alert-success alert-dismissible" role="alert">
{{Session :: get('mensaje')}}
<button type="button" class="close" data-dismiss="alert" aria-label="Close">

<span aria-hidden="true">&times;</span>
</button>
</div>
@endif





<a href="{{url('producto/create')}}" 
class="btn btn-success"
>Registrar nuevo producto</a>
<br>
<br>
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre </th>
            <th>Descripción </th>
            <th>Precio </th>
            <th>Stock</th>
             <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($productos as $producto)
        <tr>
            <td>{{ $producto->id}}</td>


            <td>
                <img class="img-thumbnail img-fluid"
                src="{{asset('storage').'/'.$producto->Foto}}" alt="" width="100">

               
            </td>


            <td>{{ $producto->Nombre}}</td>
            <td>{{ $producto->Descripción}}</td>
            <td>{{ $producto->Precio}}</td>
            <td>{{ $producto->Stock}}</td>
            <td>
                <a href="{{url('/producto/'.$producto->id.'/edit')}}" 
                class="btn btn-warning"
                >
                Editar
                </a>
            |
                
            <form action="{{url('/producto/'.$producto->id)}}"
             method="post"
             class="d-inline"
             >
            @csrf 
            {{method_field('DELETE')}}
            <input type="submit" value="Borrar" onclick="return confirm('¿Quieres borrar?')"
            class="btn btn-danger"
            >
            </form>
            
           </td>
            <td></td>
        </tr>
        @endforeach
    </tbody>
</table>
{!!$productos->links()!!}
</div>
@endsection