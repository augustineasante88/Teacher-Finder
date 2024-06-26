<div>
    <div class="flex flex-col-reverse items-end justify-end mb-1 mr-4 group cursor-pointer">
        <p class="text-sm font-semibold text-gray-900 mb-0">{{$comment}} comments</p>
        <p wire:click='like' class="text-sm font-semibold text-gray-900 mb-0 flex">{{$like}} 
        @if(empty($liked))
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 hover:fill-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
        </svg>
        @else 
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-red-600" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
        </svg>
        @endif
        
        </p>
    </div>
</div>
