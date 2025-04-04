<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            {{ __('People') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <div class="p-6 bg-gradient-to-r from-blue-50 to-white">
                    <!-- Add Person Button -->
                    <div class="flex items-center justify-end mb-6">
                        <a 
                            class="bg-blue-600 text-white py-2 px-4 rounded-full shadow-lg hover:bg-blue-700 transition duration-200" 
                            href="{{ route('person.create') }}">
                            + Add Person
                        </a>
                    </div>

                    <!-- Table Section -->
                    <table class="w-full border-collapse bg-white shadow-sm rounded-lg overflow-hidden">
                        <thead>
                            <tr class="bg-blue-100 text-gray-700">
                                <th class="py-3 px-4 text-left text-sm font-semibold">Name</th>
                                <th class="py-3 px-4 text-left text-sm font-semibold">Email</th>
                                <th class="py-3 px-4 text-left text-sm font-semibold">Phone</th>
                                <th class="py-3 px-4 text-left text-sm font-semibold">Business</th>
                                <th class="py-3 px-4 text-left text-sm font-semibold">tags</th>
                                <th class="py-3 px-4 text-center text-sm font-semibold">Actions</th>
                                

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($people as $person)
                                <tr class="border-b hover:bg-gray-50 transition duration-150">
                                    <td class="py-3 px-4 text-gray-800">
                                        <a href="{{route('person.show', $person->id)}}">
                                            {{$person->firstname}} {{$person->lastname}}
                                        </a>
                                    </td>
                                    <td class="py-3 px-4 text-gray-800">{{ $person->email }}</td>
                                    <td class="py-3 px-4 text-gray-800">{{ $person->phone }}</td>
                                    <td class="py-3 px-4 text-gray-800 {{ ($person->business?->deleted_at) ? 'italic' : '' }}">
                                        {{ $person->business?->business_name }}
                                    </td>

                                    
                                    <td class="py-3 px-4 text-gray-800">
                                        @foreach($person->tags as $tag)
                                            <span class="bg-blue-200 text-blue-800 rounded-full px-2 py-1 text-xs mr-1">
                                                {{ $tag->tag_name }}
                                            </span>
                                        @endforeach
                                        
                                
                                    
                                    <td class="py-3 px-4 text-center flex justify-center gap-4">
                                        <!-- Edit Button -->
                                        <a 
                                            href="{{ route('person.edit', $person->id) }}" 
                                            class="text-blue-500 hover:text-blue-700">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931z"></path>
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 7.125L16.862 4.487M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10"></path>
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <!-- If no data exists -->
                    @if($people->isEmpty())
                        <p class="mt-6 text-center text-gray-500">No records found.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
