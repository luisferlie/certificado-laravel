<x-layouts.layout>
    <a href="alumnos/create" class="btn btn-primary w-25 table-pin-rows text-2xl">Añadir alumno

    </a>
    <a href="/alumnoEdit" class="btn btn-info w-25 table-pin-rows text-2xl">Editar alumno

    </a>
    <a href="alumnos/create" class="btn btn-secondary w-25 table-pin-rows text-2xl">Añadir alumno

    </a>
    <a href="alumnos/create" class="btn btn-primary w-25 table-pin-rows text-2xl">Añadir alumno

    </a>
    <button class="btn btn-error w-25 table-pin-rows text-white text-2xl">Eliminar aralumno

    </button>



<table class="flex flex-column bg-yellow-100 p-16">
    <tr class="bg-slate-700 text-white">
        <td>nombre</td>
        <td>apellidos</td>
        <td>telefono</td>
        <td>nombre</td>
        <td>email</td>
    </tr>
    @foreach ($alumnos as $alumno)

    <tr>
        <td>{{$alumno->nombre}}</td>
        <td>{{$alumno->apellidos}}</td>
        <td>{{$alumno->direccion}}</td>
        <td>{{$alumno->telefono}}</td>
        <td>{{$alumno->email}}</td>


        <form action="/alumnos/{{$alumno->id}}" method="post">
            @csrf;
            @method('delete');
            <td><button type="submit"><i class="fa fa-trash text-red-700" aria-hidden="true"></i></button></td>

        </form>

        <td>
            <a href="/alumnos/{{$alumno->id}}/edit"><i class="fa fa-edit text-red-700" aria-hidden="true"></i></a>
        </td>
    </tr>

    @endforeach

</table >




</x-layouts.layout>
