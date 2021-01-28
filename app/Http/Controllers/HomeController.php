<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use App\Models\Category;
use App\Models\Post;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index() {

        $categories = Category::all();
        $projects = Project::with('categories')->get();
        $posts = Post::orderBy('created_at', 'desc')->get();

        return view('home', compact('categories', 'projects', 'posts'));

    }

    public function sendMail(ContactRequest $request) {

        $body = "<p><b>Name:</b>" . $request->input('name') . "</p>";
        $body .= "<p><b>Email:</b>" . $request->input('email') . "</p>";
        $body .= "<p><b>Subject:</b>" . $request->input('subject') . "</p>";
        $body .= "<p><b>Message:</b><br>" . nl2br($request->input('message')) . "</p>";

        Mail::to('bereschenko96@yandex.by')->send(new ContactMail($body));
        $request->session()->flash('success', 'The message has been successfully send!');

        return redirect('/');
    }

    public function getPostInfo(Request $request) {

        $data = Post::find($request->id);

        if (isset($data->id)) {
            $data->created_at_convert = $data->created_at->format('d M Y');
            return response()->json($data);
        } else {
            return response()->json([
                'title' => __('errors.title'),
                'content' => __('errors.content'),
                'image' => 'assets/images/no-image.png',
                'author' => __('errors.author'),
                'created_at_convert' => date('d M Y'),
            ]);
        }
    }
}
