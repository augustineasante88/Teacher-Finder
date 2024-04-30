<div>
    {{-- <x-dialog z-index="z-50" blur="md" align="center" /> --}}
<section class="mx-auto max-w-7xl mt-12">
    <section class="mb-20 text-gray-700 mx-5">
    
      <div class="md:flex items-start justify-center py-12 2xl:px-20 md:px-6 px-4">
          <div class="xl:w-2/6 lg:w-2/5 w-full">
              <img class="w-full" alt="image of a girl posing" src="{{asset('storage/profile_pictures/'.$image)}}" />
          </div> 
          <div class="xl:w-2/5 md:w-1/2 lg:ml-8 md:ml-6 md:mt-0 mt-6">
              <div class="border-b border-gray-200 pb-6">
                  <p class="text-sm leading-none text-gray-600 dark:text-gray-300 ">Index Number: {{$index_number}}</p>
                  <h1 class="lg:text-2xl text-xl font-semibold lg:leading-6 leading-7 text-gray-800 dark:text-white mt-2">{{$name}}</h1>
              </div>
              <div class="py-4 border-b border-gray-200 flex items-center justify-between">
                  <p class="text-base leading-4 text-gray-800 dark:text-gray-300">Subject</p>
                  <div class="flex items-center justify-center">
                      <p class="text-sm leading-none text-gray-600 dark:text-gray-300">{{$subject}}</p>
                      <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/productDetail3-svg2.svg" alt="next">
                      <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/productDetail3-svg2dark.svg" alt="next">   
                  </div>
              </div>
              <div class="py-4 border-b border-gray-200 flex items-center justify-between">
                  <p class="text-base leading-4 text-gray-800 dark:text-gray-300">Price / Hour</p>
                  <div class="flex items-center justify-center">
                      <p class="text-sm leading-none text-gray-600 dark:text-gray-300 mr-3">₵{{$price}}</p>
                      
                      <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/productDetail3-svg2.svg" alt="next">
                      <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/productDetail3-svg2dark.svg" alt="next">  
                  </div>
              </div>
              <div class="py-4 border-b border-gray-200 flex items-center justify-between">
                  <p class="text-base leading-4 text-gray-800 dark:text-gray-300">Level</p>
                  <div class="flex items-center justify-center">
                      <p class="text-sm leading-none text-gray-600 dark:text-gray-300 mr-3">{{$level}}</p>
                      
                      <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/productDetail3-svg2.svg" alt="next">
                      <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/productDetail3-svg2dark.svg" alt="next">  
                  </div>
              </div>
              <div class="py-4 border-b border-gray-200 flex items-center justify-between">
                  <p class="text-base leading-4 text-gray-800 dark:text-gray-300 flex">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                      </svg>
                  </p>
                  <div class="flex items-center justify-center">
                      <p class="text-sm leading-none text-gray-600 dark:text-gray-300 mr-3">{{$likes}} </p>
                      
                      <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/productDetail3-svg2.svg" alt="next">
                      <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/productDetail3-svg2dark.svg" alt="next">  
                  </div>
              </div>
              <div class="py-4 border-b border-gray-200 flex items-center justify-between">
                  <p class="text-base leading-4 text-gray-800 dark:text-gray-300 flex">
                      comments
                  </p>
                  <div class="flex items-center justify-center">
                      <p class="text-sm leading-none text-gray-600 dark:text-gray-300 mr-3">{{$likes}} </p>
                      
                      <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/productDetail3-svg2.svg" alt="next">
                      <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/productDetail3-svg2dark.svg" alt="next">  
                  </div>
              </div>
              <a href="{{route('book-appointment',$user)}}" class="dark:bg-white dark:text-gray-900 dark:hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 text-base flex items-center justify-center leading-none text-white bg-gray-800 w-full py-4 hover:bg-gray-700 focus:outline-none">
                  <img class="mr-3 dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/svg1.svg" alt="location">
                  <img class="mr-3 hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/svg1dark.svg" alt="location">
                  Book Appointment
            </a >
          </div>
      </div>
      <div>
          <h1 class='text-3xl'>Comments</h1>
          <hr />
          <div class="md:flex flex-col space-y-3 items-start justify-center py-12 2xl:px-20 md:px-6 px-4">
              <div class='w-full space-y-3'>
                  <x-input label="" wire:model='description' name='description' placeholder="write a comment..." />
                  <x-button dark wire:click='addComment' label="Post Comment" />
              </div>
              @forelse($comments as $comment)
              <div class=' bg-gray-200 rounded-md'>
                  <div class='p-4'>
                  <h3 class="font-bold text-sm">{{$comment->created_by_user_name}}</h3>
                  <p class='text-lg'>{{$comment->description}}</p>
                  <p class='text-xs'>{{$comment->created_at}}</p>
                  </div>
              </div>
              @empty 
              <p class='my-4'>
              No comments found
              </p>
              @endforelse
              @if($hasMorePages)
              <div class='border-t-2 border-gray-200 w-full'>
              <button wire:click='render'>View more comments</button>
              </div>
              @endif
          </div>
          
          </div>
      </div>
      
      
      
  
    </section>
  </section>
</div>