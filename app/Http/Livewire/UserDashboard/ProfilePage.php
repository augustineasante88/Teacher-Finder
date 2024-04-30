<?php

namespace App\Http\Livewire\UserDashboard;

use App\Jobs\ProcessSMS;
use App\Mail\RequestToBeTeacher;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Livewire\WithFileUploads;
use WireUi\Traits\Actions;

class ProfilePage extends Component
{
    use Actions, WithFileUploads;

    public $name, $price, $subject, $email, $image;
    public $password, $password_confirmation;
    public $currentUser;
    public $storedImage;

    public function sendProposal(){
        $user = User::find(Auth::user()->id);
        $user->user_type = 1;
        $user->save();


        //mail to user
        Mail::to(Auth::user()->email)->send(new RequestToBeTeacher($user));

        $message1 = "Hey $user->name, Your request to be a teacher has been recieved successfully and is pending for review. You will be notified after the review is complete. Thank you.";
        $user_phone_number = $user->phone_number;

        //send sms
        ProcessSMS::dispatch($message1, $user_phone_number);
        // Http::get('https://sms.arkesel.com/sms/api'.'?'.'action=send-sms'. '&api_key=S0l6dWdldGR2clVEYlFRYWRJa2U' .'&to='.$user->phone_number.'&from=CodeGod'. '&sms='. $message);
        $this->mount();
        //$this->render();
    }

    public function updatePassword(){
        
        $this->validate([
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',
        ]);

        $user = User::find(Auth::user()->id);
        $user->password = Hash::make($this->password_confirmation);
        $user->save();

        $this->notification()->success(
            $title = 'Password updated',
            $description = 'Your profile password successfully changed'
        );

        $this->password = '';
        $this->password_confirmation = '';
    }

    public function updatePersonalInfo(){

        //dd($this->image);
        $validateData = [
            'name' => 'required',
            'email' => 'required',
            'price' => 'required',
            'subject' => 'required',
        ];

        $data = [
            'name' => $this->name,
            'email' => $this->email,
            'price' => $this->price,
            'subject' => $this->subject,
        ];

        //dd($data);

        if(!empty($this->image)){
            if(!empty($this->storedImage)){
                unlink("storage/profile_pictures/".$this->storedImage);
            }

            $imageHashName = $this->image->hashName();

            $validateData = array_merge($validateData, [
                'image'=> 'image',
            ]);

            $data = array_merge($data,[
                'image' => $imageHashName,
            ]);

            $this->image->store('public/profile_pictures');

        }

        $this->validate($validateData);
        $user = User::findOrFail(Auth::user()->id)->update($data);
        
        if(!empty($imageHashName)){

            $this->storedImage = $imageHashName;
        }

        $this->notification()->success(
            $title = 'Profile updated',
            $description = 'Your profile information successfully updated'
        );

        $this->mount();

    }

    public function mount(){
        $user = User::find(Auth::user()->id);
        $this->currentUser = $user;

        $this->name = $user->name;
        $this->email = $user->email;
        $this->price = $user->price;
        $this->subject = $user->subject;
        $this->storedImage = $user->image;

        // $this->render();
    }

    public function render()
    {
        
        return view('livewire.user-dashboard.profile-page');
    }
}
