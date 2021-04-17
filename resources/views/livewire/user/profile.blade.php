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
                        <div class="mt-5 md:mt-0 md:col-span-3">
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
                                            <x-forms.group.bare label="Birthday" for="birthday" >
                                                <x-forms.input.date wire:model.defer="birthday"
                                                                    name="birthday"
                                                                    type="text"
                                                                    id="birthday"
                                                                    :error="$errors->first('birthday')"
                                                                    placeholder="YYYY/MM/DD"
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
                                                <x-forms.input.rich-text
                                                    id="about"
                                                    :init-value="$about"
                                                    placeholder="Enter Some Text ... "
                                                    :error="$errors->first('about')"
                                                    wire:model.defer="about" />


                                            </x-forms.group.bare>
                                        </div>

                                        <div>
                                            <x-forms.group.bare label="avatar" for="avatar">
                                                <div x-data="{focused:false}" class="mt-1 flex items-center">

                                                    <span class="inline-block relative h-16 w-16 p-1 border-2 border-green-400 rounded-full bg-white">
                                                        <img class="h-full rounded-full w-full text-green-400" src="{{auth()->user()->avatarUrl()}}" alt="Profile Avatar">
                                                        <span class="absolute right-1 bottom-1  h-3 w-3 bg-green-400 shadow-xl rounded-full">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                                            </svg>
                                                        </span>
                                                    </span>
                                                    <label for="avatar" :class="{'outline-none ring-2 ring-offset-2 ring-blue-500':focused}"
                                                           class="cursor-pointer ml-5 bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50">Change </label>
                                                    <input wire:model.defer="avatar" @focus="focused=true" @blur="focused=false" id="avatar" type="file"
                                                           class="sr-only" />
                                                </div>

                                            </x-forms.group.bare>
                                        </div>

                                        <div>
                                            <x-forms.group.bare label="Cover photo" for="cover">
                                                <x-forms.input.filepond wire:model.defer="cover" />
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

            </div>
        </div>

    </main>

</div>


@push('styles')
    <link href="{{asset('assets/css/pikaday.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/trix.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/filepond.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/filepond-plugin-image-preview.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/filepond-plugin-image-edit.css')}}" rel="stylesheet">
@endpush

@push('scripts')
    <script src="{{asset('assets/js/moment.js')}}"></script>
    <script src="{{asset('assets/js/pikaday.js')}}"></script>
    <script src="{{asset('assets/js/trix.js')}}"></script>
    <script src="{{asset('assets/js/filepond-plugin-image-crop.js')}}"></script>
    <script src="{{asset('assets/js/filepond-plugin-image-preview.js')}}"></script>
    <script src="{{asset('assets/js/filepond-plugin-image-edit.js')}}"></script>
    <script src="{{asset('assets/js/filepond-plugin-image-resize.js')}}"></script>
    <script src="{{asset('assets/js/filepond.js')}}"></script>
@endpush
