<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactInquiryMail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'company' => 'nullable|string|max:255',
            'type' => 'required|string',
            'message' => 'required|string|min:10',
        ]);

        // Log the inquiry
        Log::info('New Contact Inquiry received:', $validated);

        try {
            Mail::to('info@esure4jay.com')->send(new ContactInquiryMail($validated));
        } catch (\Exception $e) {
            Log::error('Mail sending failed: ' . $e->getMessage());
            return redirect()->to('/#contact')->with('error', 'There was an error sending your message. Please try again later or contact me via WhatsApp.');
        }

        return redirect()->to('/#contact')->with('success', 'Your message has been sent successfully. I will be in touch with you shortly.');
    }
}
