<?php

namespace App\Http\Controllers;

use App\Mail\NewContactMessage;
use App\Models\ContactMessage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContactMessageController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email:rfc,dns', 'max:150'],
            'subject' => ['nullable', 'string', 'max:150'],
            'message' => ['required', 'string', 'max:3000'],
            'website' => ['nullable', 'max:0'],
        ]);

        $contactMessage = ContactMessage::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'subject' => $validated['subject'] ?? null,
            'message' => $validated['message'],
        ]);

        $recipients = config('contact.notify', []);

        if (! empty($recipients)) {
            try {
                Mail::to($recipients)->send(new NewContactMessage($contactMessage));
            } catch (\Throwable $e) {
                // Don't fail the form submission if the notification email
                // can't be sent (e.g. SMTP misconfigured) — the message is
                // already saved above.
                Log::error('Failed to send contact form notification email: ' . $e->getMessage());
            }
        }

        return redirect()->route('home', ['sent' => 1])->withFragment('contact');
    }
}
