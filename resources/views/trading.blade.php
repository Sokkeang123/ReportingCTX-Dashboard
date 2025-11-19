<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
</head>
<body class="">
    {{-- Navbar --}}
    <div>
        <x-navbar />
    </div>
    {{-- Sidebar + Main Content --}}
    <div class="flex">
        {{-- Sidebar --}}
        <div class="w-64">
            <x-sidebar />
        </div>
        {{-- Main Content --}}
        <div class="flex-1 p-6">
            <div class="mt-32">
                <x-date-refresh-dowload />
            </div>
            <div class="flex">
                <div class="grid grid-cols-3 gap-2 mt-14">
                <div><x-graph-digit-trading /></div>
                <div><x-graph-digit-derivative /></div>
                <div><x-graph-total-digit-trading-size/></div>
            </div>

            </div>
        </div>
        {{-- Trading Dashboard graph --}}
        <div>
        </div>
    </div>
</body>
</html>
