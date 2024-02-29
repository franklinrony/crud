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
        class="table"
    >
        <thead class="bg-dark text-white">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">DESCRIPCION</th>
                <th scope="col">ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categorias as  $categoria)
                
            <tr class="">
                <td scope="row">{{$categoria->cate_id}}</td>
                <td>{{$categoria->cate_nombre}}</td>
                <td>{{$categoria->cate_descripcion}}</td>
                <td><button type="button" class="btn btn-success   mb-1 " data-bs-toggle="modal" 
                    data-bs-target="#edit{{$categoria->cate_id}}">
                       Editar
                      </button>
                      <button type="button" class="btn btn-danger  mb-1 " data-bs-toggle="modal" 
                      data-bs-target="#delete{{$categoria->cate_id}}">
                         Eliminar
                        </button>
                    </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>
<!--ventanas modales-->
@include('categoria.create')
@include('categoria.info')
@endsection