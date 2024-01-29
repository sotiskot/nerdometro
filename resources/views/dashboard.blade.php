<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 flex justify-center gap-6 flex-wrap">
        @foreach(['Anime', 'Games', 'Movies'] as $title)
            @component('components.category-card', ['cat_title' => $title,'cat_link'=> 'category/'.strtolower($title)])
            @endcomponent
        @endforeach
    </div>
</x-app-layout>
