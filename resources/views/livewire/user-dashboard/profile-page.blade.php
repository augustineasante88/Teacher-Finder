<div>
  

    <!-- cards -->
    <div class="w-full px-6 py-6 mx-auto">
      <div class='mx-2 bg-gray-200 rounded-md shadow-md flex flex-col md:flex-row'>
        <div class='w-full md:w-2/4 p-6'>
        <h1 class='text-2xl'>Hey! Do you want to be a teacher? </h1>
        </div>
        <div class=' md:w-2/4 p-6 space-y-4 bg-white m-4 rounded-md'>
          @if($currentUser->user_type == 1)
          <x-button warning label="you request is pending review" />
          @elseif($currentUser->user_type == 2)
          <x-button warning label="Congratulations!!! You are a teacher" />
          @else

          @if(empty($storedImage))
          <x-button info label="please complete your profile information before you can request to be a teacher." />
          @else
          <x-button wire:loading.remove wire:click='sendProposal' dark label="click me to send your proposal" />
          <x-button wire:loading wire:target='sendProposal' positive label="processing..." />
          @endif

          @endif
        </div>
      </div>
    </div>
      <!-- end cards --> 

    <!-- cards -->
    <div class="w-full px-6 py-6 mx-auto">
      <div class='mx-2 bg-gray-200 rounded-md shadow-md flex flex-col md:flex-row'>
        <div class='w-full md:w-2/4 p-6'>
        <h1 class='text-2xl'>Change Password</h1>
        </div>
        <div class=' md:w-2/4 p-6 space-y-4 bg-white m-4 rounded-md'>
          <x-input label="Email" wire:model='email' disabled placeholder="your email" />
          <x-input label="Password" wire:model='password' type='password' name='password' placeholder="password" />
          <x-input label="Confirm passsword" wire:model='password_confirmation' type='password' name='password_confirmation' placeholder="confirm password" />
          
          <x-button dark label="save changes" wire:loading.remove wire:click='updatePassword' />
          <x-button dark label="processing..." wire:loading wire:target='updatePassword' />
        </div>
      </div>
    </div>
      <!-- end cards --> 

      <!-- cards -->
    <div class="w-full px-6 py-6 mx-auto">
      <div class='mx-2 bg-gray-200 rounded-md shadow-md flex flex-col md:flex-row'>
        <div class='w-full md:w-2/4 p-6'>
        <h1 class='text-2xl'>Update Pricing & Personal Info.</h1>
        </div>
        <div class=' md:w-2/4 p-6 space-y-4 bg-white m-4 rounded-md'>
          <div class='flex w-full'>
            <div class='bg-red-800 w-36 h-36 rounded-full items-center justify-center mx-auto'>
              @if(empty($storedImage))
                 <h2 class='text-white flex items-center justify-center h-full'>No Image found</h2>
              @else 
                 <img src="{{asset('storage/profile_pictures/'.$storedImage)}}" class='w-36 h-36 rounded-full'/>
              @endif

            </div>
          </div>
          <x-input label="Fullname" wire:model='name' name='name' placeholder="fullname"/>
          <x-input label="Email" wire:model='email' name='email' placeholder="email"/>
          <x-input label="Price per hour" wire:model='price' name='price' placeholder="price"/>
          <x-input label="Subject" wire:model='subject' name='subject' placeholder="subject"/>
          <x-input label="Change profile picture" wire:model='image' name='image' type='file' />
          <x-button dark label="Save changes" wire:loading.remove wire:click='updatePersonalInfo'/>
          <x-button dark label="processing..." wire:loading wire:target='updatePersonalInfo'/>
        </div>
      </div>
    </div>
      <!-- end cards --> 
</div>