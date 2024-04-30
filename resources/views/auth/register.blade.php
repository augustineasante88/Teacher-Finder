
@extends('authentication_template')

@section('content')
    
    <div class=''>

        <section class="h-full gradient-form bg-gray-200">
            <div class="container py-12 px-6 mx-auto h-full">
              <div class="flex justify-center items-center flex-wrap h-full g-6 text-gray-800">
                <div class="w-full lg:w-2/3">
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
                            {{-- <h4 class="text-xl font-semibold mt-1 mb-12 pb-1">We are The Lotus Team</h4> --}}
                          </div>
                          <form method="POST" action="{{route('register')}}">
                            @csrf
                          <div class='space-y-5'>
                              <h1 class='text-red-800 text-3xl text-center'>Create Account</h1>
                              <div class="relative">
                                  <input name='name' value="{{old('name')}}" type="text" id="floating_filled" class="block rounded-t-lg px-2.5 pb-2.5 pt-5 w-full text-sm text-gray-900 bg-gray-50 dark:bg-gray-700 border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-800 focus:outline-none focus:ring-0 focus:border-red-800 peer" placeholder=" " />
                                  <label for="floating_filled" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-red-800 peer-focus:dark:text-red-800 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Fullname</label>
                                  @error('name')<span class='text-red-500'>{{$message}}</span> @enderror
                              </div>
                              <div class="relative">
                                  <input name='email' value="{{old('email')}}" type="text" id="floating_filled0" class="block rounded-t-lg px-2.5 pb-2.5 pt-5 w-full text-sm text-gray-900 bg-gray-50 dark:bg-gray-700 border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-800 focus:outline-none focus:ring-0 focus:border-red-800 peer" placeholder=" " />
                                  <label for="floating_filled0" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-red-800 peer-focus:dark:text-red-800 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">email</label>
                                  @error('email')<span class='text-red-500'>{{$message}}</span> @enderror
                              </div>
                              <div class='flex flex-col sm:flex-row space-x-0 sm:space-x-3 space-y-3 sm:space-y-0 w-full'>
                              <div class="relative w-full">
                                  <input name='index_number' value="{{old('index_number')}}" type="text" id="floating_filled1" class="block rounded-t-lg px-2.5 pb-2.5 pt-5 w-full text-sm text-gray-900 bg-gray-50 dark:bg-gray-700 border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-800 focus:outline-none focus:ring-0 focus:border-red-800 peer" placeholder=" " />
                                  <label for="floating_filled1" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-red-800 peer-focus:dark:text-red-800 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Index Number</label>
                                  @error('index_number')<span class='text-red-500'>{{$message}}</span> @enderror
                                </div>
                              <div class="relative w-full">
                                  <input name='phone_number' value="{{old('phone_number')}}" type="text" id="floating_filled2" class="block rounded-t-lg px-2.5 pb-2.5 pt-5 w-full text-sm text-gray-900 bg-gray-50 dark:bg-gray-700 border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-800 focus:outline-none focus:ring-0 focus:border-red-800 peer" placeholder=" " />
                                  <label for="floating_filled2" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-red-800 peer-focus:dark:text-red-800 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Phone Number</label>
                                  @error('phone_number')<span class='text-red-500'>{{$message}}</span> @enderror
                              </div>
                              </div>
                              <div class='flex flex-col sm:flex-row space-x-0 sm:space-x-3 space-y-3 sm:space-y-0 w-full'>
                              <div class="relative w-full">
                                  <input name='password' type="password" id="floating_filled5" class="block rounded-t-lg px-2.5 pb-2.5 pt-5 w-full text-sm text-gray-900 bg-gray-50 dark:bg-gray-700 border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-800 focus:outline-none focus:ring-0 focus:border-red-800 peer" placeholder=" " />
                                  <label for="floating_filled5" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-red-800 peer-focus:dark:text-red-800 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Password</label>
                                  @error('password')<span class='text-red-500'>{{$message}}</span> @enderror
                                </div>
                              <div class="relative w-full">
                                  <input name='password_confirmation' type="password" id="floating_filled6" class="block rounded-t-lg px-2.5 pb-2.5 pt-5 w-full text-sm text-gray-900 bg-gray-50 dark:bg-gray-700 border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-800 focus:outline-none focus:ring-0 focus:border-red-800 peer" placeholder=" " />
                                  <label for="floating_filled6" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-red-800 peer-focus:dark:text-red-800 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Confirm password</label>
                                  @error('password_confirmation')<span class='text-red-500'>{{$message}}</span> @enderror
                              </div>
                              </div>
                              <div class="relative">
                                  <input name='level' value="{{old('level')}}" type="text" id="floating_filled3" class="block rounded-t-lg px-2.5 pb-2.5 pt-5 w-full text-sm text-gray-900 bg-gray-50 dark:bg-gray-700 border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-800 focus:outline-none focus:ring-0 focus:border-red-800 peer" placeholder=" " />
                                  <label for="floating_filled3" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-red-800 peer-focus:dark:text-red-800 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Level</label>
                                  @error('level')<span class='text-red-500'>{{$message}}</span> @enderror
                              </div>
                              <div class="relative">
                                  <input name='subject' value="{{old('subject')}}" type="text" id="floating_filled3" class="block rounded-t-lg px-2.5 pb-2.5 pt-5 w-full text-sm text-gray-900 bg-gray-50 dark:bg-gray-700 border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-800 focus:outline-none focus:ring-0 focus:border-red-800 peer" placeholder=" " />
                                  <label for="floating_filled3" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-red-800 peer-focus:dark:text-red-800 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Subject</label>
                                  @error('subject')<span class='text-red-500'>{{$message}}</span> @enderror
                              </div>
                  
                              {{-- <div>
                              <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="file_input">Upload Your Image</label>
                              <input name='image' class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="file_input" type="file">
                              <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
                              @error('image')<span class='text-red-500'>{{$message}}</span> @enderror
                              </div> --}}
                  
                          </div>
                          
                  
                          <div class="grid grid-cols-2 gap-4 mt-4">
                          <button type="submit" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-red-800 rounded-lg hover:bg-red-900 focus:ring-4 focus:ring-red-300">Register <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
                          <a href="{{route('login')}}" class="px-4 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-200 rounded-lg focus:outline-none hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Already have an account? Login</a>    
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