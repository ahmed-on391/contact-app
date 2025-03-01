<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            {{ __('Edit Person') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="p-6 bg-gradient-to-r from-blue-100 to-blue-50">
                    <h3 class="text-lg font-bold text-blue-700 mb-6">Edit Person Information</h3>

                    <!-- Form Section -->
                    <form action="{{ route('person.update', $person->id) }}" method="POST" class="space-y-5">
                        @csrf
                        @method('PUT')

                        <!-- First Name -->
                        <div class="grid gap-1">
                            <label class="text-sm font-medium text-gray-700" for="firstname">First Name</label>
                            <input 
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-md focus:ring-blue-500 focus:border-blue-500" 
                                type="text" 
                                name="firstname" 
                                id="firstname" 
                                value="{{ old('firstname', $person->firstname) }}" 
                                placeholder="Enter first name">
                        </div>

                        <!-- Last Name -->
                        <div class="grid gap-1">
                            <label class="text-sm font-medium text-gray-700" for="lastname">Last Name</label>
                            <input 
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-md focus:ring-blue-500 focus:border-blue-500" 
                                type="text" 
                                name="lastname" 
                                id="lastname" 
                                value="{{ old('lastname', $person->lastname) }}" 
                                placeholder="Enter last name">
                        </div>

                        <!-- Email -->
                        <div class="grid gap-1">
                            <label class="text-sm font-medium text-gray-700" for="email">Email</label>
                            <input 
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-md focus:ring-blue-500 focus:border-blue-500" 
                                type="text" 
                                name="email" 
                                id="email" 
                                value="{{ old('email', $person->email) }}" 
                                placeholder="Enter email">
                        </div>

                        <!-- Phone -->
                        <div class="grid gap-1">
                            <label class="text-sm font-medium text-gray-700" for="phone">Phone</label>
                            <input 
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-md focus:ring-blue-500 focus:border-blue-500" 
                                type="text" 
                                name="phone" 
                                id="phone" 
                                value="{{ old('phone', $person->phone) }}" 
                                placeholder="Enter phone">
                        </div>

                         <!-- Business -->
                         <div>
                            <label class="block text-sm font-medium text-gray-700" for="business">Business</label>
                            <select 
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500" 
                                name="business_id" 
                                id="business_id">
                                
                                <option value="">No Business</option>
                                @foreach($businesses as $business)
                                    <option value="{{ $business->id }}" @selected($business->id == old('business_id', $person->business_id))>
                                        {{ $business->business_name }}
                                    </option>
                                @endforeach
                        
                            </select>
                        </div>
                        

                        <!-- Buttons -->
                        <div class="flex justify-between items-center space-x-4 mt-8">
                            <!-- Cancel Button -->
                            <a 
                                href="{{ route('person.index') }}" 
                                class="px-4 py-2 text-blue-600 border border-blue-600 rounded-lg hover:bg-blue-600 hover:text-white transition ease-in-out duration-150">
                                Cancel
                            </a>

                            <!-- Save Button -->
                            <button 
                                type="submit" 
                                class="px-4 py-2 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 transition ease-in-out duration-150">
                                Save Changes
                            </button>
                        </div>
                    </form>

                    <!-- Delete Section -->
                    <form action="{{ route('person.destroy', $person->id) }}" method="POST" class="mt-6">
                        @csrf
                        @method('DELETE')
                        
                        <div class="flex justify-center">
                            <button 
                                type="submit" 
                                class="px-4 py-2 bg-red-600 text-white font-semibold rounded-lg shadow-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 transition ease-in-out duration-150"
                                onclick="return confirm('Are you sure you want to delete this person?')">
                                Delete Person
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
