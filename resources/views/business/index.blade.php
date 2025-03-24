<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            {{ __('Businesses') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <div class="p-6 bg-gradient-to-r from-blue-50 to-white">
                    <!-- زر إضافة عمل جديد -->
                    <div class="flex items-center justify-end mb-6">
                        <a 
                            class="bg-blue-600 text-white py-2 px-4 rounded-full shadow-lg hover:bg-blue-700 transition duration-200" 
                            href="{{ route('business.create') }}">
                            + Add A New Business
                        </a>
                    </div>

                    <!-- جدول البيانات -->
                    <table class="w-full border-collapse bg-white shadow-sm rounded-lg overflow-hidden">
                        <thead>
                            <tr class="bg-blue-100 text-gray-700">
                                <th class="py-3 px-4 text-left text-sm font-semibold">Business Name</th>
                                <th class="py-3 px-4 text-left text-sm font-semibold">Contact Email</th>
                                <th class="py-3 px-4 text-left text-sm font-semibold">Category</th>
                                <th class="py-3 px-4 text-center text-sm font-semibold">Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($businesses as $business)
                                <tr class="border-b hover:bg-gray-50 transition duration-150">
                                    <td class="py-3 px-4 text-gray-800">
                                        
                                        <a href="{{route('business.show', $business->id)}}">
                                            {{ $business->business_name }}
                                         </a>

                                    </td>
                                    <td class="py-3 px-4 text-gray-800">{{ $business->contact_email }}</td>
                                    <td class="py-3 px-4 text-gray-800">

                                      
                                        

                                        @foreach($business->categories as $cat)
                                            {{ $cat->category_name }}
                                        @endforeach
                                    </td>
                                    <td class="py-3 px-4 text-center flex justify-center gap-4">


                                        <!-- زر تعديل -->
                                        <a 
                                            href="{{ route('business.edit', $business) }}" 
                                            class="text-blue-500 hover:text-blue-700">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931z"></path>
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 7.125L16.862 4.487M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10"></path>
                                            </svg>
                                        </a>

                                        <!-- زر الحذف -->
                                        <form action="{{ route('business.destroy', $business) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this business?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-500 hover:text-red-700">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                                                </svg>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <!-- رسالة عند عدم وجود بيانات -->
                    @if($businesses->isEmpty())
                        <p class="mt-6 text-center text-gray-500">No businesses found.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>