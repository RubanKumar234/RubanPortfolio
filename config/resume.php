<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Resume upload password
    |--------------------------------------------------------------------------
    |
    | The password required to upload a replacement resume PDF from the
    | private /resume/manage page. Set RESUME_UPLOAD_PASSWORD in your .env
    | file — never commit a real password to source control.
    |
    */

    'upload_password' => env('RESUME_UPLOAD_PASSWORD'),

];
