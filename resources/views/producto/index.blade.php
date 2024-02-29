@extends('main')

@section('content')
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mb-1 " data-bs-toggle="modal" 
data-bs-target="#create">
    Nuevo
  </button>
<div
    class="table-responsive"
>
    <table
        class="table "
    >
        <thead class="bg-dark text-white">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">CATEGORIA</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">CANTIDAD</th>
                <th scope="col">PRECIO</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as  $producto)

            <tr class="">
                <td scope="row">{{$producto->prod_id}}</td>
                <td>{{$producto->categoria->cate_nombre}}</td>
                <td>{{$producto->prod_nombre}}</td>
                <td>{{$producto->prod_cantidad}}</td>
                <td>{{$producto->prod_precio}}</td>
                <td><button type="button" class="btn btn-success   mb-1 " data-bs-toggle="modal" 
                    data-bs-target="#edit{{$producto->prod_id}}">
                       Editar
                      </button>
                      <button type="button" class="btn btn-danger  mb-1 " data-bs-toggle="modal" 
                      data-bs-target="#delete{{$producto->prod_id}}">
                         Eliminar
                        </button>
                    </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>
<!--ventanas modales-->
@include('producto.create')
@include('producto.info')
@endsection