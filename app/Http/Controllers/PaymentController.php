<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\PaymentsReceived;
use Illuminate\Support\Facades\Notification;

class PaymentController extends Controller
{
    public function create()
    {
        return view('payments.create');
    }

    public function store()
    {
        // Notification::send(request()->user(), new PaymentsReceived());
        request()->user()->notify(new PaymentsReceived());
    }
}
