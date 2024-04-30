<div>
<section class="mx-auto max-w-7xl mt-12">
    <section class="mb-20 text-gray-700 mx-5">
    
      <div class="md:flex items-start justify-center py-12 2xl:px-20 md:px-6 px-4">
          <div class="xl:w-2/6 lg:w-2/5 w-full">

            <div>
                <div class="block rounded-lg shadow-lg bg-white">
                  <div class="overflow-hidden rounded-t-lg h-28 bg-gradient-to-t from-red-900 to-red-600"></div>
                  <div class="w-24 -mt-12 overflow-hidden border border-2 border-white rounded-full mx-auto bg-white">
                    <img src="{{asset('storage/profile_pictures/'.$teacher->image)}}" />
                  </div>
                  <div class="p-6">
                    <h4 class="text-2xl font-semibold mb-4">{{$teacher->name}}</h4>
                    <hr />
                    <div class="mt-4 pl-2 mb-2 flex justify-between ">
                      <div class='flex flex-col items-start justify-start'>
                        <p class="text-sm font-semibold text-gray-900 mb-0">{{$teacher->subject}}</p>
                        <p class="text-md text-gray-800 mt-0">₵{{$teacher->price}} / hour</p>
                      </div>
                      <livewire:comment-and-likes :teacher='$teacher->id' />
                    </div>
                    <div class='m-2'><a href="{{route('teacher-details',$teacher->id)}}" class='text-red-800 px-2 bg-red-100 hover:bg-red-300 rounded-md'>view details</a></div>
                    
                  </div>
                  
                </div>
              </div>

          </div> 
          <div class="xl:w-2/5 md:w-1/2 lg:ml-8 md:ml-6 md:mt-0 mt-6">
              <div class="border-b border-gray-200 pb-2">
                  {{-- <p class="text-sm leading-none text-gray-600 dark:text-gray-300 ">Index Number: {{$index_number}}</p> --}}
                  {{-- <div class="relative z-0 mb-6 w-full group">
                    <input type="text" wire:model='topic' name="floating_topic" id="floating_topic" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="floating_topic" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Enter topic</label>
                    @error('topic')<span class='text-red-500 text-sm'>{{$message}}</span> @enderror
                </div> --}}
              </div>
              <div class="py-4 border-b border-gray-200 flex items-center justify-between">
                <div class='w-1/3'>
                    <p class="text-base leading-4 text-gray-800 dark:text-gray-300">Start Date & Time</p>
                  </div>
                  <div class='w-2/3'>
                      <x-datetime-picker
                          label=""
                          display-format="YYYY-MM-DD HH:mm"
                          parse-format="YYYY-MM-DD HH:mm"
                          placeholder="Start Date & Time"
                          wire:model.defer="startDate"
                      />
                  </div>
              </div>
              <div class="py-4 border-b border-gray-200 flex items-center justify-between">
                <div class='w-1/3'>
                  <p class="text-base leading-4 text-gray-800 dark:text-gray-300">End Date & Time</p>
                </div>
                <div class='w-2/3'>
                    <x-datetime-picker
                        label=""
                        display-format="YYYY-MM-DD HH:mm"
                        parse-format="YYYY-MM-DD HH:mm"
                        placeholder="End Date & Time"
                        wire:model.defer="endDate"
                    />
                </div>
              </div>
              <div class="py-4 border-b border-gray-200 flex items-center justify-between">
                {{-- <div class="relative z-0 mb-6 w-full group">
                    <input type="text" wire:model='location' name="floating_location" id="floating_location" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="floating_location" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Enter location</label>
                    @error('location')<span class='text-red-500 text-sm'>{{$message}}</span> @enderror
                </div> --}}
                <div class="relative z-0 mb-6 w-full group">
                <x-select
                    label="Choose Location"
                    wire:model.defer="location"
                    placeholder="select location"
                    :async-data="route('campus-locations')"
                    option-label="name"
                    option-value="id"
                />
                </div>
                
              </div>
              <button wire:loading.remove wire:click='bookAppointment' class="dark:bg-white dark:text-gray-900 dark:hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 text-base flex items-center justify-center leading-none text-white bg-gray-800 w-full py-4 hover:bg-gray-700 focus:outline-none">
                  Confirm
              </button>
              <button wire:loading wire:target='bookAppointment' class="dark:bg-white dark:text-gray-900 dark:hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 text-base flex items-center justify-center leading-none text-white bg-gray-800 w-full py-4 hover:bg-gray-700 focus:outline-none">
                  processing...
              </button>
          </div>
      </div>
    </section>
  </section>
</div>
