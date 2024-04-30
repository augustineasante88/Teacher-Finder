<?php

namespace App\Http\Livewire\UserDashboard;

use App\Jobs\ProcessSMS;
use App\Mail\ApproveRequestToBeTeacher;
use App\Mail\DeclineRequestToBeTeacher;
use App\Models\User;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Livewire\WithPagination;
use WireUi\Traits\Actions;

class UsersPage extends Component
{
    use Actions, WithPagination;
    public $search, $sort;
    public $userModal= false;
    public $userId;
    public $name, $email, $index_number, $phone_number, $level, $subject, $price, $image, $user_type;

    public function decline(){
        
        $user = User::findOrFail($this->userId);
        $user->user_type = 3;
        $user->save();

        //send declined email
        Mail::to($user->email)->send(new DeclineRequestToBeTeacher($user));

        $message1 = "Dear $user->name, Your request to be a teacher has been declined. You do not meet the required criteria. Thank you.";
        $user_phone_number = $user->phone_number;
        // //send sms
        ProcessSMS::dispatch($message1, $user_phone_number);
        // Http::get('https://sms.arkesel.com/sms/api'.'?'.'action=send-sms'. '&api_key=S0l6dWdldGR2clVEYlFRYWRJa2U' .'&to='.$user->phone_number.'&from=CodeGod'. '&sms='. $message);

        $this->userModal = false;

        $this->render();

        $this->notification()->success(
            $title = 'Declined',
            $description = 'User request has been declined successfully'
        );

    }

    public function approve(){
        $user = User::findOrFail($this->userId);
        $user->user_type = 2;
        $user->save();

        //send approval email
        Mail::to($user->email)->send(new ApproveRequestToBeTeacher($user));

        $message1 = "Hey $user->name, Your request to be a teacher has been accepted. Thank you.";
        $user_phone_number = $user->phone_number;

        // //send sms
        ProcessSMS::dispatch($message1, $user_phone_number);
        // Http::get('https://sms.arkesel.com/sms/api'.'?'.'action=send-sms'. '&api_key=S0l6dWdldGR2clVEYlFRYWRJa2U' .'&to='.$user->phone_number.'&from=CodeGod'. '&sms='. $message);


        $this->userModal = false;

        $this->render();

        $this->notification()->success(
            $title = 'Approved',
            $description = 'User request has been successfully approved'
        );
    }

    public function openModal($id){
        $user = User::findOrFail($id);
        $this->userId = $id;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->index_number = $user->index_number;
        $this->phone_number = $user->phone_number;
        $this->level = $user->level;
        $this->subject = $user->subject;
        $this->price = $user->price;
        $this->image = $user->image;
        $this->user_type = $user->user_type;

        $this->userModal = true;

    }

    public function updatingSearch(): void
    {
        $this->gotoPage(1);
    }

    public function render()
    {
        //$users = User::query();

        if(!empty($this->sort)){
            $users = User::where('user_type', '=', $this->sort)->orderBy('created_at', 'desc')
            ->paginate(15);
        }

        if(empty($this->sort && empty($this->search))){
            $users = User::orderBy('created_at', 'desc')->paginate(15);
        }

        if(!empty($this->search)){
            $users = User::where('name', 'LIKE', '%'.$this->search.'%')
            ->orWhere('email', 'LIKE', '%'.$this->search.'%')
            ->orWhere('phone_number', 'LIKE', '%'.$this->search.'%')
            ->orWhere('index_number', 'LIKE', '%'.$this->search.'%')
            ->orderBy('created_at', 'desc')
            ->paginate(15);
        }

        return view('livewire.user-dashboard.users-page', compact('users'));
    }
}
