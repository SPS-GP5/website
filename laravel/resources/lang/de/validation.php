<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'required'             => 'Das Feld :attribute ist erforderlich.',
    'min'                  => [
        'string'  => 'Das Feld :attribute muss mindestens :min Zeichen lang sein.',
    ],
    'max'                  => [
        'string'  => 'Das Feld :attribute darf maximal :max Zeichen lang sein.',
    ],
    'alpha'                => 'Das Feld :attribute darf nur Buchstaben enthalten.',
    'email'                => 'Das Feld :attribute muss ein gültiges Email-Format haben.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'email' => [
            'unique' => 'Die Email-Adresse wird bereits verwendet.',
        ],
        'password' => [
            'confirmed' => 'Die Passwörter stimmen nicht überein.'
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
        'firstname' => 'Vorname',
        'lastname' => 'Nachname',
        'email' => 'Email',
        'password' => 'Passwort',
    ],

];
