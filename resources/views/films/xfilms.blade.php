<x-app-layout>
    <x-slot name="header">

        {{-- {{var_dump($films)}} --}}
         
      
    </x-slot>

    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                 
                    {{-- @extends('plantilla') --}}
                    @section('title','Plantilla')
                    @section('contenido')
              
                     

                    @endsection
                    @forelse ($films as $film)
                    <p>Titulo: {{ $film->title  }} |  {{ $film->created_at }} </p>  
                @empty    
                    <p>No hay peliculas</p>
                @endforelse
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
