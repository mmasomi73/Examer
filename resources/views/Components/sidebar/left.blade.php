<nav class="flex flex-col bg-gray-200 dark:bg-gray-900 w-64 px-7 pt-4 pb-6 z-10 border-gray-500 border-r-1 shadow-2xl">
    <!-- SideNavBar -->

    <div class="flex flex-row border-b items-center justify-between pb-2">
        <!-- Hearder -->
        <span class="text-lg font-semibold capitalize dark:text-gray-300 border-b-2 border-black w-full">
				Examer
			</span>
    </div>

    <div class="mt-8">
        <!-- User info -->
        <img
            class="h-12 w-12 rounded-full object-cover"
            src="{{auth()->user()->avatarUrl()}}" alt="{{auth()->user()->name}} Avatar"/>
        <h2
            class="mt-4 text-xl dark:text-gray-300 font-extrabold capitalize">
            {{auth()->user()->name}}
        </h2>
        <span class="text-sm dark:text-gray-300">
				<span class="font-sm text-green-600 dark:text-green-300">
					 {{auth()->user()->email}}
				</span>
			</span>
    </div>

    <ul class="mt-2 text-gray-600">
        <!-- Links -->
        <li class="mt-4 group shadow-cl transition duration-300 ease-in-out py-2 bg-white dark:bg-gray-200 hover:bg-green-400 hover:text-gray-50 cursor-pointer rounded-lg shadow-lg -ml-4">
            <a href="#" class="flex pl-4">
                <i class="leading-none feather-grid"></i>
                <span
                    class="ml-2 capitalize font-medium text-black group-hover:text-gray-50 transition duration-300 ease-in-out
						dark:text-gray-300">
						dashboard
					</span>
            </a>
        </li>

        <li class="mt-4 group shadow-cl transition duration-300 ease-in-out py-2 bg-white dark:bg-gray-200 hover:bg-green-400 hover:text-gray-50 cursor-pointer rounded-lg shadow-lg -ml-4">
            <a href="#" class="flex pl-4">
                <i class="leading-none feather-calendar"></i>
                <span
                    class="ml-2 capitalize font-medium text-black group-hover:text-gray-50 transition duration-300 ease-in-out
						dark:text-gray-300">
						calendar
					</span>
            </a>
        </li>

        <li class="mt-4 group shadow-cl transition duration-300 ease-in-out py-2 bg-white dark:bg-gray-200 hover:bg-green-400 hover:text-gray-50 cursor-pointer rounded-lg shadow-lg -ml-4">
            <a href="{{route('profile')}}" class="flex pl-4">
                <i class="leading-none feather-user"></i>
                <span class="ml-2 capitalize font-medium text-black group-hover:text-gray-50 transition duration-300 ease-in-out
						dark:text-gray-300">profile</span>
            </a>
        </li>

        <li class="mt-4 group shadow-cl transition duration-300 ease-in-out py-2 bg-white dark:bg-gray-200 hover:bg-green-400 hover:text-gray-50 cursor-pointer rounded-lg shadow-lg -ml-4">
            <a href="#" class="flex pl-4">
                <i class="leading-none feather-list"></i>
                <span
                    class="ml-2 capitalize font-medium text-black group-hover:text-gray-50 transition duration-300 ease-in-out
						dark:text-gray-300">
						tasks
					</span>
            </a>
        </li>

    </ul>

    <div
        class="mt-auto py-2 bg-red-100 text-red-700 flex dark:bg-red-200 rounded-lg  shadow-lg -ml-4 cursor-pointer"
    >
        <!-- important action -->
        <a href="#" class="flex pl-4">
            <i class="leading-none feather-log-out"></i>
            <span class="ml-2 capitalize font-medium">log out</span>
        </a>

    </div>
</nav>
