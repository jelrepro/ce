<x-admin-layout>
    <h1 class="text-2xl font-bold">PROYECTOS</h1>
    <p class="font-bold text-black-500 text-left">${{$totalCostoPD}} ({{$contadorPD}} Obras)</p>
    <p class="font-bold text-black-500 text-left">${{$totalCostoC}} ({{$contadorConstruccion}} Obras)</p>
    <div class="grid grid-cols-5 gap-4">
        <div class="col-span-1">
            <h1 class="font-bold text-gray-500">PLANIFICADO</h1><br>
            <p class="font-bold text-black-500 text-left">${{$totalCostoP}} ({{$contadorPlanificado}} Obras)</p>
            @foreach ($proyectos as $proyecto)
                @if($proyecto->estado_gestion_id == 0)
                    <div style="position: relative;" class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow light:bg-gray-800 light:border-gray-700">
                        <a href="#" style="position: absolute; top: 0; left: 0; margin:2px">
                            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white" style="color: rgb(35, 108, 165)">{{ $proyecto->proyectos }}</h5>
                        </a>
                        <button type="button" class="font-medium rounded-lg" style="margin:5px 2px; position: absolute; top: 0; right: 0; padding:0 4px; color:#fff; background-color:
                            @if($proyecto->estado_id == 0)
                                rgb(32,160,59)
                            @elseif($proyecto->estado_id == 1)
                                rgb(255,96,90)
                            @elseif($proyecto->estado_id == 2)
                                rgb(255,30,13)
                            @elseif($proyecto->estado_id == 3)
                                rgb(255,193,7)
                            @endif
                        ">
                            {{ $proyecto->estado->nombreEstado }}
                        </button><br>
                        <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">{{ $proyecto->descripcion }}</p>
                        <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">${{ $proyecto->costoProyecto }}</p>
                        <p class="mb-3 font-normal text-gray-500 dark:text-gray-400" style="position: absolute; bottom: 25px; right: 2px; font-style: italic;">{{ $proyecto->responsable }}</p>
                        
                    </div><br>
                @endif
            @endforeach
        </div>
        <div class="col-span-1">
            <h1 class="font-bold text-gray-500">DISEÑO Y DESARROLLO</h1><br>
            <p class="font-bold text-black-500 text-left">${{$totalCostoD}} ({{$contadorDisenoDesarrollo}} Obras)</p>
            @foreach ($proyectos as $proyecto)
                @if($proyecto->estado_gestion_id == 1)
                <div style="position: relative;" class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow light:bg-gray-800 light:border-gray-700">
                        <a href="#" style="position: absolute; top: 0; left: 0; margin:2px">
                            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white" style="color: rgb(35, 108, 165)">{{ $proyecto->proyectos }}</h5>
                        </a>
                        <button type="button" class="font-medium rounded-lg" style="margin:5px 2px; position: absolute; top: 0; right: 0; padding:0 4px; color:#fff; background-color:
                            @if($proyecto->estado_id == 0)
                                rgb(32,160,59)
                            @elseif($proyecto->estado_id == 1)
                                rgb(255,96,90)
                            @elseif($proyecto->estado_id == 2)
                                rgb(255,30,13)
                            @elseif($proyecto->estado_id == 3)
                                rgb(255,193,7)
                            @endif
                        ">
                            {{ $proyecto->estado->nombreEstado }}
                        </button><br>
                        <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">{{ $proyecto->descripcion }}</p>
                        <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">${{ $proyecto->costoProyecto }}</p>
                        <p class="mb-3 font-normal text-gray-500 dark:text-gray-400" style="position: absolute; bottom: 25px; right: 2px; font-style: italic;">{{ $proyecto->responsable }}</p>
                        
                    </div><br>
                @endif
            @endforeach
        </div>
        <div class="col-span-1">
            <h1 class="font-bold text-gray-500">CONSTRUCCIÓN</h1><br>
            <p class="font-bold text-black-500 text-left">${{$totalCostoC}} ({{$contadorConstruccion}} Obras)</p>
            @foreach ($proyectos as $proyecto)
                @if($proyecto->estado_gestion_id == 2)
                <div style="position: relative;" class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow light:bg-gray-800 light:border-gray-700">
                        <a href="#" style="position: absolute; top: 0; left: 0; margin:2px">
                            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white" style="color: rgb(35, 108, 165)">{{ $proyecto->proyectos }}</h5>
                        </a>
                        <button type="button" class="font-medium rounded-lg" style="margin:5px 2px; position: absolute; top: 0; right: 0; padding:0 4px; color:#fff; background-color:
                            @if($proyecto->estado_id == 0)
                                rgb(32,160,59)
                            @elseif($proyecto->estado_id == 1)
                                rgb(255,96,90)
                            @elseif($proyecto->estado_id == 2)
                                rgb(255,30,13)
                            @elseif($proyecto->estado_id == 3)
                                rgb(255,193,7)
                            @endif
                        ">
                            {{ $proyecto->estado->nombreEstado }}
                        </button><br>
                        <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">{{ $proyecto->descripcion }}</p>
                        <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">${{ $proyecto->costoProyecto }}</p>
                        <p class="mb-3 font-normal text-gray-500 dark:text-gray-400" style="position: absolute; bottom: 25px; right: 2px; font-style: italic;">{{ $proyecto->responsable }}</p>
                        
                    </div><br>
                @endif
            @endforeach
        </div>
        <div class="col-span-1">
            <h1 class="font-bold text-gray-500">PRUEBAS Y PUESTAS EN SERVICIO</h1>
            <p class="font-bold text-black-500 text-left">${{$totalCostoS}} ({{$contadorPruebas}} Obras)</p>
            @foreach ($proyectos as $proyecto)
                @if($proyecto->estado_gestion_id == 3)
                <div style="position: relative;" class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow light:bg-gray-800 light:border-gray-700">
                        <a href="#" style="position: absolute; top: 0; left: 0; margin:2px">
                            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white" style="color: rgb(35, 108, 165)">{{ $proyecto->proyectos }}</h5>
                        </a>
                        <button type="button" class="font-medium rounded-lg" style="margin:5px 2px; position: absolute; top: 0; right: 0; padding:0 4px; color:#fff; background-color:
                            @if($proyecto->estado_id == 0)
                                rgb(32,160,59)
                            @elseif($proyecto->estado_id == 1)
                                rgb(255,96,90)
                            @elseif($proyecto->estado_id == 2)
                                rgb(255,30,13)
                            @elseif($proyecto->estado_id == 3)
                                rgb(255,193,7)
                            @endif
                        ">
                            {{ $proyecto->estado->nombreEstado }}
                        </button><br>
                        <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">{{ $proyecto->descripcion }}</p>
                        <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">${{ $proyecto->costoProyecto }}</p>
                        <p class="mb-3 font-normal text-gray-500 dark:text-gray-400" style="position: absolute; bottom: 25px; right: 2px; font-style: italic;">{{ $proyecto->responsable }}</p>
                        
                    </div><br>
                @endif
            @endforeach
        </div>
        <div class="col-span-1">
            <h1 class="font-bold text-gray-500">CIERRE</h1><br>
            <p class="font-bold text-black-500 text-left">${{$totalCostoE}} ({{$contadorCierre}} Obras)</p>
            @foreach ($proyectos as $proyecto)
                @if($proyecto->estado_gestion_id == 4)
                <div style="position: relative;" class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow light:bg-gray-800 light:border-gray-700">
                        <a href="#" style="position: absolute; top: 0; left: 0; margin:2px">
                            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white" style="color: rgb(35, 108, 165)">{{ $proyecto->proyectos }}</h5>
                        </a>
                        <button type="button" class="font-medium rounded-lg" style="margin:5px 2px; position: absolute; top: 0; right: 0; padding:0 4px; color:#fff; background-color:
                            @if($proyecto->estado_id == 0)
                                rgb(32,160,59)
                            @elseif($proyecto->estado_id == 1)
                                rgb(255,96,90)
                            @elseif($proyecto->estado_id == 2)
                                rgb(255,30,13)
                            @elseif($proyecto->estado_id == 3)
                                rgb(255,193,7)
                            @endif
                        ">
                            {{ $proyecto->estado->nombreEstado }}
                        </button><br>
                        <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">{{ $proyecto->descripcion }}</p>
                        <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">${{ $proyecto->costoProyecto }}</p>
                        <p class="mb-3 font-normal text-gray-500 dark:text-gray-400" style="position: absolute; bottom: 25px; right: 2px; font-style: italic;">{{ $proyecto->responsable }}</p>
                        
                    </div><br>
                @endif
            @endforeach
        </div>
    </div>
</x-admin-layout>
