<div>
  
    <!-- cards -->
<div class="w-full py-6 mx-auto">
               
<div class="w-full overflow-x-auto relative shadow-md sm:rounded-lg">
   <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
       <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
           <tr>
               <th scope="col" class="py-3 px-6">
                   User name
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
           @foreach($users as $user)
           <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
               <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                   {{$user->name}}
               </th>
               <td class="py-4 px-6">
                   {{$user->index_number}}
               </td>
               <td class="py-4 px-6">
                   {{$user->phone_number}}
               </td>
               <td class="py-4 px-6">
                   @if($user->user_type == null)
                   <span class='text-green-900 bg-green-100 rounded-md px-1 py-1'>student</span>
                   @elseif($user->user_type == 1)
                   <span class='text-yellow-900 bg-yellow-100 rounded-md px-1 py-1'>pending</span>
                   @elseif($user->user_type == 2)
                   <span class='text-blue-900 bg-blue-100 rounded-md px-1 py-1'>teacher</span>
                   @endif
               </td>
               <td class="py-4 px-6 text-right space-x-3">
                   <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View</a>
                   <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</a>
               </td>
           </tr>
           @endforeach
       </tbody>
   </table>
</div>