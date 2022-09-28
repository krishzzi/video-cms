

<x-layout::layout :vite="false" :livewire="false" :og_tag="true" :manifest="false" :preloader="true" :preloaderPath="trim('http://www.downgraf.com/wp-content/uploads/2014/09/01-progress.gif')" >


    <x-slot name='layout_title'>Rambowx|Laravel</x-slot>
    <x-slot name='layout_keyword'>rambowx,Laravel,,layout</x-slot>
    <x-slot name='layout_description'>Laravel meta description goes here</x-slot>

    <h1> Welcome </h1>

    @for ($i = 0; $i < 100; $i++)
        The current value is {{ $i }} <br> <br>

    @endfor


</x-layout::layout>
