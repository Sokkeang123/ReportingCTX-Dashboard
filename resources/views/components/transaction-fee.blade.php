<div class="bg-[#FAF2F8] p-8 rounded-2xl w-full">
    <div class="flex flex-col  md:flex-row md:justify-between md:items-start gap-6">
        <!-- Left Section: Total Transaction Fee -->
        <div class="flex items-center text-center p-12 gap-3 w-96 gap-y-4">
            <div class=" font-extrabold  "><svg xmlns="http://www.w3.org/2000/svg" width="40" height="30"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="4" stroke-linecap="round"
                    stroke-linejoin="round" class="lucide lucide-arrow-down-up-icon lucide-arrow-down-up">
                    <path d="m3 16 4 4 4-4" />
                    <path d="M7 20V4" />
                    <path d="m21 8-4-4-4 4" />
                    <path d="M17 4v16" />
                </svg>
            </div>
            <div>
                <p class="text-black font-extrabold text-3xl">Transaction Fee</p>
                <p class="text-xl mt-4 font-normal text-gray-600">Total <span id="totalFee"
                        class="text-gray-900 ps-4 text-2xl md:text-3xl font-bold">$0</span></p>
            </div>
        </div>
        <!-- Right Section: Fee Details -->
        <div class="grid grid-cols-2 gap-6 p-8  w-full md:w-auto">
            <div class="bg-[#FFFFFF] p-8 rounded-xl shadow text-center">
                <p class="text-gray-500 text-xl">Spot Trade</p>
                <p id="spotTrade" class="text-gray-900 text-3xl font-extrabold mt-1">$0</p>
            </div>
            <div class="bg-[#FFFFFF] p-8 rounded-xl shadow text-center">
                <p class="text-gray-500 text-xl">Future Trade</p>
                <p id="futureTrade" class="text-gray-900 text-3xl font-extrabold mt-1">$0</p>
            </div>
            <div class="bg-[#FFFFFF] p-8 rounded-xl shadow text-center">
                <p class="text-gray-500 text-xl">Withdrawal</p>
                <p id="withdrawal" class="text-gray-900 text-3xl font-extrabold mt-1">$0</p>
            </div>
            <div class="bg-[#FFFFFF] p-8 rounded-xl shadow text-center">
                <p class="text-gray-500 text-xl">Digital Asset Management</p>
                <p id="digitalAsset" class="text-gray-900 text-3xl font-extrabold mt-1">$0</p>
            </div>
        </div>
    </div>
</div>

<script>
    // Static data
    let transactionData = {
        totalFee: 939221,
        spotTrade: 102300,
        futureTrade: 102300,
        withdrawal: 102300,
        digitalAsset: 102300
    };

    // update DOM
    function updateDOM(data) {
        document.getElementById('totalFee').textContent = `$${data.totalFee.toLocaleString()}`;
        document.getElementById('spotTrade').textContent = `$${data.spotTrade.toLocaleString()}`;
        document.getElementById('futureTrade').textContent = `$${data.futureTrade.toLocaleString()}`;
        document.getElementById('withdrawal').textContent = `$${data.withdrawal.toLocaleString()}`;
        document.getElementById('digitalAsset').textContent = `$${data.digitalAsset.toLocaleString()}`;
    }

    // Initially render static data
    updateDOM(transactionData);
</script>
