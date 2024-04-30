<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use App\Models\Like;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use WireUi\Traits\Actions;

class CommentAndLikes extends Component
{
    use Actions;
    public $teacher;
    public $comment;
    public $like;
    public $checkLiked;
    public $liked;

    public function mount(){
        $this->comment = Comment::where('user_id', $this->teacher)->count();
        $likes = Like::where('teacher_id',$this->teacher)->count();
        $this->like = $likes;

        if(Auth::user()){

            $liked = Like::where('user_id', Auth::user()->id)->where('teacher_id', $this->teacher)->first();
            $this->liked = $liked;
        }
        //dd($liked);


         
    }

    public function like(){
        // $userLike = User::findOrFail($this->teacher);
        // $userLike->likes = $userLike->likes + 1;
        // $userLike->save();
        // // dd($this->comment);

        // $this->mount();

        if(!empty(Auth::user())){

            $checkIfLiked = Like::where('user_id', '=', Auth::user()->id)
            ->where('teacher_id', '=', $this->teacher)
            ->first();

            if(empty($checkIfLiked)){
                $likes = new Like();
                $likes->teacher_id = $this->teacher;
                $likes->user_id = Auth::user()->id;
                $likes->save();

                $this->mount();
            }else{
                $checkIfLiked->delete();
                $this->mount();
            }
        }
        else{
            $this->dialog()->error(
                $title = 'Error',
                $description = 'Please login or create account to like a teacher'
            );
            //dd('you aint logged in');
        }
    }

    public function render()
    {
        
        return view('livewire.comment-and-likes');
    }
}
