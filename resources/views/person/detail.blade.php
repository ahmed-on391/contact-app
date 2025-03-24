<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-900 leading-tight">
            {{ __('Person') }} | {{$person->firstname}} {{$person->lastname}}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-100 min-h-screen">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-lg rounded-xl overflow-hidden">
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-6">Person Details</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div>
                            <dl class="space-y-4">
                                <div>
                                    <dt class="text-gray-700 font-semibold">Name</dt>	
                                    <dd class="text-gray-900">{{$person->firstname}} {{$person->lastname}}</dd>
                                </div>
                                <div>
                                    <dt class="text-gray-700 font-semibold">Phone</dt>
                                    <dd class="text-gray-900">{{$person->phone}}</dd>
                                </div>
                                <div>
                                    <dt class="text-gray-700 font-semibold">Email</dt>
                                    <dd class="text-gray-900">{{$person->email}}</dd>
                                </div>
                                <div>
                                    <dt class="text-gray-700 font-semibold">Birthday</dt>
                                    <dd class="text-gray-900">{{$person->birthday}}</dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                    <div class="mt-6 flex space-x-3">
                        <a href="{{ route('person.edit', $person->id) }}" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg transition duration-200">Edit Person</a>
                        <a href="{{ route('person.index') }}" class="bg-gray-600 hover:bg-gray-700 text-white font-semibold py-2 px-4 rounded-lg transition duration-200">Back to List</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>