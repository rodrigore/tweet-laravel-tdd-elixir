<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateTweetRequest extends Request
{
    public function authorize()
    {
        // if $user->admin return true
        // if $user->id != $tweet->id
        // return false

        // policies
        return true;
    }

    public function rules()
    {
        return [
            'body'     => 'required|min:5',
            'document' => 'required|image',
        ];
    }

    public function persist()
    {
        // upload

        /// create
        /* Tweet::create([ */
        /*     'body' => */
        /* ]); */
    }
}
