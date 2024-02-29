

  
  <!-- Modal Edit-->
  @foreach ($categorias as $categoria)

  <div class="modal fade" id="edit{{$categoria->cate_id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">EDITAR CATEGORIA</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('categorias.update',$categoria->cate_id)}}" method="POST">
            @csrf
            @method('PUT')
        <div class="modal-body">
          <div class="mb-3">
            <label for="" class="form-label">Nombre</label>
            <input
                type="text"
                class="form-control"
                name="nombre"
                id="nombre"
                aria-describedby="helpId"
                placeholder=""
                value="{{$categoria->cate_nombre}}"
            />
            <small id="helpId" class="form-text text-muted">Nombre del articulo</small>
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Descripcion</label>
            <input
                type="text"
                class="form-control"
                name="descripcion"
                id="descripcion"
                aria-describedby="helpId"
                placeholder=""
                value="{{$categoria->cate_descripcion}}"
            />
            <small id="helpId" class="form-text text-muted">Descripcion del articulo</small>
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
  @foreach ($categorias as $categoria)
  <div class="modal fade" id="delete{{$categoria->cate_id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">BORRAR CATEGORIA</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('categorias.destroy',$categoria->cate_id)}}" method="POST">
            @csrf
            @method('DELETE')
        <div class="modal-body">
          Estas seguro de eliminar <strong>{{$categoria->cate_nombre}}</strong>?
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