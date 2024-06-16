<form action="{{ route('documentos.store') }}" method="POST" enctype="multipart/form-data">
@csrf
    <div class="modal fade" id="documentoModal" tabindex="-1" aria-labelledby="documentoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="documentoModalLabel">Agregar Nuevo Documento</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="nroCarta" class="form-label">Nro Carta:</label>
                                <input type="text" class="form-control" id="nroCarta" name="nroCarta">
                            </div>
                            <div class="mb-3">
                                <label for="procedencia" class="form-label">Procedencia:</label>
                                <select class="form-select" id="procedencia" name="procedencia">
                                    @include ('layouts.carreras')
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="nroCarta" class="form-label">Archivo:</label>
                                <input type="text" class="form-control" id="nroCarta" name="nroCarta">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="detalle" class="form-label">Detalle:</label>
                                <textarea class="form-control" id="detalle" name="detalle"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="imagen" class="form-label">Imagen:</label>
                                <input type="file" class="form-control" id="imagen" name="imagen" accept="image/*" onchange="previewImage(event)">
                            </div>
                            <div class="mb-3">
                                <img id="imagePreview" src="#" alt="Vista previa de la imagen" style="max-width: 100%; max-height: 200px; display: none;">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Agregar</button>
                </div>
            </div>
        </div>
    </div>
</form>
<script>
    function previewImage(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var output = document.getElementById('imagePreview');
            output.src = reader.result;
            output.style.display = 'block';
        };
        reader.readAsDataURL(event.target.files[0]);
    }

    $(document).ready(function() {
        $('#procedencia').select2({
            placeholder: 'Selecciona una procedencia',
            allowClear: true,
            width: '100%'
        });
    });
</script>
