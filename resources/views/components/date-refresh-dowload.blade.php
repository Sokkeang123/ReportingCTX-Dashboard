<div class="grid grid-cols-2 items-center gap-6 w-full ">
    {{-- Date --}}
    <div class="flex items-center gap-4 mt-10">
        <div class="relative">
            <input type="date"
                class="block w-full cursor-pointer pl-10 pr-3 py-2.5 rounded-lg border border-gray-300 bg-white text-sm focus:ring-indigo-500 focus:border-indigo-500"
                name="start">
        </div>
        <span class="text-gray-700">to</span>
        <div class="relative">
            <input type="date"
                class="block cursor-pointer w-full pl-10 pr-3 py-2.5 rounded-lg border border-gray-300 bg-white text-sm focus:ring-indigo-500 focus:border-indigo-500"
                name="end">
        </div>
    </div>

    {{-- Refresh & Download --}}
    <div class="flex justify-end mt-10 gap-4">
        <button
            class=" bg-[#E7E7E7] rounded-xl  cursor-pointer border border-gray-300  gap-4 focus:ring-1 rounded-base text-sm px-8 py-2.5 inline-flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-rotate-ccw-icon lucide-rotate-ccw">
                <path d="M3 12a9 9 0 1 0 9-9 9.75 9.75 0 0 0-6.74 2.74L3 8" />
                <path d="M3 3v5h5" />
            </svg>
            Refresh
        </button>
        <details class="relative inline-block">
            <summary
                class="text-white gap-4 bg-gradient-to-r from-purple-600 to-indigo-900 rounded-xl cursor-pointer focus:ring-1 rounded-base text-sm px-8 py-2.5 inline-flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-download-icon lucide-download">
                    <path d="M12 15V3" />
                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4" />
                    <path d="m7 10 5 5 5-5" />
                </svg>
                Download
            </summary>
            <div class="absolute mt-2 right-0 w-40 bg-white border border-gray-200 rounded-xl shadow-lg z-50">
                <a href="#" class="flex items-center gap-2 px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                    PDF
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-red-600" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                        <polyline points="14 2 14 8 20 8" />
                    </svg>
                </a>
                <a href="#" class="flex items-center gap-2 px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                    Excel
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-green-600" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path d="M4 4h16v16H4z" />
                        <path d="M10 8l4 8M14 8l-4 8" />
                    </svg>
                </a>
            </div>
        </details>
        {{-- <button
            class="text-white gap-4 bg-gradient-to-r from-purple-600 to-indigo-900 rounded-xl cursor-pointer focus:ring-1 rounded-base text-sm px-8 py-2.5 inline-flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-download-icon lucide-download">
                <path d="M12 15V3" />
                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4" />
                <path d="m7 10 5 5 5-5" />
            </svg>
            Download
        </button> --}}
    </div>
</div>
