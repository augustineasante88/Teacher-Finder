<?php

namespace App\Http\Livewire\UserDashboard;

use App\Jobs\ProcessSMS;
use App\Mail\ApprovedAppointment;
use App\Mail\DeclinedAppointment;
use App\Models\Appointment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Livewire\WithPagination;
use WireUi\Traits\Actions;

class AppointmentsPage extends Component
{
    use WithPagination, Actions;
    //public $appointments;
    public $userModal = false;
    public $name, $email, $index_number, $phone_number, $topic, $startDate, $endDate, $image, $status;
    public $appointmentId;

    public $teacherName, $teacherPhoneNumber;
    public $getTeacher;

    public function mount(){
        // $this->getTeacher = Appointment::where('user_id',Auth::user()->id)->get();
        // // dd($this->getTeacher);
    }

    public function approveRequest(){
        $this->userModal = false;

        $this->dialog()->confirm([
            'title'       => 'Are you sure You want to confirm this appointment',
            'description' => '',
            'icon'        => 'question',
            'accept'      => [
                'label'  => 'Yes, confirm it',
                'method' => 'approve',
                'params' => '',
            ],
            'reject' => [
                'label'  => 'No, cancel',
                'method' => 'openModal',
                'params' => $this->appointmentId,
            ],
        ]);
    }

    public function approve(){
        $appointment = Appointment::with(['requestedUser', 'getTeacher'])->findOrFail($this->appointmentId);
        // dd($appointment->requestedUser->email);

        $appointment->status = 1;
        $appointment->save();

        $this->userModal = false;

        $this->notification()->success(
            $title = 'Appointment approved',
            $description = 'Appointment approved successfully'
        );


        //send mail
        Mail::to($appointment->requestedUser->email)->send(new ApprovedAppointment($appointment));

        //send sms
        $message1 = "Dear $this->name, Your appointment with Mr/Miss $this->teacherName has been approved successfully. You can contact him/her on $this->teacherPhoneNumber. Thank you.";
        // Http::get('https://sms.arkesel.com/sms/api'.'?'.'action=send-sms'. '&api_key=S0l6dWdldGR2clVEYlFRYWRJa2U' .'&to='.$this->phone_number.'&from=CodeGod'. '&sms='. $message);

        $user_phone_number = $this->phone_number;

        ProcessSMS::dispatch($message1, $user_phone_number);

        $this->appointmentId='';
        $this->render();
        
    }


    public function declineRequest(){
        
        $this->userModal = false;

        $this->dialog()->confirm([
            'title'       => 'Are you sure You want to decline this appointment',
            'description' => '',
            'icon'        => 'question',
            'accept'      => [
                'label'  => 'Yes, confirm it',
                'method' => 'decline',
                'params' => '',
            ],
            'reject' => [
                'label'  => 'No, cancel',
                'method' => 'openModal',
                'params' => $this->appointmentId,
            ],
        ]);

    }

    public function decline(){
        $appointment = Appointment::with(['requestedUser', 'getTeacher'])->findOrFail($this->appointmentId);
        $appointment->status = 2;
        $appointment->save();

        $this->userModal = false;

        $this->notification()->success(
            $title = 'Appointment Declined',
            $description = 'Appointment declined successfully'
        );

        $this->render();

        //send mail
        Mail::to($appointment->requestedUser->email)->send(new DeclinedAppointment($appointment));

        $message1 = "Dear $this->name, Your appointment with Mr/Miss $this->teacherName has been declined. Please visit our website to book a different teacher. Thank you.";

        //send sms
        // Http::get('https://sms.arkesel.com/sms/api'.'?'.'action=send-sms'. '&api_key=S0l6dWdldGR2clVEYlFRYWRJa2U' .'&to='.$this->phone_number.'&from=CodeGod'. '&sms='. $message);

        $user_phone_number = $this->phone_number;

        ProcessSMS::dispatch($message1, $user_phone_number );

        $this->appointmentId='';

    }

    public function openModal($id){
        $this->userModal = true;
        $appointment = Appointment::with(['requestedUser', 'getTeacher'])->findOrFail($id);
        //dd($appointment);
        $this->appointmentId = $appointment->id;
        $this->name = $appointment->requestedUser->name;
        $this->email = $appointment->requestedUser->email;
        $this->index_number = $appointment->requestedUser->index_number;
        $this->phone_number = $appointment->requestedUser->phone_number;
        $this->image = $appointment->requestedUser->image;
        $this->startDate = $appointment->start_time;
        $this->endDate = $appointment->end_time;
        $this->status = $appointment->status;
        

        $this->teacherName = $appointment->getTeacher->name;
        $this->teacherPhoneNumber = $appointment->getTeacher->phone_number;

    }

    public function render()
    {
        if(Auth::user()->is_admin == 1){
            $appointments = Appointment::with(['requestedUser', 'getLocation'])->orderBy('created_at', 'desc')->paginate(15);
        }else{
            $appointments = Appointment::with(['requestedUser', 'getLocation'])
            ->where('user_id', '=', Auth::user()->id)
            ->orWhere('requested_user_id', Auth::user()->id)
            ->orderBy('created_at', 'desc')
            ->paginate(15);
        }
       
        return view('livewire.user-dashboard.appointments-page', compact('appointments'));
    }
}
