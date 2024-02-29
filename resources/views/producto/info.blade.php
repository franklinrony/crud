

  
  <!-- Modal Edit-->
  @foreach ($productos as $producto)

  <div class="modal fade" id="edit{{$producto->prod_id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">EDITAR PRODUCTO</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('productos.update',$producto->prod_id)}}" method="POST">
            @csrf
            @method('PUT')
        <div class="modal-body">
            <div class="mb-3">
            <label for="" class="form-label">Categoria</label>
            <select
                class="form-select form-select-lg"
                name="idCategoria"
                id="idCategoria"
            >
                @foreach ($categorias as $categoria)
                @if ($categoria->cate_id==$producto->cate_id)
                <option value="{{$categoria->cate_id}}" selected>{{$categoria->cate_nombre}}</option>
               @else
                    <option value="{{$categoria->cate_id}}">{{$categoria->cate_nombre}}</option>
                    @endif
                @endforeach
            </select>
        </div>
        
      <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input
            type="text"
            class="form-control"
            name="nombre"
            id="nombre"
            aria-describedby="helpId"
            placeholder=""
            value="{{$producto->prod_nombre}}"

        />
        <small id="helpId" class="form-text text-muted">Nombre del articulo</small>
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Cantidad</label>
        <input
            type="text"
            class="form-control"
            name="cantidad"
            id="cantidad"
            aria-describedby="helpId"
            placeholder=""
            value="{{$producto->prod_cantidad}}"

        />
        <small id="helpId" class="form-text text-muted">Cantidad</small>
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Precio</label>
        <input
            type="text"
            class="form-control"
            name="precio"
            id="precio"
            aria-describedby="helpId"
            placeholder=""
            value="{{$producto->prod_precio}}"

        />
        <small id="helpId" class="form-text text-muted">Precio</small>
      </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
        </form>
      </div>
    </div>
  </div>
@endforeach

  <!--modal borrar-->
  @foreach ($productos as $producto)
  <div class="modal fade" id="delete{{$producto->prod_id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">BORRAR CATEGORIA</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('productos.destroy',$producto->prod_id)}}" method="POST">
            @csrf
            @method('DELETE')
        <div class="modal-body">
          Estas seguro de eliminar <strong>{{$producto->prod_nombre}}</strong>?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Confirmar</button>
        </div>
        </form>
      </div>
    </div>
  </div>
  @endforeach