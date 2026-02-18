<x-layout>
    <x-slot:heading>
        Job Detail
    </x-slot:heading>

    <h2 class="font-bold" >{{ $job['title'] }}</h2> 
    <p>
        Pays this much {{ $job['salary'] }} salary btw
    </p>

   <x-button href="/job/{{ $job['id'] }}/edit"> Edit job </x-button> 
</x-layout>