<x-layout>

    <x-slot:heading>
        Job list
    </x-slot:heading>
    <ul class="space-y-4">
        @foreach ($jobs as $job)
            <li>
                <a href="/job/{{ $job['id'] }}" class="text-xl block px-4 py-6 border border-gray-200 rounded"> 
                    <div class="font-bold text-blue-500">
                        {{ $job->employer->name }}
                    </div>
                    <div>
                        <strong> {{ $job['title'] }} : </strong>  pays {{ $job['salary'] }} per year
                    </div>
                </a>
            </li>
        @endforeach
        <div>
            {{ $jobs->links() }}
        </div>
    </ul>
    
</x-layout>