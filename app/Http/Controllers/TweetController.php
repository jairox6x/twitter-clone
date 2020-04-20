<?php

namespace App\Http\Controllers;

use App\Tweet;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class TweetController extends Controller
{


    /**
     * @return RedirectResponse|Redirector
     */
    public function store()
    {
        $validated = request()->validate(['body' => 'required|max:180']);

        Tweet::create([
            'user_id' => auth()->id(),
            'body' => $validated['body']
        ]);

        return redirect('home');
    }
}
