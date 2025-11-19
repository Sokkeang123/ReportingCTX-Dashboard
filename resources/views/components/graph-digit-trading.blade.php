<div>
    <!-- Card 1: Bar Chart -->
    <div class="max-w-sm w-full bg-[#FAF2F8] rounded-xl shadow p-4 md:p-6">
        <div class="text-center my-4">
            <h1 class="text-2xl">Digital Asset Trading</h1>
            <h1 class="text-3xl font-bold mt-4">$102,300</h1>
        </div>
        <div class="mt-4 flex justify-center">
            <canvas id="assetChart1" class="w-48 h-80"></canvas>
        </div>
    </div>
    <!-- Doughnut Chart -->
    <div class="bg-[#FAF2F8] rounded-xl shadow p-4 mt-2">
        <h1 class="text-xl font-normal text-center mb-4">Top 5 most Traded Digital <br /> Asset Trading</h1>
        <div class="mt-4">
            <canvas id="doughnutChart1" class="w-full h-40"></canvas>
        </div>
        <!-- Custom legend -->
        <div id="doughnutLegend1" class="mt-4 flex justify-center flex-wrap gap-3"></div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    async function fetchChartData() {
        try {
            const res = await fetch('/api/assets');
            const data = await res.json();
            return {
                labels: data.map(item => item.name),
                values: data.map(item => item.value)
            };
        } catch (err) {
            console.error('Error fetching chart data:', err);
            return {
                labels: ['Bitcoin', 'Ethereum', 'Solana', 'C98', 'LiteCoin'],
                values: [65, 65, 52, 20, 82]
            };
        }
    }
    // Render Bar Chart
    async function renderChart(canvasId, colors) {
        const ctx = document.getElementById(canvasId);
        const chartData = await fetchChartData();
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: chartData.labels,
                datasets: [{
                    data: chartData.values,
                    backgroundColor: colors,
                    borderRadius: 2,
                    borderSkipped: false
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true,
                        max: 100,
                        ticks: {
                            stepSize: 20
                        }
                    },
                    x: {
                        maxBarThickness: 10,
                        barPercentage: 0.2,
                        categoryPercentage: 0.8
                    }
                },
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });
    }
    // Render Doughnut Chart
    async function renderDoughnutChart(canvasId, colors, legendId) {
        const chartData = await fetchChartData();
        const ctx = document.getElementById(canvasId);
        new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: chartData.labels,
                datasets: [{
                    data: chartData.values,
                    backgroundColor: colors,
                    hoverOffset: 6
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                cutout: '50%',
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });
        // Custom Legend
        const legendContainer = document.getElementById(legendId);
        legendContainer.innerHTML = '';
        chartData.labels.forEach((label, i) => {
            const legendItem = document.createElement('div');
            legendItem.classList.add('flex', 'items-center', 'space-x-1');
            legendItem.innerHTML = `
            <span class="w-3 h-3" style="background-color: ${colors[i]}"></span>
            <span class="text-sm ">${label}</span>
        `;
            legendContainer.appendChild(legendItem);
        });
    }
    // Render both charts
    const colors = ['#ff9a26', '#6389ff', '#b28cff', '#ffe024', '#6f6f73'];
    renderChart('assetChart1', colors);
    renderDoughnutChart('doughnutChart1', colors, 'doughnutLegend1');
</script>
