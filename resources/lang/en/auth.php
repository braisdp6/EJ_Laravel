<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */

    'failed' => 'These credentials do not match our records.',
    'password' => 'The provided password is incorrect.',
    'throttle' => 'Too many login attempts. Please try again in :seconds seconds.',

    // 2FA Responses
    '2da_email_sent' => '2FA email sent',
    '2fa_ok' => 'Valid 2FA code',
    '2fa_invalid_pin' => 'The 2FA code is invalid.',

    'register' => [
        'ok' => 'Valid pin',
        'step_failed' => 'The step field is invalid.',
        'registered' => 'That user is already registered',
        'email_sent' => 'Set password email sent',
        'set_pin_wait' => 'We have already emailed you a PIN code to set your first password, this action can only be performed once every :minutes minutes',
    ],
];
