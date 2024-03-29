<x-app-layout>
    <x-slot name="title">Crear nuevo post</x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Crear nuevo post
        </h2>
    </x-slot>

    <div class="w-1/2 mx-auto mt-5">
        <form class="form-post" action="/posts" method="POST">
            <h2 class="font-bold text-xl">Crear post</h2>

            @csrf

            <div class="form-group">
                <label>Título</label>
                <input type="text" name="title" value="{{ old('title') }}"> 
                {{-- El helper old preservera el valor original --}}
                @error('title')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Resumen</label>
                <textarea name="excerpt" id="" cols="30" rows="4">{{ old('excerpt') }}</textarea>
                @error('excerpt')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Contenido</label>
                <textarea name="content" id="" cols="30" rows="6">{{ old('content') }}</textarea>
                @error('content')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
            </div>
            <div class="flex gap-x-1 mt-2">
                <button type="submit" class="btn-primary">Guardar</button>
                <a href="/" class="btn">Cancelar</a>
            </div>
        </form>
    </div>
</x-app-layout>
