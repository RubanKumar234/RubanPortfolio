<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <title>Manage Resume | Ruban Kumar B</title>
    <link href="https://fonts.googleapis.com/css2?family=DM+Mono:wght@400;500&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
    <style>
        body{display:flex;align-items:center;justify-content:center;min-height:100vh;background:linear-gradient(135deg,#e9f3f8 0%,#4b93f1 100%);overflow-x:hidden}
        .manage-card{position:relative;z-index:1;background:#fff;max-width:420px;width:100%;margin:24px;padding:40px 34px;box-shadow:0 30px 60px rgba(11,26,64,.18)}
        .manage-card h1{font:800 26px var(--display);letter-spacing:-.03em;margin:0 0 8px}
        .manage-card p.lead{color:var(--muted);font-size:14px;line-height:1.6;margin:0 0 28px}
        .manage-card label{display:block;font:700 11px var(--display);letter-spacing:.03em;color:#273854;margin-bottom:18px}
        .manage-card input[type=password],.manage-card input[type=file]{display:block;margin-top:7px;width:100%;border:1px solid var(--line);background:transparent;outline:0;padding:10px 12px;font:14px var(--display);color:var(--ink)}
        .manage-card input:focus{border-color:var(--violet)}
        .manage-card .button{width:100%;justify-content:center;margin-top:6px}
        .status-ok{background:#d8f6e9;color:#176348;font-size:12px;padding:10px 13px;margin:0 0 20px}
        .status-err{background:#ffe1e9;color:#8e1640;font-size:12px;padding:10px 13px;margin:0 0 20px}
        .back-link{display:inline-block;margin-top:22px;font-size:12px;color:var(--muted);text-decoration:none}
    </style>
</head>
<body>
    <div class="manage-card">
        <h1>Manage resume</h1>
        <p class="lead">Upload a new PDF to replace the one visitors get from the “Download Resume” button.</p>

        @if(session('status'))
            <p class="status-ok">{{ session('status') }}</p>
        @endif
        @if($errors->any())
            <p class="status-err">{{ $errors->first() }}</p>
        @endif

        <form method="POST" action="{{ route('resume.upload') }}" enctype="multipart/form-data">
            @csrf
            <label>Password<input type="password" name="password" required autocomplete="current-password"></label>
            <label>Resume PDF (max 5MB)<input type="file" name="resume" accept="application/pdf" required></label>
            <button class="button button-primary" type="submit">Upload resume <b>&uarr;</b></button>
        </form>

        <a class="back-link" href="{{ route('home') }}">&larr; Back to portfolio</a>
    </div>
</body>
</html>
