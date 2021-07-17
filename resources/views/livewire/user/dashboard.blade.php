<div class="mim-fnt h-screen w-full flex overflow-hidden">
    <x-sidebar.left />

    <main
        class="flex-1 flex flex-col bg-gray-100 dark:bg-gray-700 transition z-0
		duration-500 ease-in-out overflow-y-auto">
        <div class="mx-10 my-2">
            <x-sidebar.top />
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
