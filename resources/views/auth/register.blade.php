@extends('layouts.app')



@section('content')
    

            <!-- component -->
 <div class="flex flex-col justify-center py-24 bg-white sm:px-6 lg:px-8 ">
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <h2 class="mt-6 text-3xl font-extrabold text-center text-gray-900">
            Sign up to your account
        </h2>
        <p class="mt-2 text-sm text-center text-gray-600 max-w">
            Or
            <a href="" class="font-medium text-indigo-600 hover:text-indigo-500">
                I have an account already
            </a>
        </p>
    </div>

    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="px-4 py-8 bg-white shadow sm:rounded-lg sm:px-10">
            <form action="{{ route('register') }}" method="post">
                @csrf
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 mt-6">
                        Name
                    </label>
                    <div class="mt-1">
                        <input id="name" type="text" name="name" value="{{old('name')}}" required
                        class="block w-full px-3 py-2 placeholder-gray-400 border border-gray-300 rounded-md shadow-sm appearance-none focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                
                    </div>
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mt-6">
                        Email address
                    </label>
                    <div class="mt-1">
                    <input id="email" type="email" name="email" value="" required
                            class="block w-full px-3 py-2 placeholder-gray-400 border border-gray-300 rounded-md shadow-sm appearance-none focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                   </div>
                    
                   <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mt-6">
                        Username
                    </label>
                    <div class="mt-1">
                    <input id="username" type="text" name="username" value="" required
                            class="block w-full px-3 py-2 placeholder-gray-400 border border-gray-300 rounded-md shadow-sm appearance-none focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                   </div>

                    <label for="password" class="block text-sm font-medium text-gray-700 mt-6">
                        Password
                    </label>
                    <div class="mt-1">
                        <input id="password" type="password" name="password" value="" required
                            class="block w-full px-3 py-2 placeholder-gray-400 border border-gray-300 rounded-md shadow-sm appearance-none focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                    </div>
                                 
                </div>
                <div>
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mt-6">
                        Confirm Password
                    </label>
                    <div class="mt-1">
                        <input id="password_confirmation" type="password" name="password_confirmation" value="" required
                            class="block w-full px-3 py-2 placeholder-gray-400 border border-gray-300 rounded-md shadow-sm appearance-none focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                    </div>
                </div>
                <div class="flex items-center justify-between mt-4 mb-4">
                    <div class="flex items-center">
                    <input id="tos" type="checkbox" name="tos" required class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500" />
                    <label for="tos" class="block ml-2 text-sm text-gray-900"> I agree to the Terms of Service </label>
                </div>

                    
                </div>
                <div>
                    <button type="submit"
                        class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 mt-6 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Create account
                    </button>
                </div>
            </form>

            <div class="mt-6">
                <div class="relative">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-300"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span class="px-2 text-gray-500 bg-white">
                            Or continue with
                        </span>
                    </div>
                </div>

                <div class="grid  mt-6">
                    <div>
                        <a href="#"
                            class="inline-flex justify-center w-full px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50">
                            <span class="sr-only">Sign in with Google</span>
                            {{-- <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M20 10c0-5.523-4.477-10-10-10S0 4.477 0 10c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V10h2.54V7.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V10h2.773l-.443 2.89h-2.33v6.988C16.343 19.128 20 14.991 20 10z"
                                    clip-rule="evenodd" />
                            </svg> --}}
                            Sign in with Google
                        </a>
                    </div>


               
           
        </div>
    </div>
</div>
    
@endsection