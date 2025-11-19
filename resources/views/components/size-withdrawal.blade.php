<div class="gap-10 flex">
    <div
        class="bg-neutral-primary-soft bg-[#FAF2F8] h-64 w-96  block max-w-sm p-8 border border-gray-100 rounded-xl shadow-sm">
        <h1 class="text-xl font-medium pb-12">Size Withdrawal</h1>
        <a href="#">
            <h5 class="mb-2 text-3xl font-semibold tracking-tight text-heading">$ 112,916</h5>
        </a>
        <h1 class="text-2xl">USD</h1>
    </div>
    {{-- Top 5 deposite trade digital asset --}}
    <div
        class="rounded-xl bg-[#FAF2F8] h-64 flex justify-between items-center shadow-sm gap-10 w-full max-w-6xl mx-auto">
        <!-- Title -->
        <div class="ps-10">
            <h1 class="text-2xl w-72 font-semibold leading-snug text-indigo-950">
                Top 5 Most Withdrawal Traded Digital Assets
            </h1>
        </div>

        <!-- Donut Chart -->
        <div class="w-48 h-48 pe-10 relative">
            <canvas id="myDonutChart1" class="w-full h-full"></canvas>
        </div>

        <!-- Legend -->
        <div class="space-y-3 flex-none pe-10">
            <div class="flex items-center gap-2">
                <span class="block w-4 h-4 rounded-sm" style="background:#FF8A00"></span>
                <p>Bitcoin</p>
            </div>
            <div class="flex items-center gap-2">
                <span class="block w-4 h-4 rounded-sm" style="background:#6B8BFF"></span>
                <p>Ethereum</p>
            </div>
            <div class="flex items-center gap-2">
                <span class="block w-4 h-4 rounded-sm" style="background:#FFE84C"></span>
                <p>C98</p>
            </div>
            <div class="flex items-center gap-2">
                <span class="block w-4 h-4 rounded-sm" style="background:#A98BFF"></span>
                <p>Solana</p>
            </div>
            <div class="flex items-center gap-2">
                <span class="block w-4 h-4 rounded-sm" style="background:#8A8A8A"></span>
                <p>Litecoin</p>
            </div>
        </div>
    </div>
</div>
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        window.addEventListener('DOMContentLoaded', () => {
            const ctx = document.getElementById('myDonutChart1').getContext('2d');
            new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: ['Bitcoin', 'Ethereum', 'C98', 'Solana', 'Litecoin'],
                    datasets: [{
                        data: [30, 25, 15, 10, 20],
                        backgroundColor: ['#FF8A00', '#6B8BFF', '#FFE84C', '#A98BFF', '#8A8A8A'],
                        borderWidth: 0,
                        cutout: '70%'
                    }]
                },
                options: {
                    responsive: true, // ✅ important
                    maintainAspectRatio: false, // ✅ allow custom size
                    plugins: {
                        legend: {
                            display: false
                        }
                    }
                }
            });
        });
    </script>
