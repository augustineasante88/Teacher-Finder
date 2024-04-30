<div>
    
    <div class="h-24 w-full bg-yellow-500">
        <div class="mx-auto flex h-full max-w-7xl flex-col justify-center space-y-2">
        <h1 class="ml-5 text-3xl font-extrabold text-red-800">All Teachers</h1>
        <span class="ml-5 h-1 w-36 border-b-4 border-green-800"></span>
        </div>
    </div>

    <section class="mx-auto max-w-7xl mt-12 flex gap-2 items-center">
      <div class='w-2/2 md:w-1/2 mx-4 my-2'>
        <x-input icon="search" wire:model='search' label="Enter Keyword" placeholder="name, price or subject" />
      </div>
      <p wire:loading>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 opacity-50 animate-spin">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12c0-1.232.046-2.453.138-3.662a4.006 4.006 0 013.7-3.7 48.678 48.678 0 017.324 0 4.006 4.006 0 013.7 3.7c.017.22.032.441.046.662M4.5 12l-3-3m3 3l3-3m12 3c0 1.232-.046 2.453-.138 3.662a4.006 4.006 0 01-3.7 3.7 48.657 48.657 0 01-7.324 0 4.006 4.006 0 01-3.7-3.7c-.017-.22-.032-.441-.046-.662M19.5 12l-3 3m3-3l3 3" />
        </svg>
      </p>
      <hr />
    </section>

    <section class="mx-auto max-w-7xl mt-12">
      <section class="mb-20 text-gray-700 mx-5">
      <div class="grid md:grid-cols-4 gap-6 text-center">
        @forelse ($users as $user)    
        <div>
          <div class="block rounded-lg shadow-lg bg-white">
            <div class="overflow-hidden rounded-t-lg h-28 bg-gradient-to-t from-red-900 to-red-600"></div>
            <div class="w-24 -mt-12 overflow-hidden border border-2 border-white rounded-full mx-auto bg-white">
              <img src="{{asset('storage/profile_pictures/'.$user->image)}}" />
            </div>
            <div class="p-6">
              <h4 class="text-2xl font-semibold mb-4">{{$user->name}}</h4>
              <hr />
              <div class="mt-4 pl-2 mb-2 flex justify-between ">
                <div class='flex flex-col items-start justify-start'>
                  <p class="text-sm font-semibold text-gray-900 mb-0">{{$user->subject}}</p>
                  <p class="text-md text-gray-800 mt-0">₵{{$user->price}} / hour</p>
                </div>
                @if(empty($search))
                 <livewire:comment-and-likes :teacher='$user->id' />
                @endif
              </div>
              <div class='m-2'><a href="{{route('teacher-details',$user->id)}}" class='text-red-800 px-2 bg-red-100 hover:bg-red-300 rounded-md'>view details</a></div>
              <div class='m-2'><a href="{{route('book-appointment',$user->id)}}" class='text-gray-800 px-2 hover:bg-gray-300 rounded-md'>Book Appointment</a></div>
            </div>
            
          </div>
        </div>
        @empty 
        No result found
        @endforelse
      
      </div>
      </section>
      <div class='flex w-full justify-center items-center my-2'>{{$users->links()}}</div>
    </section>
</div>
