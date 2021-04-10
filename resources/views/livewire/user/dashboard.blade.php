<div class="mim-fnt h-screen w-full flex overflow-hidden">
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
                src="https://appzzang.me/data/editor/1608/f9c387cb6bd7a0b004f975cd92cbe2d9_1471626325_6802.png"
                alt="enoshima profile" />
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
            <li class="mt-8 shadow py-2 bg-white dark:bg-gray-200 rounded-lg shadow-lg -ml-4">
                <a href="#" class="flex pl-4">
                    <i class="leading-none feather-grid"></i>
                    <span
                        class="ml-2 capitalize font-medium text-black
						dark:text-gray-300">
						dashboard
					</span>
                </a>
            </li>

            <li class="mt-8 shadow py-2 bg-white dark:bg-gray-200 rounded-lg  shadow-lg -ml-4">
                <a href="#" class="flex pl-4">
                    <i class="leading-none feather-calendar"></i>
                    <span
                        class="ml-2 capitalize font-medium text-black
						dark:text-gray-300">
						calendar
					</span>
                </a>
            </li>

            <li class="mt-8 shadow py-2 bg-white dark:bg-gray-200 rounded-lg  shadow-lg -ml-4">
                <a href="{{route('profile')}}" class="flex pl-4">
                    <i class="leading-none feather-user"></i>
                    <span class="ml-2 capitalize font-medium text-black">profile</span>
                </a>
            </li>

            <li class="mt-8 py-2 bg-white dark:bg-gray-200 rounded-lg  shadow-lg -ml-4">
                <a href="#" class="flex pl-4">
                    <i class="leading-none feather-list"></i>
                    <span
                        class="ml-2 capitalize font-medium text-black
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

    <main
        class="flex-1 flex flex-col bg-gray-100 dark:bg-gray-700 transition z-0
		duration-500 ease-in-out overflow-y-auto">
        <div class="mx-10 my-2">
            <nav
                class="flex flex-row justify-between border-b
				dark:border-gray-600 dark:text-gray-400 transition duration-500
				ease-in-out">
                <div class="flex">
                    <!-- Top NavBar -->

                    <a
                        href="users-dashboard/"
                        class="py-2 block text-green-500 border-green-500
						dark:text-green-200 dark:border-green-200
						focus:outline-none border-b-2 font-medium capitalize
						transition duration-500 ease-in-out">
                        users
                    </a>
                    <button
                        class="ml-6 py-2 block border-b-2 border-transparent
						focus:outline-none font-medium capitalize text-center
						focus:text-green-500 focus:border-green-500
						dark-focus:text-green-200 dark-focus:border-green-200
						transition duration-500 ease-in-out">
                        role
                    </button>
                    <button
                        class="ml-6 py-2 block border-b-2 border-transparent
						focus:outline-none font-medium capitalize text-center
						focus:text-green-500 focus:border-green-500
						dark-focus:text-green-200 dark-focus:border-green-200
						transition duration-500 ease-in-out">
                        access rights
                    </button>
                </div>

                <div class="flex items-center select-none">
					<span
                        class="hover:text-green-500 dark-hover:text-green-300
						cursor-pointer mr-3 transition duration-500 ease-in-out">

						<svg viewBox="0 0 512 512" class="h-5 w-5 fill-current">
							<path
                                d="M505 442.7L405.3
								343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7
								44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1
								208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4
								2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9
								0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7
								0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0
								128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
						</svg>
					</span>

                    <input
                        class="w-12 bg-transparent focus:outline-none"
                        placeholder="Search" />

                </div>

            </nav>
            <h2 class="my-4 text-4xl font-semibold dark:text-gray-400">
                User list
            </h2>
            <div
                class="mt-6 flex justify-between text-gray-600 dark:text-gray-400">
                <!-- List sorting -->

                <div class="ml-10 pl-2 flex capitalize">
                    <!-- Left side -->
                    <span class="ml-8 flex items-center">
						name
						<svg
                            class="ml-1 h-5 w-5 fill-current text-green-500
							dark:text-green-200"
                            viewBox="0 0 24 24">
							<path
                                d="M18 21l-4-4h3V7h-3l4-4 4 4h-3v10h3M2
								19v-2h10v2M2 13v-2h7v2M2 7V5h4v2H2z"></path>
						</svg>
					</span>
                    <span class="ml-24 flex items-center">
						login
						<svg
                            class="ml-1 h-5 w-5 fill-current"
                            viewBox="0 0 24 24">
							<path
                                d="M18 21l-4-4h3V7h-3l4-4 4 4h-3v10h3M2
								19v-2h10v2M2 13v-2h7v2M2 7V5h4v2H2z"></path>
						</svg>
					</span>
                </div>

                <div class="mr-12 flex capitalize">
                    <!-- Right side -->

                    <span class="mr-16 pr-1 flex items-center">
						project
						<svg
                            class="ml-1 h-5 w-5 fill-current"
                            viewBox="0 0 24 24">
							<path
                                d="M18 21l-4-4h3V7h-3l4-4 4 4h-3v10h3M2
								19v-2h10v2M2 13v-2h7v2M2 7V5h4v2H2z"></path>
						</svg>
					</span>

                    <span class="mr-16 pr-2 flex items-center">
						role
						<svg
                            class="ml-1 h-5 w-5 fill-current"
                            viewBox="0 0 24 24">
							<path
                                d="M18 21l-4-4h3V7h-3l4-4 4 4h-3v10h3M2
								19v-2h10v2M2 13v-2h7v2M2 7V5h4v2H2z"></path>
						</svg>
					</span>

                    <span class="mr-12 flex items-center">
						status
						<svg
                            class="ml-1 h-5 w-5 fill-current"
                            viewBox="0 0 24 24">
							<path
                                d="M18 21l-4-4h3V7h-3l4-4 4 4h-3v10h3M2
								19v-2h10v2M2 13v-2h7v2M2 7V5h4v2H2z"></path>
						</svg>
					</span>
                    <span class="mr-16 flex items-center">
						date
						<svg
                            class="ml-1 h-5 w-5 fill-current"
                            viewBox="0 0 24 24">
							<path
                                d="M18 21l-4-4h3V7h-3l4-4 4 4h-3v10h3M2
								19v-2h10v2M2 13v-2h7v2M2 7V5h4v2H2z"></path>
						</svg>
					</span>
                </div>

            </div>
            <div
                class="mt-2 flex px-4 py-4 justify-between bg-white
				dark:bg-gray-600 shadow-xl rounded-lg cursor-pointer ">
                <!-- Card -->

                <div class="flex justify-between">
                    <!-- Left side -->

                    <img
                        class="h-12 w-12 rounded-full object-cover"
                        src="https://inews.gtimg.com/newsapp_match/0/8693739867/0"
                        alt="" />

                    <div
                        class="ml-4 flex flex-col capitalize text-gray-600
						dark:text-gray-400">
                        <span>name</span>
                        <span class="mt-2 text-black dark:text-gray-200">
							carmen beltran
						</span>
                    </div>

                    <div
                        class="ml-12 flex flex-col capitalize text-gray-600
						dark:text-gray-400">
                        <span>login</span>
                        <span class="mt-2 text-black dark:text-gray-200">
							carmen.bel
						</span>

                    </div>

                </div>

                <div class="flex">
                    <!-- Rigt side -->

                    <div
                        class="mr-16 flex flex-col capitalize text-gray-600
						dark:text-gray-400">
                        <span>project</span>
                        <span class="mt-2 text-black dark:text-gray-200">
							Aero treck
						</span>
                        <span class="text-red-600 dark:text-red-400">
							search
						</span>
                        <span>2 more...</span>
                    </div>

                    <div
                        class="mr-16 flex flex-col capitalize text-gray-600
						dark:text-gray-400">
                        <span>role</span>
                        <span class="mt-2 text-black dark:text-gray-200">
							Designer
						</span>
                        <span class="text-red-600 dark:text-red-400">
							Designer
						</span>
                    </div>

                    <div
                        class="mr-16 flex flex-col capitalize text-gray-600
						dark:text-gray-400">
                        <span>status</span>
                        <span class="mt-2 text-black dark:text-gray-200">
							None
						</span>
                        <span class="text-red-600 dark:text-red-400">
							in work
						</span>
                    </div>

                    <div
                        class="mr-8 flex flex-col capitalize text-gray-600
						dark:text-gray-400">
                        <span>final date</span>
                        <span class="mt-2 text-green-400 dark:text-green-200">
							20.02.2020
						</span>
                        <span class="text-red-600 dark:text-red-400">
							07.02.2020 11:00
						</span>
                    </div>

                </div>

            </div>

            <div
                class="mt-8 flex px-4 py-4 justify-between bg-white
				dark:bg-gray-600 shadow-xl rounded-lg cursor-pointer">
                <!-- Card -->

                <div class="flex justify-between">
                    <!-- Left side -->

                    <img
                        class="h-12 w-12 rounded-full object-cover"
                        src="https://appzzang.me/data/editor/1608/f9c387cb6bd7a0b004f975cd92cbe2d9_1471626325_6802.png"
                        alt="" />

                    <div
                        class="ml-4 flex flex-col capitalize text-gray-600
						dark:text-gray-400">
                        <span>name</span>
                        <span class="mt-2 text-black dark:text-gray-200">
							enoshima junko
						</span>
                    </div>

                    <div
                        class="ml-12 flex flex-col capitalize text-gray-600
						dark:text-gray-400">
                        <span>login</span>
                        <span class="mt-2 text-black dark:text-gray-200">
							zetsbuo
						</span>

                    </div>

                </div>

                <div class="flex">
                    <!-- Rigt side -->

                    <div
                        class="mr-16 flex flex-col capitalize text-gray-600
						dark:text-gray-400">
                        <span>project</span>
                        <span class="mt-2 text-black dark:text-gray-200">
							Aero treck
						</span>
                    </div>

                    <div
                        class="mr-16 flex flex-col capitalize text-gray-600
						dark:text-gray-400">
                        <span>role</span>
                        <span class="mt-2 text-black dark:text-gray-200">
							Front-End
						</span>
                    </div>

                    <div
                        class="mr-16 flex flex-col capitalize text-gray-600
						dark:text-gray-400">
                        <span>status</span>
                        <span class="mt-2 text-yellow-600 dark:text-yellow-400">
							in work
						</span>
                    </div>

                    <div
                        class="mr-8 flex flex-col capitalize text-gray-600
						dark:text-gray-400">
                        <span>final date</span>
                        <span class="mt-2 text-green-400 dark:text-green-200">
							20.02.2020 11:00
						</span>
                    </div>

                </div>

            </div>

            <div
                class="mt-8 flex px-4 py-4 justify-between bg-white
				dark:bg-gray-600 shadow-xl rounded-lg cursor-pointer">
                <!-- Card -->

                <div class="flex justify-between">
                    <!-- Left side -->

                    <img
                        class="h-12 w-12 rounded-full object-cover"
                        src="https://www.hdwallpapers.in/download/2012_darksiders_ii-1920x1080.jpg"
                        alt="" />

                    <div
                        class="ml-4 flex flex-col capitalize text-gray-600
						dark:text-gray-400">
                        <span>name</span>
                        <span class="mt-2 text-black dark:text-gray-200">
							dark siders
						</span>
                    </div>

                    <div
                        class="ml-12 flex flex-col capitalize text-gray-600
						dark:text-gray-400">
                        <span>login</span>
                        <span class="mt-2 text-black dark:text-gray-200">
							dark siders
						</span>

                    </div>

                </div>

                <div class="flex">
                    <!-- Rigt side -->

                    <div
                        class="mr-16 flex flex-col capitalize text-gray-600
						dark:text-gray-400">
                        <span>project</span>
                        <span class="mt-2 text-black dark:text-gray-200">
							Aero treck
						</span>
                        <span class="text-black dark:text-gray-200">
							Grass Max
						</span>
                        <span class="text-black dark:text-gray-200">Mental</span>
                    </div>

                    <div
                        class="mr-16 flex flex-col capitalize text-gray-600
						dark:text-gray-400">
                        <span>role</span>
                        <span class="mt-2 text-black dark:text-gray-200">
							designer
						</span>
                        <span class="text-black dark:text-gray-200">
							designer
						</span>
                        <span class="text-black dark:text-gray-200">
							illustrator
						</span>
                    </div>

                    <div
                        class="mr-16 flex flex-col capitalize text-gray-600
						dark:text-gray-400">
                        <span>status</span>
                        <span class="mt-2 text-green-400 dark:text-green-200">
							on check
						</span>
                        <span class="mt-2 text-yellow-600 dark:text-yellow-400">
							in work
						</span>
                        <span class="mt-2 text-black dark:text-gray-200">
							none
						</span>
                    </div>

                    <div
                        class="mr-8 flex flex-col capitalize text-gray-600
						dark:text-gray-400">
                        <span>final date</span>
                        <span class="mt-2 text-green-400 dark:text-green-200">
							20.02.2020 11:00
						</span>
                        <span class="mt-2 text-yellow-600 dark:text-yellow-400">
							20.02.2020 13:00
						</span>
                        <span class="mt-2 text-green-400 dark:text-green-200">
							20.02.2020 11:00
						</span>
                    </div>

                </div>

            </div>

            <div
                class="mt-8 mb-4 flex px-4 py-4 justify-between bg-white
				dark:bg-gray-600 shadow-xl rounded-lg cursor-pointer">
                <!-- Card -->

                <div class="flex justify-between">
                    <!-- Left side -->

                    <img
                        class="h-12 w-12 rounded-full object-cover"
                        src="https://media.contentapi.ea.com/content/dam/gin/images/2017/01/crysis-3-keyart.jpg.adapt.crop1x1.767p.jpg"
                        alt="" />

                    <div
                        class="ml-4 flex flex-col capitalize text-gray-600
						dark:text-gray-400">
                        <span>name</span>
                        <span class="mt-2 text-black dark:text-gray-200">
							crysis
						</span>
                    </div>

                    <div
                        class="ml-12 flex flex-col capitalize text-gray-600
						dark:text-gray-400">
                        <span>login</span>
                        <span class="mt-2 text-black dark:text-gray-200">
							crysis
						</span>

                    </div>

                </div>

                <div class="flex">
                    <!-- Rigt side -->

                    <div
                        class="mr-16 flex flex-col capitalize text-gray-600
						dark:text-gray-400">
                        <span>project</span>
                        <span class="mt-2 text-black dark:text-gray-200">
							Killing
						</span>
                    </div>

                    <div
                        class="mr-16 flex flex-col capitalize text-gray-600
						dark:text-gray-400">
                        <span>role</span>
                        <span class="mt-2 text-black dark:text-gray-200">
							hunter
						</span>
                    </div>

                    <div
                        class="mr-16 flex flex-col capitalize text-gray-600
						dark:text-gray-400">
                        <span>status</span>
                        <span class="mt-2 text-yellow-600 dark:text-yellow-400">
							in work
						</span>
                    </div>

                    <div
                        class="mr-8 flex flex-col capitalize text-gray-600
						dark:text-gray-400">
                        <span>final date</span>
                        <span class="mt-2 text-green-400 dark:text-green-200">
							20.02.2020 11:00
						</span>
                    </div>

                </div>

            </div>

        </div>

    </main>

</div>
