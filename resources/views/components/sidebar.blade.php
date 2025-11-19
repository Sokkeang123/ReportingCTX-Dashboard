@php
    $sidebarItems = [
        [
            'label' => 'Overview',
            'href' => '#',
            'svg' => '<path d="m21 21-4.34-4.34" /><circle cx="11" cy="11" r="8" />',
        ],
        [
            'label' => 'Trading',
            'href' => '/trading',
            'svg' => '<path d="M16 7h6v6" /><path d="m22 7-8.5 8.5-5-5L2 17" />',
        ],
        [
            'label' => 'User Complainces',
            'href' => '/user-complainces',
            'svg' =>
                '<path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" /><path d="M16 3.128a4 4 0 0 1 0 7.744" /><path d="M22 21v-2a4 4 0 0 0-3-3.87" /><circle cx="9" cy="7" r="4" />',
        ],
        [
            'label' => 'Transaction',
            'href' => '/transaction',
            'svg' => '<path d="m3 16 4 4 4-4" /><path d="M7 20V4" /><path d="m21 8-4-4-4 4" /><path d="M17 4v16" />',
        ],
        [
            'label' => 'Customer Wallet',
            'href' => '/customer-wallet',
            'svg' =>
                '<path d="M17 14h.01" /><path d="M7 7h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14" />',
        ],
        [
            'label' => 'Company Wallet',
            'href' => '/company-wallet',
            'svg' =>
                '<path d="M17 14h.01" /><path d="M7 7h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14" />',
        ],
    ];
@endphp

<div class="pt-36">
    <button data-drawer-target="sidebar-multi-level-sidebar" data-drawer-toggle="sidebar-multi-level-sidebar"
        aria-controls="sidebar-multi-level-sidebar" type="button"
        class="text-heading bg-transparent box-border border border-transparent hover:bg-neutral-secondary-medium focus:ring-4 focus:ring-neutral-tertiary font-medium leading-5 rounded-base ms-3 mt-3 text-sm p-2 focus:outline-none inline-flex sm:hidden">
        <span class="sr-only">Open sidebar</span>
        <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h10" />
        </svg>
    </button>
    <aside class="fixed left-0 z-40 w-64 h-screen bg-[#5E0B7F] p-4">
        <ul class="space-y-2">
            @foreach ($sidebarItems as $item)
                <li>
                    <a href="{{ $item['href'] }}"
                        class="flex text-white items-center gap-3 p-2 rounded hover:bg-purple-700">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            {!! $item['svg'] !!}
                        </svg>
                        <span>{{ $item['label'] }}</span>
                    </a>
                </li>
            @endforeach
        </ul>
    </aside>
</div>
