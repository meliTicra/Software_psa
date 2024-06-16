<div class="buscador">
    <div class="container">
        <!-- Botón para agregar nuevo documento -->
        <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#documentoModal" style="background-color: #21243e;">
            Agregar Nuevo Documento
        </button>
    </div>

    <!-- Tabla para mostrar elementos -->
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-4">
                    <h2>Buscar <b>Documento</b></h2>
                </div>
            </div>
        </div>
        <div class="row text-center" id="loader"></div>
        <div class="row">
            <div class="col-12">
                <div class="table-filter">
                    <div class="row g-3 align-items-center">
                        <div class="col-md-5 col-sm-12">
                            <label for="procedencia" class="form-label">Procedencia</label>
                            <select class="form-select" id="procedencia" name="procedencia">
                                @include ('layouts.carreras')
                            </select>
                        </div>
                        <div class="col-md-2 col-sm-12">
                            <label for="nroCarta" class="form-label">Nro Carta:       . </label>
                            <input type="text" class="form-control" id="nroCarta" name="nroCarta">
                        </div>
                        <div class="col-md-2 col-sm-12">
                            <label for="fecha" class="form-label">Fecha</label>
                            <input type="date" class="form-control" id="fecha" name="fecha">
                        </div>
                        <div class="col-md-1 col-sm-6  align-items-end">
                            <label for="fecha" class="form-label">Buscar:</label>
                            <button type="button" class="btn btn-primary w-100" onclick="load(1);">
                                <i class="fa fa-search"></i> 
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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
</script>