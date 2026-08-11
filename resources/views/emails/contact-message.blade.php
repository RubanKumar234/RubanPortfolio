<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>New portfolio contact message</title>
</head>
<body style="margin:0;padding:0;background:#f5f8ff;font-family:Arial,Helvetica,sans-serif;color:#07152f;">
<table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="background:#f5f8ff;padding:32px 0;">
<tr>
<td align="center">
<table role="presentation" width="560" cellpadding="0" cellspacing="0" style="background:#ffffff;border-radius:8px;overflow:hidden;border:1px solid #dbe2f2;">
<tr>
<td style="background:#0a1833;padding:20px 28px;">
<span style="color:#ffffff;font-size:16px;font-weight:bold;">New message from your portfolio</span>
</td>
</tr>
<tr>
<td style="padding:24px 28px;">
<table role="presentation" width="100%" cellpadding="0" cellspacing="0">
<tr>
<td style="padding:6px 0;font-size:13px;color:#68728a;width:110px;">Name</td>
<td style="padding:6px 0;font-size:14px;">{{ $contactMessage->name }}</td>
</tr>
<tr>
<td style="padding:6px 0;font-size:13px;color:#68728a;">Email</td>
<td style="padding:6px 0;font-size:14px;"><a href="mailto:{{ $contactMessage->email }}" style="color:#386cff;">{{ $contactMessage->email }}</a></td>
</tr>
@if($contactMessage->subject)
<tr>
<td style="padding:6px 0;font-size:13px;color:#68728a;">Subject</td>
<td style="padding:6px 0;font-size:14px;">{{ $contactMessage->subject }}</td>
</tr>
@endif
</table>
<hr style="border:none;border-top:1px solid #dbe2f2;margin:18px 0;">
<p style="font-size:14px;line-height:1.7;white-space:pre-line;margin:0;">{{ $contactMessage->message }}</p>
</td>
</tr>
<tr>
<td style="padding:16px 28px;background:#f5f8ff;font-size:11px;color:#78829a;">
Sent from the contact form on your portfolio site &middot; {{ $contactMessage->created_at ? $contactMessage->created_at->format('d M Y, H:i') : '' }}
</td>
</tr>
</table>
</td>
</tr>
</table>
</body>
</html>
