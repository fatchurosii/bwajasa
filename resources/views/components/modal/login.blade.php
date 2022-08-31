<div class="fixed inset-0 z-50 items-center justify-center hidden overflow-x-hidden overflow-y-auto outline-none modal focus:outline-none" id="loginModal" >
    <div class="relative max-w-md mx-auto my-6 w-128">
    <!--content-->
    <div class="relative flex flex-col w-full bg-white border-0 shadow-lg outline-none rounded-xl focus:outline-none">
        <!--header-->
        <div class="p-5 mx-10 mt-5 text-center rounded-t-xl">
        <h3 class="text-2xl font-semibold">
            Log in to Serv
        </h3>
        <p class="mt-1 text-sm text-gray-400">
            Enter your email & password to continue
        </p>
        </div>
        <form action="index.php" method="GET">
            <!--body-->
            <div class="relative flex-auto p-6 mx-10">
                <div class="mb-4">
                    <label class="block mb-2 text-sm text-grey-darker" for="username">
                        Email
                    </label>
                    <input name="email" class="w-full px-4 py-3 text-xs border border-gray-300 rounded-lg appearance-none placeholder-serv-text" id="username" type="text" placeholder="name@domain.com">
                    </div>
                    <div>
                    <label class="block mb-2 text-sm text-grey-darker" for="password">
                        Password
                    </label>
                    <input name="password" class="w-full px-4 py-3 mb-3 text-xs border border-gray-300 rounded-lg appearance-none placeholder-serv-text" id="password" type="password" placeholder="At least 8 characters">
                    </div>
                    <div class="flex items-center justify-between">
                    <div class="inline-block text-xs text-gray-400">
                        <label class="inline-flex items-center mt-3">
                            <input type="checkbox" class="w-5 h-5 rounded form-checkbox text-serv-button border-serv-text"><span class="ml-2 text-gray-400">Remember me</span>
                        </label>
                    </div>
                    <a class="inline-block mt-2 text-xs font-medium align-baseline text-serv-button" href="#">
                        Forgot Password?
                    </a>
                    </div>
            </div>
            <!--footer-->
            <div class="px-6 pb-6 mx-10 rounded-b-xl">
                <input type="hidden" name="auth" value="true">
                <button class="w-full px-12 py-3 my-2 text-lg text-white rounded-lg bg-serv-button" type="submit">
                    Log in
                </button>
                <p href="#" class="py-5 text-center">
                    Dont have account? <a href="#" class="text-serv-button" onclick="toggleModal('loginModal');toggleModal('registerModal') ">Sign up</a>
                </p>
            </div>
        </form>
    </div>
    </div>
</div>
<div class="fixed inset-0 z-40 hidden bg-black opacity-75" id="loginModal-backdrop"></div>