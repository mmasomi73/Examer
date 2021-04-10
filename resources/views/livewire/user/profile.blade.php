<div class="mim-fnt h-screen w-full flex overflow-hidden" xmlns:wire="http://www.w3.org/1999/xhtml">
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

            <div class="p-4">
                <div>
                    <div class="md:grid md:grid-cols-3 md:gap-6">
                        <div class="md:col-span-1">
                            <div class="px-4 sm:px-0">
                                <h3 class="text-lg font-medium leading-6 text-gray-900">Profile</h3>
                                <p class="mt-1 text-sm text-gray-600">
                                    This information will be displayed publicly so be careful what you share.
                                </p>
                            </div>
                        </div>
                        <div class="mt-5 md:mt-0 md:col-span-2">
                            <form wire:submit.prevent="update" action="#">
                                <div class="shadow sm:rounded-md sm:overflow-hidden">
                                    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                        <div class="grid grid-cols-3 gap-6">
                                            <div class="col-span-3 sm:col-span-3">
                                                <label for="name" class="block text-black">Name</label>
                                                <input wire:model.defer="name" name="name" type="text" id="name"
                                                       autocomplete="off"
                                                       class="rounded-md px-4 py-2 border @error('name') border-red-600 @enderror mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm rounded-md w-full"
                                                       placeholder="Name ... "/>
                                                @error('name')<span class="p-2 mt-3 text-red-600 text-sm">{{$message}}</span> @enderror
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-3 gap-6">
                                            <div class="col-span-3 sm:col-span-3">
                                                <label for="username" class="block text-black">Username</label>
                                                <input wire:model.defer="username" name="username" type="text" id="username"
                                                       autocomplete="off"
                                                       class="rounded-md px-4 py-2 border @error('username') border-red-600 @enderror mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm rounded-md w-full"
                                                       placeholder="Username ... "/>
                                                @error('username')<span class="p-2 mt-3 text-red-600 text-sm">{{$message}}</span> @enderror
                                            </div>
                                        </div>

                                        <div>
                                            <label for="about" class="block text-sm font-medium text-gray-700">
                                                About
                                            </label>
                                            <div class="mt-1">
                                                <textarea wire:model.defer="about" id="about" name="about" rows="3" class="shadow-sm focus:ring-indigo-500 border focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="you@example.com"></textarea>
                                            </div>
                                            @error('about')<span class="p-2 mt-3 text-red-600 text-sm">{{$message}}</span> @enderror
                                            <p class="mt-2 text-sm text-gray-500">
                                                Brief description for your profile. URLs are hyperlinked.
                                            </p>
                                        </div>

                                        <div>
                                            <label class="block text-sm font-medium text-gray-700">
                                                Photo
                                            </label>
                                            <div class="mt-1 flex items-center">
                <span class="inline-block h-12 w-12 rounded-full overflow-hidden bg-gray-100">
                  <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                  </svg>
                </span>
                                                <button type="button" class="ml-5 bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                    Change
                                                </button>
                                            </div>
                                        </div>

                                        <div>
                                            <label class="block text-sm font-medium text-gray-700">
                                                Cover photo
                                            </label>
                                            <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                                <div class="space-y-1 text-center">
                                                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                                        <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                    <div class="flex text-sm text-gray-600">
                                                        <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                                            <span>Upload a file</span>
                                                            <input id="file-upload" name="file-upload" type="file" class="sr-only">
                                                        </label>
                                                        <p class="pl-1">or drag and drop</p>
                                                    </div>
                                                    <p class="text-xs text-gray-500">
                                                        PNG, JPG, GIF up to 10MB
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                        <button wire:click="update" type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                            Save
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="hidden sm:block" aria-hidden="true">
                    <div class="py-5">
                        <div class="border-t border-gray-200"></div>
                    </div>
                </div>
            </div>
        </div>

    </main>

</div>

