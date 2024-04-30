<?php

namespace App\Http\Livewire\Frontend;

use App\Models\Comment;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use WireUi\Traits\Actions;

class ViewTeacherDetails extends Component
{
    use Actions;
    public $user;
    public $image, $index_number, $name, $subject, $price, $level, $likes;

    public $description;

    public $comments;
    public $pageNumber = 1;
    public $hasMorePages;



    public function mount(){
        //dd($this->user);
        $this->image = $this->user->image;
        $this->index_number = $this->user->index_number;
        $this->name = $this->user->name;
        $this->subject = $this->user->subject;
        $this->price = $this->user->price;
        $this->level = $this->user->level;

        //setting up loadmore
        $this->comments = new Collection();
        $this->loadMoreComments();

    }

    public function addComment(){

        $this->validate([
            'description' => 'required'
        ]);

        if(!empty(Auth::user())){
        //dd('hello');
        
        $comment = new Comment();
        $comment->description = $this->description;
        $comment->user_id = $this->user->id;
        $comment->created_by_user_name = Auth::user()->name;
        $comment->save();

        $this->description = '';    
        
        $this->notification()->success(
            $title = 'Successful',
            $description = 'Comment saved successfully'
        );
        }
        else{

            $this->dialog()->error(
                $title = 'Error',
                $description = 'Please login or create account to post a comment'
            );
        }
        


    }

    public function loadMoreComments(){
        $comments = Comment::where('user_id', '=', $this->user->id)->orderBy('created_at', 'desc')->paginate(5, ['*'], 'page', $this->pageNumber);

        $this->pageNumber += 1;

        $this->hasMorePages = $comments->hasMorePages();

        $this->comments->push(...$comments->items());
    }



    public function render()
    {
        // $comments = Comment::with('getCreatedUser')->where('user_id','=', $this->user->id)->orderBy('created_at', 'desc')->paginate(5);
        //dd($comment);
        return view('livewire.frontend.view-teacher-details');
    }
}
