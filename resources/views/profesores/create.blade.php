<x-layouts.layout>
    <div class="text-3xl text-blue flex justify-center align-items-center pt-9">
        <form action="/profesores" class="text-3xl text-blue " method="post">
        @csrf

            <x-input-label class="text-3xl text-blue-400 ">Nombre:</x-input-label>
            <input type="text" name="nombre" class="bg-slate-100 rounded-md">

            @foreach ($errors->get('nombre') as $error)
            <p class="text-sm text-red-700">
                {{$error}}
            </p>

            @endforeach


            <x-input-label>apellidos:</x-input-label>
            <input type="text" name="apellidos" class="bg-slate-100 rounded-md">
            @foreach ($errors->get('apellidos') as $error)
            <p class="text-sm text-red-700">
                {{$error}}
            </p>
            @endforeach

            <x-input-label>email:</x-input-label>
            <input type="text" name="email" class="bg-slate-100 rounded-md">

            @foreach ($errors->get('email') as $error)
            <p class="text-sm text-red-700">
                {{$error}}
            </p>
            @endforeach

            <x-input-label>departamento:</x-input-label>
            <input type="text" name="departamento"  class="bg-slate-100 rounded-md">
            @foreach ($errors->get('departamento') as $error)
            <p class="text-sm text-red-700">
                {{$error}}
            </p>

            @endforeach

            <hr>
            <button type="submit" class=" mt-3 bg-slate-500 text-white p-3 rounded-xl m-auto">enviar</button>

        </form>
    </div>


</x-layouts.layout>
