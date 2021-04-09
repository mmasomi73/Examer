<div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8 mim-fnt"
     xmlns:wire="http://www.w3.org/1999/xhtml">
    <div class="max-w-md w-full lg:flex py-4 px-8 bg-white shadow-lg rounded-lg">
        <div class="max-w-md w-full space-y-8">
            <div class="mt-5">
                {{--            <img class="mx-auto h-16 w-auto" src="{{asset('assets/img/mim_logo.svg')}}" alt="Workflow">--}}
                {{--            <img class="mx-auto h-12 w-auto" src="{{asset('assets/img/mim_logo.png')}}" alt="Workflow">--}}
                <h2 class="mt-6 text-left text-3xl font-medium text-gray-900">
                    Register an account
                </h2>
            </div>
            <form wire:submit.prevent="register" class="mt-8 space-y-6" autocomplete="off">
                <input type="hidden" name="remember" value="true">
                <div class="mt-0">
                    <div class="my-5 text-sm">
                        <label for="name" class="block text-black">Name</label>
                        <input wire:model.lazy="name" name="name" type="text" id="name"
                               autocomplete="off"
                               class="rounded-md px-4 py-2 border @error('name') border-red-600 @enderror mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm rounded-md w-full"
                               placeholder="Name ... "/>
                        @error('name')<span class="p-2 mt-3 text-red-600 text-sm">{{$message}}</span> @enderror
                    </div>
                    <div class="my-5 text-sm">
                        <label for="email" class="block text-black">Email</label>
                        <input wire:model.lazy="email" name="email" type="text" id="email"
                               autocomplete="off"
                               class="rounded-md px-4 py-2 border @error('email') border-red-600 @enderror mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm rounded-md w-full"
                               placeholder="Email ... "/>
                        @error('email')<span class="p-2 mt-3 text-red-600 text-sm">{{$message}}</span> @enderror
                    </div>
                    <div class="my-5 text-sm">
                        <label for="password" class="block text-black">Password</label>
                        <input wire:model.lazy="password" name="password" type="password" id="password"
                               class="rounded-md px-4 py-2 border @error('password') border-red-600 @enderror mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm rounded-md w-full"
                               placeholder="Password ... "/>
                        @error('password')<span class="p-2 mt-3 text-red-600 text-sm">{{$message}}</span> @enderror
                    </div>
                    <div class="my-5 text-sm">
                        <label for="passwordConfirmation" class="block text-black">Password Confirmation</label>
                        <input wire:model.lazy="passwordConfirmation" name="passwordConfirmation" type="password"
                               id="passwordConfirmation"
                               class="rounded-md px-4 py-2 border @error('passwordConfirmation') border-red-600 @enderror mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm rounded-md w-full"
                               placeholder="Password Confirmation ... "/>
                        @error('passwordConfirmation')<span class="p-2 mt-3 text-red-600 text-sm">{{$message}}</span> @enderror
                    </div>
                </div>

                <div class="mb-3">
                    <button wire:click="register" type="submit"
                            class="mb-5 group relative overflow-hidden w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-blue-500 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        <span
                            class="absolute btn-ai overflow-hidden rounded-full w-20 h-20 -mt-16 shadow-lg flex-shrink fill-current bg-blue-600 align-middle">
                            <i class="ai feather-unlock"></i>
                        </span>
                        Register
                    </button>
                </div>
                <div class="flex items-center justify-between mb-5">

                    <div class="text-sm">
                        <a href="#" class="font-medium text-blue-600 hover:text-blue-500">
                            I already have an account!
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
