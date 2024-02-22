<x-layouts.layout>
    <a href="profesores/create" class="btn btn-primary w-25 table-pin-rows text-2xl">Añadir profesor
    </a>
    <a href="/prodesorEdit" class="btn btn-info w-25 table-pin-rows text-2xl">Editar profesor

    </a>


    </a>


    </a>
    <button class="btn btn-error w-25 table-pin-rows text-white text-2xl">Eliminar profesor

    </button>



<table class="flex flex-column bg-yellow-100 p-16">
    <tr class="bg-slate-700 text-white">
        <td>nombre</td>
        <td>apellidos</td>
        <td>departamento</td>
        <td>email</td>
    </tr>
    @foreach ($profesores as $profesor)

    <tr>
        <td>{{$profesor->nombre}}</td>
        <td>{{$profesor->apellidos}}</td>
        <td>{{$profesor->departamento}}</td>
        <td>{{$profesor->email}}</td>


        <form action="/profesores/{{$profesor->id}}" method="post">
            @csrf;
            @method('delete');
            <td><button type="submit"><i class="fa fa-trash text-red-700" aria-hidden="true"></i></button></td>

        </form>

        <td>
            <a href="/profesores/{{$profesor->id}}/edit"><i class="fa fa-edit text-red-700" aria-hidden="true"></i></a>
        </td>
    </tr>

    @endforeach

</table >




</x-layouts.layout>
