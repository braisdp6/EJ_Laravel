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

    'failed' => 'Estas credenciales no coinciden con nuestros registros.',
    'password' => 'La contraseña proporcionada es incorrecta.',
    'throttle' => 'Demasiados intentos de acceso. Por favor inténtelo de nuevo en :seconds segundos.',

    // 2FA Responses
    '2da_email_sent' => 'Correo electrónico 2FA enviado',
    '2fa_ok' => 'Código 2FA válido',
    '2fa_invalid_pin' => 'El código 2FA proporcionado no es válido',

    'register' => [
        'ok' => 'PIN válido',
        'step_failed' => 'El campo paso no es válido',
        'registered' => 'Ese usuario ya está registrado',
        'email_sent' => 'Correo electrónico de establecimiento de contraseña enviado',
        'set_pin_wait' => 'Ya le hemos enviado por correo electrónico un código PIN para establecer su primera contraseña, solo se puede realizar esta acción una vez cada :minutes minutos',
    ],
];
