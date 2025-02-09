<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            {{ __('People') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="p-6 bg-gradient-to-r from-blue-100 to-blue-50">
                    <h3 class="text-lg font-bold text-blue-700 mb-6">Add A New Person</h3>

                    <form action="{{ route('person.store') }}" method="POST" class="space-y-5">
                        @csrf

                        <!-- First Name -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700" for="firstname">First Name</label>
                            <input 
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500" 
                                type="text" 
                                name="firstname" 
                                id="firstname" 
                                value="{{ old('firstname') }}" 
                                placeholder="Enter first name">
                        </div>

                        <!-- Last Name -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700" for="lastname">Last Name</label>
                            <input 
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500" 
                                type="text" 
                                name="lastname" 
                                id="lastname" 
                                value="{{ old('lastname') }}" 
                                placeholder="Enter last name">
                        </div>

                         <!-- Email-->
                         <div>
                            <label class="block text-sm font-medium text-gray-700" for="email">Email</label>
                            <input 
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500" 
                                type="text" 
                                name="email" 
                                id="email" 
                                value="{{ old('email') }}" 
                                placeholder="Enter Email">
                        </div>

                         <!-- Phone-->
                         <div>
                            <label class="block text-sm font-medium text-gray-700" for="phone">Phone</label>
                            <input 
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500" 
                                type="text" 
                                name="phone" 
                                id="phone" 
                                value="{{ old('phone') }}" 
                                placeholder="Enter phone">
                        </div>

                        <!-- Submit and Cancel Buttons -->
                        <div class="flex justify-between items-center space-x-4">
                            <!-- Cancel Button -->
                            <a 
                                href="{{ route('person.index') }}" 
                                class="px-4 py-2 text-blue-600 border border-blue-600 rounded-md hover:bg-blue-600 hover:text-white focus:outline-none focus:ring-2 focus:ring-blue-500">
                                Cancel
                            </a>

                            <!-- Submit Button -->
                            <button 
                                type="submit" 
                                class="px-4 py-2 bg-blue-600 text-white font-semibold rounded-md shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                Save
                            </button>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
