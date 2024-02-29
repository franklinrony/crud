

  
  <!-- Modal -->
  <div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">AGREGAR CATEGORIA</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('productos.store')}}" method="POST">
            @csrf
        <div class="modal-body">
            <div class="mb-3">
                <label for="" class="form-label">Categoria</label>
                <select
                    class="form-select form-select-lg"
                    name="idCategoria"
                    id="idCategoria"
                >
                    <option selected>Select one</option>
                    @foreach ($categorias as $categoria)
                        <option value="{{$categoria->cate_id}}">{{$categoria->cate_nombre}}</option>
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