<x-admin-layout>
    <h1>Proyectos</h1>
    <table class="default">
        <tr>
            <th>#</th>
            <th>nombre</th>
            <th>municipio</th>
            <th>costo</th>
            <th>estado</th>
            <th>cliente</th>
            <th>supervisor</th>
            <th>telefon</th>
            <th>correo</th>
            <th>desc</th>
            <th>esta ges</th>
            <th>objeto</th>
            <th>alcance</th>
            <th>anio</th>
            <th>responsable</th>
            <th>centro costos</th>
            <th>orden int</th>
            <th>cod inva</th>
            <th>grupo</th>
            <th>otipo</th>
        </tr>
        @foreach ($proyectos as $proyecto)
        <tr>
            <td>{{ $proyecto->id }}</td>
            <td>{{ $proyecto->proyectos }}</td>
            <td>{{ $proyecto->municipio_id }}</td>
            <td>{{ $proyecto->costoProyecto }}</td>
            <td>{{ $proyecto->estado_id }}</td>
            <td>{{ $proyecto->cliente }}</td>
            <td>{{ $proyecto->supervisor }}</td>
            <td>{{ $proyecto->telefono }}</td>
            <td>{{ $proyecto->correo }}</td>
            <td>{{ $proyecto->descripcion }}</td>
            <td>{{ $proyecto->estado_gestion_id }}</td>
            <td>{{ $proyecto->objeto }}</td>
            <td>{{ $proyecto->alcance }}</td>
            <td>{{ $proyecto->anio }}</td>
            <td>{{ $proyecto->responsable }}</td>
            <td>{{ $proyecto->centro_costos }}</td>
            <td>{{ $proyecto->orden_interna }}</td>
            <td>{{ $proyecto->cod_inva }}</td>
            <td>{{ $proyecto->grupo_proyecto_id }}</td>
            <td>{{ $proyecto->tipo_proyecto_id}}</td>

        </tr>
        @endforeach
    </table>
</x-admin-layout>