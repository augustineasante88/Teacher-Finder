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
                   Description
               </th>
               <th scope="col" class="py-3 px-6">
                   Teacher Name
               </th>
               <th scope="col" class="py-3 px-6">
                   Student Name
               </th>
               <th scope="col" class="py-3 px-6">
                   Date
               </th>
               <th scope="col" class="py-3 px-6">
                   <span class="sr-only">Edit</span>
               </th>
           </tr>
       </thead>
       <tbody>
           @forelse($comments as $comment)
           <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
               <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                   {{$comment->description}}
               </th>
               <td class="py-4 px-6">
                   {{$comment->getCreatedUser->name}}
               </td>
               <td class="py-4 px-6">
                   {{$comment->created_by_user_name}}
               </td>
               <td class="py-4 px-6">
                   {{$comment->created_at}}
               </td>
               <td class="py-4 px-6 text-right space-x-3">
                   {{-- <button wire:click='openModal({{$user->id}})' class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View</button> --}}
                   @can('is_admin')
                   <button wire:click='delete({{$comment->id}})' class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</button>
                   @endcan
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
       
       {{$comments->links()}}
       
   </div>
</div>
</div>
      <!-- end cards --> 

</div>