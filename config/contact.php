<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Contact form notification recipients
    |--------------------------------------------------------------------------
    |
    | Every time the portfolio contact form is submitted, a notification
    | email is sent to each address listed here.
    |
    */

    'notify' => array_filter(array_map('trim', explode(',', env(
        'CONTACT_NOTIFY_EMAILS',
        'rubankumar5234@gmail.com,support@freelancepaycalc.com'
    )))),

];
