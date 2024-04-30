<div class=' '>
  
     <!-- cards -->
<div class="w-full px-6 py-6 mx-auto space-y-2" x-data="{showFilter: false}" @click.away="showFilter = false">
<div class='mx-2'>
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
</div>
                
<div class="mx-2 overflow-x-auto relative shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    User name
                </th>
                <th scope="col" class="py-3 px-6">
                    Email
                </th>
                <th scope="col" class="py-3 px-6">
                    Index number
                </th>
                <th scope="col" class="py-3 px-6">
                    Phone number
                </th>
                <th scope="col" class="py-3 px-6">
                    User type
                </th>
                <th scope="col" class="py-3 px-6">
                    <span class="sr-only">Edit</span>
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse($users as $user)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$user->name}}
                </th>
                <td class="py-4 px-6">
                    {{$user->email}}
                </td>
                <td class="py-4 px-6">
                    {{$user->index_number}}
                </td>
                <td class="py-4 px-6">
                    {{$user->phone_number}}
                </td>
                <td class="py-4 px-6">
                    @if($user->user_type == 3)
                    <span class='text-green-900 bg-green-100 rounded-md px-1 py-1'>student</span>
                    @elseif($user->user_type == 1)
                    <span class='text-yellow-900 bg-yellow-100 rounded-md px-1 py-1'>pending</span>
                    @elseif($user->user_type == 2)
                    <span class='text-blue-900 bg-blue-100 rounded-md px-1 py-1'>teacher</span>
                    @endif
                </td>
                <td class="py-4 px-6 text-right space-x-3">
                    <button wire:click='openModal({{$user->id}})' class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View</button>
                    <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Suspend</a>
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
        
        {{$users->links()}}
        
    </div>
</div>
</div>
       <!-- end cards --> 

{{-- user modal --}}
       <x-modal.card title="User details" blur wire:model.defer="userModal">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 main-container">
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
            <x-input label="Level" wire:model='level' disabled />
            <x-input label="Subject" wire:model='subject' disabled />     
            <div class="col-span-1 sm:col-span-2">
                <x-input label="Price" wire:model='price' disabled />
            </div>
        </div>
     
        <x-slot name="footer">
            <div class="flex justify-between gap-x-4">
                @if($user_type == 1)
                <x-button flat negative label="Decline" wire:click="decline" />
                @endif
     
                <div class="flex">
                    <x-button flat label="Cancel" x-on:click="close" />
                    @if($user_type == 1)
                    <x-button dark label="Approve" wire:click="approve" />
                    @endif
                </div>
            </div>
        </x-slot>
    </x-modal.card>

 </div>