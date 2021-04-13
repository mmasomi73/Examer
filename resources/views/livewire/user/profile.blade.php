<div class="mim-fnt h-screen w-full flex overflow-hidden" xmlns:wire="http://www.w3.org/1999/xhtml">
    <x-sidebar.left />
    <main
        class="flex-1 flex flex-col bg-gray-100 dark:bg-gray-700 transition z-0
		duration-500 ease-in-out overflow-y-auto">
        <div class="mx-10 my-2">
            <x-sidebar.top />
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
                                <div class="shadow-xl sm:rounded-md sm:overflow-hidden">
                                    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                        <div class="">
                                            <x-forms.group.bare label="Name" for="name" >
                                                <x-forms.input.text wire:model.defer="name"
                                                                    name="name"
                                                                    type="text"
                                                                    id="name"
                                                                    :error="$errors->first('name')"
                                                                    placeholder="Name ... "
                                                                    autocomplete="off" />

                                            </x-forms.group.bare>
                                        </div>
                                        <div class="">
                                            <x-forms.group.bare label="Username" for="username" >
                                                <x-forms.input.text wire:model.defer="username"
                                                                    name="username"
                                                                    type="text"
                                                                    id="username"
                                                                    :error="$errors->first('username')"
                                                                    placeholder="Username ... "
                                                                    autocomplete="off" />

                                            </x-forms.group.bare>
                                        </div>

                                        <div>
                                            <x-forms.group.bare label="About" for="about"
                                                                help-text="Brief description for your profile. URLs are hyperlinked." >
                                                <x-forms.input.textarea

                                                    placeholder="Enter Some Text ... "
                                                    :error="$errors->first('about')"
                                                    wire:model.defer="about" id="about" name="about" rows="3"  />


                                            </x-forms.group.bare>
                                        </div>

                                        <div>
                                            <x-forms.group.bare label="Photo" for="photo">
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

                                            </x-forms.group.bare>
                                        </div>

                                        <div>
                                            <x-forms.group.bare label="Cover photo" for="cover">
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
                                            </x-forms.group.bare>
                                        </div>
                                    </div>
                                    <div class="px-4 py-3 bg-white text-right sm:px-6">
                                        <button wire:click="update" type="submit" class="inline-flex justify-center py-2 px-12 border border-transparent shadow-xl text-sm font-medium rounded-md text-white bg-green-400 hover:bg-green-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-400">
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

