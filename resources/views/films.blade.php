<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Films') }} 
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <x-nav-link :href="route('films')" :active="request()->routeIs('films')">
                    {{ __('Find') }}
                </x-nav-link>
                <x-nav-link :href="route('films')" :active="request()->routeIs('films')">
                    {{ __('See') }}
                </x-nav-link>
                <x-nav-link :href="route('films')" :active="request()->routeIs('films')">
                    {{ __('+') }}
                </x-nav-link>
                <x-nav-link :href="route('films')" :active="request()->routeIs('films')">
                    {{ __('-') }}
                </x-nav-link>
            
            </div>
        </div>   
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Show you picture for modify") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
