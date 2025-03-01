<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            {{ __('Edit Business') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <div class="p-6 bg-gradient-to-r from-blue-50 to-white">
                    <!-- Edit Business Form -->
                    <form action="{{ route('business.update', $business->id) }}" method="POST" class="space-y-6">
                        @csrf
                        @method('PUT')
                        
                        <div>
                            <label class="block font-medium text-gray-700">Business Name</label>
                            <input type="text" name="business_name" value="{{ $business->business_name }}" class="w-full mt-2 px-4 py-2 border rounded-lg shadow-sm focus:ring focus:ring-blue-300">
                        </div>
                        
                        <div>
                            <label class="block font-medium text-gray-700">Email</label>
                            <input type="email" name="email" value="{{ $business->email }}" class="w-full mt-2 px-4 py-2 border rounded-lg shadow-sm focus:ring focus:ring-blue-300">
                        </div>
                        
                       
                        
                        <div class="flex justify-end space-x-4">
                            <a href="{{ route('business.index') }}" class="bg-gray-600 text-white py-2 px-4 rounded-full shadow-lg hover:bg-gray-700 transition duration-200">Cancel</a>
                            <button type="submit" class="bg-blue-600 text-white py-2 px-4 rounded-full shadow-lg hover:bg-blue-700 transition duration-200">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
