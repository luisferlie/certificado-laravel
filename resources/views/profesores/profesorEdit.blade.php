<x-layouts.layout>
    <div class="text-3xl text-blue flex justify-center align-items-center pt-9">
        <form action="/profesores/{{ $profesor->id }}" class="text-3xl text-blue  " method="post">

            @csrf
            @method('PUT')



            <x-input-label class="text-3xl text-blue-400 ">Nombre:</x-input-label>
            <input type="text" name="nombre" class="bg-slate-100 rounded-md  text-red-800"
                value="{{ $profesor->nombre }}">
            {{ $errors }}
            <x-input-label>apellidos:</x-input-label>
            <input type="text" name="apellidos" class="bg-slate-100 rounded-md  text-red-800"
                value="{{ $profesor->apellidos }}">
            <x-input-label class="text-success">departamento:</x-input-label>
            <input type="text" name="departamento" class="bg-slate-100 rounded-md  text-red-800"
                value="{{ $profesor->departamento }}">


            <x-input-label>email:</x-input-label>
            <input type="text" name="email" class="bg-slate-100 rounded-md text-red-800"
                value="{{ $profesor->email }}">




            <hr>
            <button type="submit" onclick="confirmEdition(e,this)" class=" mt-3 bg-slate-500 text-white p-3 rounded-xl m-auto">actualizar</button>

        </form>
    </div>
    <script>
        window.onload = () => setTimeout(() => document.getElementById('crearProfesor').style.display = 'none', 2000);
    </script>

    <script>
        function confirmEdition(event, button) {
            event.preventDefault();
            Swal.fire({
                title: '¿Estás seguro?',
                text: "vas a modificar el profesor!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#2300d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sí, borrarlo!'
            }).then((result) => {
                console.log("Botón" +button);
                console.log(result.isConfirmed);
                if (result.isConfirmed) {
                    // Buscar el formulario más cercano y enviarlo
                    console.log(button);
                    button.closest('form').submit();
                }
            });
        }
    </script>
    {{-- <script>
        <!--
            const target = document.getElementById('borrarMessage')
            window.onload=() => setTimeout(() => target.style.display('none') , 3000)
        -->
        document.addEventListener('DOMContentLoaded', function() {
            const target = document.getElementById('borrarMessage');

            // Opacidad 1 = 100%
            target.style.opacity = 1;

            // Después de 3 segundos, vamos bajando opacidad
            setTimeout(function() {
                let opacity = 1;
                const interval = setInterval(function() {
                    opacity -= 0.01; // Bajamos en 1% cada vez
                    target.style.opacity = opacity;

                    // Para opacidad 0
                    if (opacity <= 0) {
                        target.style.display = 'none';
                        clearInterval(interval);
                    }
                }, 15); // 15ms de delay cada 1%
            }, 3000); // 3000ms (3s) de delay antes de ejecución
        });
    </script> --}}


</x-layouts.layout>
