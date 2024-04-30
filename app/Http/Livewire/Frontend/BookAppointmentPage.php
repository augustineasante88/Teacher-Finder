<?php

namespace App\Http\Livewire\Frontend;

use App\Jobs\ProcessEmails;
use App\Jobs\ProcessSMS;
use App\Jobs\ProcessSMSToTeacher;
use App\Mail\NewAppointmentMailConfirmationToStudent;
use App\Mail\NewAppointmentMailConfirmationToTeacher;
use App\Models\Appointment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use WireUi\Traits\Actions;

class BookAppointmentPage extends Component
{
    use Actions;
    public $teacher;
    public $image, $index_number, $name, $subject, $price, $level, $likes, $phone_number;

    public $startDate, $endDate, $location;

    public function mount(){
        $this->image = $this->teacher->image;
        $this->index_number = $this->teacher->index_number;
        $this->name = $this->teacher->name;
        $this->subject = $this->teacher->subject;
        $this->price = $this->teacher->price;
        $this->level = $this->teacher->level;
        $this->phone_number = $this->teacher->phone_number;

    }

    public function bookAppointment(){
        //dd($this->startDate);
        if(Auth::user()){
        $this->validate([
            'startDate' => 'required',
            'endDate' => 'required',
            'location' => 'required',
        ]);

        $this->dialog()->confirm([
            'title'       => 'Are you sure You want to book an appointment with'.$this->teacher->name . '?',
            'description' => '',
            'icon'        => 'question',
            'accept'      => [
                'label'  => 'Yes, book appointment',
                'method' => 'confirmAppointment',
                'params' => '',
            ],
            'reject' => [
                'label'  => 'No, cancel',
                // 'method' => 'cancel',
            ],
        ]);
        }
        else{

                $this->dialog()->error(
                    $title = 'Error',
                    $description = 'Please login to book an appointment with '.$this->teacher->name, 
                );
        }

        
    }

    public function confirmAppointment(){

    
        $appointment = new Appointment();
        $appointment->start_time = $this->startDate;
        $appointment->end_time = $this->endDate;
        $appointment->location = $this->location;
        $appointment->requested_user_id = Auth::user()->id;
        $appointment->user_id = $this->teacher->id;
        $appointment->save();

        $this->notification()->success(
            $title = 'Appointment Successful',
            $description = 'Your request has been submitted succesfully'
        );

        $appointments = Appointment::with(['getTeacher', 'requestedUser'])->findOrFail($appointment->id);
        // dd($appointments->getTeacher->email);

        // email to student
        ProcessEmails::dispatch(Mail::to(Auth::user()->email)->send(new NewAppointmentMailConfirmationToStudent($appointments)));

        // email to teacher
        ProcessEmails::dispatch(Mail::to($appointments->getTeacher->email)->send(new NewAppointmentMailConfirmationToTeacher($appointments)));

        //message to student
        $message1 = "Hey ". Auth::user()->name.", Your appointment request with Mr/Miss $this->name has been sent and is pending for approval. Thank you.";
        $user_phone_number = Auth::user()->phone_number;

        //send sms to student
        // ProcessSMS::dispatch(Http::get('https://sms.arkesel.com/sms/api'.'?'.'action=send-sms'. '&api_key=S0l6dWdldGR2clVEYlFRYWRJa2U' .'&to='.Auth::user()->phone_number.'&from=CodeGod'. '&sms='. $message1));
        ProcessSMS::dispatch($message1, $user_phone_number);

        //message to teacher
        $message = "Dear $this->name, You have a new appointment to review. Thank you.";
        $teacher_phone_number = $this->phone_number;
        // //send sms
        ProcessSMSToTeacher::dispatch($teacher_phone_number, $message);
        // ProcessSMS::dispatch(Http::get('https://sms.arkesel.com/sms/api'.'?'.'action=send-sms'. '&api_key=S0l6dWdldGR2clVEYlFRYWRJa2U' .'&to='.$this->phone_number.'&from=CodeGod'. '&sms='. $message));

      
        $this->startDate = '';
        $this->endDate = '';
        $this->location = '';

    }

    public function render()
    {
        return view('livewire.frontend.book-appointment-page');
    }
}
