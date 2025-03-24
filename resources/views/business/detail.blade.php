<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Businesses') }} | {{$business->business_name}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="p-6 text-gray-900">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <!-- Company Details -->
                        <div class="bg-gray-50 p-6 rounded-lg shadow-md">
                            <h3 class="font-semibold text-lg pb-4">Company Details</h3>
                            <dl>
                                <dt class="font-semibold">Name</dt>
                                <dd class="pl-3 text-gray-700">{{$business->business_name}}</dd>
                                <dt class="font-semibold mt-2">Contact Email</dt>
                                <dd class="pl-3 text-gray-700">{{$business->contact_email}}</dd>
                            </dl>
                            <div class="pt-4">
                                <a class="bg-blue-600 text-white py-2 px-4 rounded-full shadow-md hover:bg-blue-700 transition duration-300" href="{{route('business.edit', $business->id)}}">Edit Business</a>
                            </div>
                        </div>
                        
                        <!-- Create Task Form -->
                        <div class="sm:col-span-3">
                            <h3 class="font-semibold text-l pb-5"> Task</h3>
                            @foreach($business->tasks as $task)
                            {{$task->title}}
                                
                            @endforeach
                        </div>
                        {{-- <div class="bg-gray-50 p-6 rounded-lg shadow-md">
                            <h3 class="font-semibold text-lg pb-4">Create a New Task</h3>
                            <form action="{{ route('task.store') }}" method="POST" class="space-y-4">
                                @csrf
                                <input type="hidden" name="taskable_id" value="{{$business->id}}">
                                <input type="hidden" name="target_model" value="business">
                                <div>
                                    <label class="block font-semibold" for="title">Task Title</label>
                                    <input class="block w-full border rounded-md p-2 focus:ring-blue-500 focus:border-blue-500" type="text" name="title" id="title" value="{{ old('title') }}">
                                </div>
                                <div>
                                    <label class="block font-semibold" for="description">Task Description</label>
                                    <textarea class="block w-full border rounded-md p-2 focus:ring-blue-500 focus:border-blue-500" name="description" id="description">{{ old('description') }}</textarea>
                                </div>
                                <div class="flex justify-end">
                                    <button type="submit" class="bg-blue-600 text-white py-2 px-4 rounded-full shadow-md hover:bg-blue-700 transition duration-300">Create Task</button>
                                </div>
                            </form>
                        </div> --}}
                    </div>

                    <!-- Tasks Section -->
                    {{-- <div class="mt-8">
                        <h3 class="font-semibold text-lg pb-4">Tasks</h3>
                        @forelse ($business->tasks as $task)
                            <div class="border-t border-gray-300 py-4">
                                <h4 class="font-semibold text-gray-900">{{$task->title}}</h4>
                                <p class="text-gray-700">{{$task->description}}</p>
                                @if ($task->status == "open")
                                    <div class="pt-3">
                                        <form action="{{route('task.complete', $task->id)}}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <button class="bg-green-600 text-white py-2 px-4 rounded-full shadow-md hover:bg-green-700 transition duration-300" type="submit">Complete Task</button>
                                        </form>
                                    </div>
                                @else
                                    <p class="italic text-gray-500">Completed</p>
                                @endif
                            </div>
                        @empty
                            <p class="text-center text-gray-500">No tasks available.</p>
                        @endforelse
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
