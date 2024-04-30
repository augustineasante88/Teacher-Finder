@extends('authentication_template')

@section('content')
    <!-- drawer Login Account component -->
    {{-- <div class="fixed z-40 flex flex-col justify-center h-screen p-4 overflow-y-auto bg-white w-full md:w-1/3 dark:bg-gray-800 transition-transform right-0 top-0 transform-none">
        <h5 id="drawer-right-label" class="inline-flex justify-center mb-4 text-base font-semibold text-red-800 dark:text-gray-800">AAMUSTED Student Teacher Finder</h5>

        <div class='space-y-5'>
            <h1 class='text-red-800 text-3xl text-center'>Login</h1>
            <div class="relative">
                <input type="text" id="floating_filled" class="block rounded-t-lg px-2.5 pb-2.5 pt-5 w-full text-sm text-gray-900 bg-gray-50 dark:bg-gray-700 border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-800 focus:outline-none focus:ring-0 focus:border-red-800 peer" placeholder=" " />
                <label for="floating_filled" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-red-800 peer-focus:dark:text-red-800 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Index Number</label>
            </div>
            <div class="relative">
                <input type="text" id="floating_filled3" class="block rounded-t-lg px-2.5 pb-2.5 pt-5 w-full text-sm text-gray-900 bg-gray-50 dark:bg-gray-700 border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-800 focus:outline-none focus:ring-0 focus:border-red-800 peer" placeholder=" " />
                <label for="floating_filled3" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-red-800 peer-focus:dark:text-red-800 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Password</label>
            </div>
        </div>

        <div class="grid grid-cols-2 gap-4 mt-4">
        <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-red-800 rounded-lg hover:bg-red-900 focus:ring-4 focus:ring-red-300">login</a>
        <a href="#" class="px-4 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-200 rounded-lg focus:outline-none hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Don't have an account? Create account</a>    
        </div>
    </div> --}}
    {{-- end drawer --}}

    <div class=''>

        <section class="h-full gradient-form bg-gray-200 md:h-screen">
            <div class="container py-12 px-6 h-full">
              <div class="flex justify-center items-center flex-wrap h-full g-6 text-gray-800">
                <div class="w-full md:w-1/2">
                  <div class="block bg-white shadow-lg rounded-lg">
                    <div class="lg:flex lg:flex-wrap g-0">
                      <div class="w-full px-4 md:px-0">
                        <div class="md:p-12 md:mx-6">
                          <div class="text-center">
                            <img
                              class="mx-auto w-48"
                              src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp"
                              alt="logo"
                            />
                            <h4 class="text-xl font-semibold mt-1 mb-12 pb-1">We are The Lotus Team</h4>
                          </div>
                          
                          <form method="POST" action="{{route('password.update')}}">
                            @csrf
                            <div class='space-y-2'>

                            <input type='hidden' name='token' value='{{$request->route('token')}}'/>
                           
                            <div class="relative">
                                <input name='email' value="{{$request->email}}" type="email" id="floating_filled" class="block rounded-t-lg px-2.5 pb-2.5 pt-5 w-full text-sm text-gray-900 bg-gray-50 dark:bg-gray-700 border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-800 focus:outline-none focus:ring-0 focus:border-red-800 peer" placeholder=" " />
                                <label for="floating_filled" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-red-800 peer-focus:dark:text-red-800 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">email address</label>
                                @error('email') <span class='text-red-500'>{{$message}}</span> @enderror
                            </div>
                            <div class="relative">
                                <input name='password' type="password" id="floating_filled" class="block rounded-t-lg px-2.5 pb-2.5 pt-5 w-full text-sm text-gray-900 bg-gray-50 dark:bg-gray-700 border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-800 focus:outline-none focus:ring-0 focus:border-red-800 peer" placeholder=" " />
                                <label for="floating_filled" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-red-800 peer-focus:dark:text-red-800 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">password</label>
                                @error('password') <span class='text-red-500'>{{$message}}</span> @enderror
                            </div>
                            <div class="relative">
                                <input name='password_confirmation' type="password" id="floating_filled1" class="block rounded-t-lg px-2.5 pb-2.5 pt-5 w-full text-sm text-gray-900 bg-gray-50 dark:bg-gray-700 border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-800 focus:outline-none focus:ring-0 focus:border-red-800 peer" placeholder=" " />
                                <label for="floating_filled1" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-red-800 peer-focus:dark:text-red-800 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">confirm password</label>
                                @error('password_confirmation') <span class='text-red-500'>{{$message}}</span> @enderror
                            </div>
                           

                            <div class="text-center pt-1 mb-12 pb-1">
                              <button
                                class="inline-block px-6 py-2.5 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out w-full mb-3"
                                type="submit"
                                data-mdb-ripple="true"
                                data-mdb-ripple-color="light"
                                style="
                                  background: linear-gradient(
                                    to right,
                                    #ee7724,
                                    #d8363a,
                                    #dd3675,
                                    #b44593
                                  );
                                "
                              >
                                Update
                              </button>
                            </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

    </div>

@endsection