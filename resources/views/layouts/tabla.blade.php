<!-- resources/views/layouts/tabla.blade.php -->
<div style="overflow-x:auto;">
    <table class="table table-striped table-hover">
        <thead>
            <tr class="table-title">
                <th>Nro</th>
                <th>Fecha</th>
                <th>Nro Carta</th>
                <th>Procedencia</th>
                <th>Detalle</th>
                <th>Providencia</th>
                <th>Carta</th>
                <th>Otro</th>
                <th>Archivado</th>
                <th>Repositorio</th>
                <th>Acción</th>
            </tr>
        </thead>

        <tbody>
            @foreach($documentos as $documento)
            <tr>
                <td>{{ $loop->iteracion }}</td>
                <td>{{ $documento->created_at->format('d/m/Y') }}</td>
                <td>{{ $documento->nro_carta }}</td>
                <td>{{ $documento->procedencia }}</td>
                <td>{{ $documento->detalle}}</td>
                <td>......</td>
                <td>......</td>
                <td>......</td>
                <td>Archivo</td>
                <td>Repositorio</td>
                <td>
                <i class="fas fa-trash-alt" style="cursor: pointer;"></i>
                </td>
                @endforeach
            <!-- Más filas aquí -->
        </tbody>
    </table>
</div>

