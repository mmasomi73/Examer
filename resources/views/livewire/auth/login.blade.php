<div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8 mim-fnt">
    <div class="max-w-md w-full lg:flex py-4 px-8 bg-white shadow-lg rounded-lg">
        <div class="max-w-md w-full space-y-8">
            <div class="mt-5">
                {{--            <img class="mx-auto h-16 w-auto" src="{{asset('assets/img/mim_logo.svg')}}" alt="Workflow">--}}
{{--                <img class="mx-auto h-12 w-auto" src="{{asset('assets/img/mim_logo.png')}}" alt="Workflow">--}}
                <h2 class="mt-6 text-left text-3xl font-medium text-gray-900">
                    Login to your account
                </h2>
            </div>
            <form class="mt-8 space-y-6" action="#" method="POST" autocomplete="off">
                <input type="hidden" name="remember" value="true">
                <div class="mt-0">
                    <div class="my-5 text-sm">
                        <label for="email" class="block text-black">email</label>
                        <input wire:model.lazy="email" name="email" type="text" id="email"
                               autocomplete="off"
                               class="rounded-md px-4 py-3 border focus:outline-none bg-white w-full"
                               placeholder="email"/>
                        @error('email')<span class="p-2 mt-3 text-red-600">{{$message}}</span> @enderror
                    </div>
                    <div class="my-5 text-sm">
                        <label for="password" class="block text-black">Password</label>
                        <input wire:model.lazy="password" name="password" type="password" id="password"
                               class="rounded-md px-4 py-3 border border-red-600 focus:outline-none bg-white w-full"
                               placeholder="Password"/>
                        @error('password')<span class="p-2 mt-3 text-red-600">{{$message}}</span> @enderror
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input wire:model="remember_me" id="remember_me" name="remember_me" type="checkbox"
                               class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                        <label for="remember_me" class="ml-2 block text-sm text-gray-900">
                            Remember me
                        </label>
                    </div>

                    <div class="text-sm">
                        <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">
                            Forgot your password?
                        </a>
                    </div>
                </div>

                <div class="mb-5">
                    <button type="submit"
                            class="mb-5 group relative overflow-hidden w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-blue-500 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">

                        <span
                            class="absolute btn-ai overflow-hidden rounded-full w-20 h-20 -mt-16 shadow-lg flex-shrink fill-current bg-blue-600 align-middle">
                            <i class="ai feather-unlock"></i>
                        </span>
                        Login
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
