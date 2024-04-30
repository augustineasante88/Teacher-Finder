<?php

namespace App\Http\Livewire\UserDashboard;

use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;
use WireUi\Traits\Actions;

class CommentsPage extends Component
{
    use WithPagination, Actions;
    // public $comments;

    public function mount(){
     
    }

    public function delete(Comment $comment){
        $this->dialog()->confirm([
            'title'       => 'Are you sure You want to delete this comment?',
            'description' => '',
            'icon'        => 'question',
            'accept'      => [
                'label'  => 'Yes, delete it',
                'method' => 'confirmDelete',
                'params' => $comment,
            ],
            'reject' => [
                'label'  => 'No, cancel',
                // 'method' => 'cancel',
            ],
        ]);
    }

    public function confirmDelete(Comment $comment){
        $comment->delete();
        $this->notification()->success(
            $title = 'Comment Deleted',
            $description = 'Comment deleted successfully'
        );

    }

    public function render()
    {
        if(Auth::user()->is_admin == 1){
            $comments = Comment::with('getCreatedUser')->orderBy('created_at', 'desc')->paginate(15);
        }
        else{
            $comments = Comment::with('getCreatedUser')->orderBy('created_at', 'desc')->where('user_id', Auth()->user()->id)->paginate(15);
        }
        
        return view('livewire.user-dashboard.comments-page', compact('comments'));
    }
}
