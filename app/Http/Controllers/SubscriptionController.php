<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscribed_user;
class SubscriptionController extends Controller
{
    public function saveEmail($email)
    {
        echo "ok";
        $newSubscriber= new Subscribed_user();
        $newSubscriber->email=$email;
        $newSubscriber->save();
        return view('home');
    }
}
