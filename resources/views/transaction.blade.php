<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
</head>

<body>
    {{-- Navbar --}}
    <x-navbar />
    {{-- Sidebar + Main Content --}}
    <div class="flex">
        {{-- Sidebar --}}
        <div class="w-64">
            <x-sidebar />
        </div>
        {{-- Main Content --}}
        <div class="flex-1 p-6 ">
            <div class="mt-32">
                <x-date-refresh-dowload />
            </div>
            <div class="mt-14 flex flex-col gap-4">
                <x-size-deposite />
                <x-size-withdrawal />
                <x-transaction-fee/>
            </div>
        </div>
        <div>
        </div>
    </div>
</body>
</html>
