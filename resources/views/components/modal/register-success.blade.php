<div class="fixed inset-0 z-50 items-center justify-center hidden overflow-x-hidden overflow-y-auto outline-none modal focus:outline-none" id="registerSuccessModal" >
    <div class="relative max-w-md mx-auto my-6 w-128">
    <!--content-->
    <div class="relative flex flex-col w-full bg-white border-0 shadow-lg outline-none rounded-xl focus:outline-none">
        <!--header-->
        <div class="p-5 mx-10 mt-5 text-center rounded-t-xl">
            <svg class="m-auto mb-5" width="160" height="160" viewBox="0 0 160 160" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="80" cy="80" r="80" fill="#F4F4FA"/>
                <path d="M113.335 55L67.502 100.833L46.6687 80" stroke="#22B07D" stroke-width="10" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>

            <h3 class="text-2xl font-semibold">
                Account Created
            </h3>
            <p class="mt-1 text-sm text-gray-400">
                Explore Serv and start your real project
            </p>
        </div>
        <form action="index.php" method="GET">
            <!--footer-->
            <div class="px-6 pb-6 mx-10 rounded-b-xl">
                <input type="hidden" name="auth" value="true">
                <a href="explore.php?auth" class="block w-full px-12 py-3 my-2 text-lg text-center text-white rounded-lg bg-serv-button" type="submit">
                    Find Services
                </a>
                <a href="dashboard/index.php" class="block w-full px-12 py-3 my-2 text-lg text-center rounded-lg text-serv-text" type="submit">
                    My Dashboard
                </a>
            </div>
        </form>
    </div>
    </div>
</div>
<div class="fixed inset-0 z-40 hidden bg-black opacity-75" id="registerSuccessModal-backdrop"></div>