<x-layout>
    <x-slot:heading>
        Edit Job : {{ $job['title'] }}
    </x-slot:heading>
    <form method="POST" action="/job/{{ $job['id'] }}">
        @csrf
        @method('PATCH')
        <div class="space-y-12">
          <div class="border-b border-gray-900/10 pb-12">
      
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
              <div class="sm:col-span-4">
                <label for="title" class="block text-sm/6 font-medium text-gray-900">Title</label>
                <div class="mt-2">
                  <div class="flex items-center rounded-md bg-white pl-3 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                    <input id="title" type="text" name="title" placeholder="job title" class="block min-w-0 grow bg-white py-1.5 px-3 pl-1 pr-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline focus:outline-0 sm:text-sm/6" value="{{ $job['title'] }}" />
                  </div>
                </div>
              </div>
      
            </div>
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
              <div class="sm:col-span-4">
                <label for="salary" class="block text-sm/6 font-medium text-gray-900">Salary</label>
                <div class="mt-2">
                  <div class="flex items-center rounded-md bg-white pl-3 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                    <input id="salary" type="text" name="salary" placeholder="job salary" class="block min-w-0 grow bg-white py-1.5 px-3 pl-1 pr-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline focus:outline-0 sm:text-sm/6" value="{{ $job['salary'] }}"/>
                  </div>
                </div>
              </div>
            </div>
            <div class="mt-4 text-red-600 italic">
                @if ($errors->any())
                <ul >
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
        </div>
      
        </div>
      
        <div class="mt-6 flex items-center justify-between gap-x-6">
            <div class="flex items-center">
                <button form="delete-form" class="text-red-500">Delete</button> 
            </div>
            <div class="flex items-center gap-x-6">
                <a href="/job/{{ $job['id'] }}" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
                <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
            </div>
        </div>
      </form>

      <form method="POST" action="/job/{{ $job['id'] }} " id="delete-form" class="hidden">
        @csrf
        @method('DELETE')

      </form>
      
      

</x-layout>