<x-layout>
    <x-slot:heading>
        Job Detail
    </x-slot:heading>

    <h2 class="font-bold" >{{ $job['title'] }}</h2> 
    <p>
        Pays this much {{ $job['salary'] }} salary btw
    </p>
</x-layout>