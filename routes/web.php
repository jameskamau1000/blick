<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

$mailTo = env('INQUIRY_TO_ADDRESS', 'info@blickandskills.com');

$sendMessage = function (array $payload, string $subject) use ($mailTo): void {
    $body = collect($payload)
        ->map(fn ($value, $key) => ucfirst(str_replace('_', ' ', (string) $key)).': '.(string) $value)
        ->implode("\n");

    Mail::raw("New website submission:\n\n".$body, function ($message) use ($mailTo, $subject, $payload) {
        $message->to($mailTo)->subject($subject);

        if (! empty($payload['email']) && ! empty($payload['name'])) {
            $message->replyTo((string) $payload['email'], (string) $payload['name']);
        }
    });
};

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/services', 'services')->name('services');
Route::view('/precious-metals', 'precious-metals')->name('precious-metals');
Route::view('/sourcing-locations', 'sourcing-locations')->name('sourcing-locations');
Route::view('/compliance-certification', 'compliance')->name('compliance');
Route::view('/export-process', 'export-process')->name('export-process');
Route::view('/portal', 'portal')->name('portal');
Route::view('/news-insights', 'news')->name('news');
Route::view('/contact', 'contact')->name('contact');
Route::view('/location', 'location')->name('location');
Route::redirect('/inquiry', '/portal')->name('inquiry');

Route::post('/contact', function (Request $request) use ($sendMessage) {
    $data = $request->validate([
        'name' => ['required', 'string', 'max:120'],
        'company' => ['nullable', 'string', 'max:180'],
        'country' => ['nullable', 'string', 'max:120'],
        'inquiry_type' => ['required', 'string', 'max:120'],
        'email' => ['required', 'email', 'max:180'],
        'message' => ['required', 'string', 'max:5000'],
    ]);

    try {
        $sendMessage($data, 'Contact Form - Blick and Skills');

        return back()->with('status', 'Your message has been sent successfully.');
    } catch (\Throwable $th) {
        return back()->withInput()->withErrors(['send' => 'Message not sent. Please verify mail settings.']);
    }
})->name('contact.submit');

Route::post('/portal/submit', function (Request $request) use ($sendMessage) {
    $data = $request->validate([
        'form_type' => ['required', 'string', 'max:120'],
        'name' => ['required', 'string', 'max:120'],
        'email' => ['required', 'email', 'max:180'],
        'phone' => ['nullable', 'string', 'max:60'],
        'company' => ['nullable', 'string', 'max:180'],
        'country' => ['nullable', 'string', 'max:120'],
        'details' => ['required', 'string', 'max:5000'],
    ]);

    try {
        $sendMessage($data, 'Portal Submission - '.$data['form_type']);

        return back()->with('status', 'Your portal request has been submitted.');
    } catch (\Throwable $th) {
        return back()->withInput()->withErrors(['send' => 'Submission failed. Please verify mail settings.']);
    }
})->name('portal.submit');
