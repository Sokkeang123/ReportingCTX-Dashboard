<div class="max-w-sm max-h-full h-full mx-auto bg-[#FAF2F8] rounded-xl shadow p-6  md:pb-20">
    <!-- Title -->
    <div class="space-y-8 mt-32  text-center">
        <h1 class="text-6xl md:text-xl font-extrabold">Total Digital Asset</h1>
        <h1 class="text-6xl md:text-xl font-extrabold">Trading Size</h1>
    </div>
    <!-- Doughnut Chart -->
    <div class="relative w-full h-64 mt-16">
        <canvas id="assetDoughnutChart"></canvas>
        <div class="absolute inset-0 flex flex-col justify-center items-center pointer-events-none">
            <span class="text-sm text-gray-500">Total</span>
            <span class="text-2xl md:text-3xl font-bold text-purple-700" id="totalAmount">$2,102,300</span>
        </div>
    </div>
    <!-- Custom Legend -->
    <div class="flex justify-center gap-6 pt-16 h-28 ">
        <div class="flex items-center gap-4">
            <span class="w-8 h-8 bg-purple-400 rounded-sm"></span>
            <span class="text-sm font-medium">Spot</span>
        </div>
        <div class="flex items-center gap-4">
            <span class="w-8 h-8 bg-gray-900 rounded-sm"></span>
            <span class="text-sm font-medium">Future</span>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const data = {
        labels: ['Spot', 'Future'],
        datasets: [{
            data: [1600000, 510300], //  values of Spot and Futhures
            backgroundColor: ['#A851BA', '#0F172A'], // purple and black
            hoverOffset: 10
        }]
    };
    const config = {
        type: 'doughnut',
        data: data,
        options: {
            responsive: true,
            maintainAspectRatio: false,
            cutout: '70%',
            plugins: {
                legend: {
                    display: false
                }
            }
        }
    };
    const ctx = document.getElementById('assetDoughnutChart').getContext('2d');
    new Chart(ctx, config);
</script>
