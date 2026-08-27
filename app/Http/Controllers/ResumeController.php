<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ResumeController extends Controller
{
    private const STORAGE_DISK = 'public';

    private const STORAGE_PATH = 'resume/latest.pdf';

    private const DOWNLOAD_NAME = 'Ruban-Kumar-B-Resume.pdf';

    /**
     * Stream the current resume PDF to the visitor. Serves the uploaded
     * copy if one exists, otherwise falls back to the bundled default.
     */
    public function download()
    {
        if (Storage::disk(self::STORAGE_DISK)->exists(self::STORAGE_PATH)) {
            return Storage::disk(self::STORAGE_DISK)->download(self::STORAGE_PATH, self::DOWNLOAD_NAME);
        }

        $default = public_path('files/resume.pdf');

        abort_unless(file_exists($default), 404);

        return response()->download($default, self::DOWNLOAD_NAME);
    }

    /**
     * Show the private upload form. This view is intentionally unlinked
     * from the public site navigation.
     */
    public function showManage(): View
    {
        return view('resume-manage');
    }

    /**
     * Replace the downloadable resume, gated by a shared password stored
     * outside source control (see config/resume.php).
     */
    public function upload(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'password' => ['required', 'string'],
            'resume' => ['required', 'file', 'mimes:pdf', 'max:5120'],
        ]);

        $expected = (string) config('resume.upload_password');

        if ($expected === '' || ! hash_equals($expected, $validated['password'])) {
            return back()
                ->withErrors(['password' => 'Incorrect password.'])
                ->withInput($request->except(['password', 'resume']));
        }

        $request->file('resume')->storeAs('resume', 'latest.pdf', self::STORAGE_DISK);

        return redirect()
            ->route('resume.manage')
            ->with('status', 'Resume updated successfully.');
    }
}
