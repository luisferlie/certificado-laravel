<x-layouts.layout>
    <a href="/profesores/create" class="btn btn-primary w-25 table-pin-rows text-2xl">Añadir profesor
    </a>
    </button>

    @if (session('status'))
        <h1 class="z-10">informacion {{ session('status') }}</h1>
        <script>
            Swal.fire("Sprofe añadido")
        </script>
    @endif
    @if (session('actualizar'))
        <p id="actualizar" class="p-8 bg-amber-600 " id="crearProfesor">{{ session('actualizar') }}</p>
        <script>
            Swal.fire("Sprofe aactualizado")
        </script>
    @endif

    {{-- @if (session('borrar'))
        <p id="borrarMessage" class="p-4 rounded-lg bg-red-400 font-bold w-3/12">{{ session('borrar') }}</p>
        <script>
            Swal.fire({
                position: "top-end",
                icon: "danger",
                title: "has eliminado al profesor",
                showConfirmButton: true,
                timer: 1500
            });
        </script>
    @endif --}}



    <div class="flex flex-col justify-center align-items-xl-center ml-80 w-3/6">
        <table class="flex flex-column bg-yellow-100 p-16">
            <tr class="bg-slate-700 text-white">
                <td>nombre</td>
                <td>apellidos</td>
                <td>departamento</td>
                <td>email</td>
            </tr>
            @foreach ($profesores as $profesor)
                <tr>
                    <td>{{ $profesor->nombre }}</td>
                    <td>{{ $profesor->apellidos }}</td>
                    <td>{{ $profesor->departamento }}</td>
                    <td>{{ $profesor->email }}</td>

                    <td>
                        <a href="/profesores/{{ $profesor->id }}/edit"><i class="fa fa-edit text-red-700"
                                aria-hidden="true"></i></a>
                    </td>
                    <td>
                        <form action="/profesores/{{ $profesor->id }}" method="post">
                            @csrf
                            @method('DELETE')

                            <button id="bot" type="submit" onClick="confirmDeletion(event,this)">
                                <i class="fa fa-trash text-red-700" aria-hidden="true"></i>
                            </button>
                        </form>
                    </td>

                </tr>
            @endforeach

        </table>
    </div>
    <script>
        window.onload = () => {
            setTimeout(() => document.getElementById('actualizar').style.display = 'none', 2000);
        }

        function confirmDeletion(event, button) {
            event.preventDefault();
            Swal.fire({
                title: '¿Estás seguro?',
                text: "No podrás revertir esto!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sí, borrarlo!'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Buscar el formulario más cercano y enviarlo
                    button.closest('form').submit();
                }
            });
        }
    </script>



</x-layouts.layout>
