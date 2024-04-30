<div>
  
    <!-- cards -->
<div class="w-full px-6 py-6 mx-auto space-y-2" x-data="{showFilter: false}" @click.away="showFilter = false">
{{-- <div class='mx-2'>
   <x-button fuchsia label="filter" @click="showFilter = !showFilter" />
</div>

<div x-show="showFilter"  class="mx-2 overflow-x-auto relative shadow-md sm:rounded-lg bg-white flex flex-col md:flex-row">
   <div class='w-full md:w-1/2 px-4 py-2'>
       <x-input label="Search by" wire:model='search' name='search' placeholder="name, email, index no. or phone no." />
   </div>
   <div class='w-full md:w-1/2 px-4 py-2'>
       <x-native-select label="Sort by" wire:model="sort">
           <option value="">choose</option>
           <option value="1">Pending</option>
           <option value="2">Teacher</option>
           <option value="3">Student</option>
       </x-native-select>
   </div>
</div> --}}
               
<div class="mx-2 overflow-x-auto relative shadow-md sm:rounded-lg">
   <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
       <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
           <tr>
               <th scope="col" class="py-3 px-6">
                   Student Name
               </th>
               <th scope="col" class="py-3 px-6">
                   Start Date & Time
               </th>
               <th scope="col" class="py-3 px-6">
                   End Date & Time
               </th>
               <th scope="col" class="py-3 px-6">
                   Location
               </th>
               <th scope="col" class="py-3 px-6">
                   Status
               </th>
               <th scope="col" class="py-3 px-6">
                   <span class="sr-only">Action</span>
               </th>
           </tr>
       </thead>
       <tbody>
           @forelse($appointments as $appointment)
           <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
               
               <td class="py-4 px-6">
                   {{$appointment->requestedUser->name}}
               </td>
               <td class="py-4 px-6">
                   {{$appointment->start_time}}
               </td>
               <td class="py-4 px-6">
                   {{$appointment->end_time}}
               </td>
               <td class="py-4 px-6">
                   {{$appointment->getLocation->name}}
               </td>
               <td class="py-4 px-6">
                   @if($appointment->status == 0)
                   <span class='text-yellow-900 bg-yellow-100 rounded-md px-1 py-1'>pending</span>
                   @elseif($appointment->status == 1)
                   
                   <span class='text-green-900 bg-green-100 rounded-md px-1 py-1'>approved</span>
                   
                   @elseif($appointment->status == 2)
                   <span class='text-red-900 bg-red-100 rounded-md px-1 py-1'>rejected</span>
                   @endif
               </td>
               <td class="py-4 px-6 text-right space-x-3">
                   <button wire:click='openModal({{$appointment->id}})' class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View</button>
                   {{-- <button wire:click='delete({{$comment->id}})' class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</button> --}}
               </td>
           </tr>
           @empty
           <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
           <td colspan="6">
               <div class='flex flex-col justify-center items-center m-4'>
               <img src='{{asset('my-assets/img/no-data.png')}}' class='w-40 h-40' />
               <div>No result found</div>
               </div>
           </td>
           </tr>
           @endforelse
       
       </tbody>
       
   </table>
   <div class="bg-gray-100 flex justify-center w-full p-2">
       
       {{$appointments->links()}}
       
   </div>
</div>
</div>
      <!-- end cards --> 

      {{-- user modal --}}
      <x-modal.card title="Student details" blur wire:model.defer="userModal">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div class="col-span-1 sm:col-span-2 flex justify-center items-center">
                <div class='bg-red-800 w-36 h-36 rounded-full items-center justify-center mx-auto'>
                    @if(empty($image))
                       <h2 class='text-white flex items-center justify-center h-full'>No Image found</h2>
                    @else 
                       <img src="{{asset('storage/profile_pictures/'.$image)}}" class='w-36 h-36 rounded-full'/>
                    @endif
      
                </div>
            </div>
            <x-input label="Name" wire:model='name' disabled />
            <x-input label="Email" wire:model='email' disabled />
            <x-input label="Index No." wire:model='index_number' disabled />
            <x-input label="Phone No." wire:model='phone_number' disabled />
            <x-datetime-picker
                label="Start Time"
                display-format="YYYY-MM-DD HH:mm"
                parse-format="YYYY-MM-DD HH:mm"
                placeholder="Start Date & Time"
                wire:model.defer="startDate"
                disabled 
            />
            <x-datetime-picker
                label="End Time"
                display-format="YYYY-MM-DD HH:mm"
                parse-format="YYYY-MM-DD HH:mm"
                placeholder="Start Date & Time"
                wire:model.defer="endDate"
                disabled 
            />   
            {{-- <div class="col-span-1 sm:col-span-2">
                <x-input label="Price" wire:model='price' disabled />
            </div> --}}
        </div>
     
        <x-slot name="footer">
            <div class="flex justify-between gap-x-4">
                
                
                <x-button flat negative label="Decline request" wire:click="declineRequest" />
                
                
     
                <div class="flex">
                    <x-button flat label="Cancel" x-on:click="close" />
                   @if($status == 0)
                   
                   @if(Auth::user()->index_number != $index_number)
                    <x-button dark label="Approve" wire:click="approveRequest" />
                   @endif

                   @endif
                </div>
            </div>
        </x-slot>
    </x-modal.card>


</div>