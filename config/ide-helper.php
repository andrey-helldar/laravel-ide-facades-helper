<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Filename & Format
    |--------------------------------------------------------------------------
    |
    | The default filename
    |
    */

    'filename' => '_ide_helper.php',

    /*
    |--------------------------------------------------------------------------
    | Facades locations to include
    |--------------------------------------------------------------------------
    |
    | Define in which directories the ide-helper:models command should look
    | for models.
    |
    | To process all files, specify "*".
    |
    */

    'facade_locations' => [
        'app/Facades',
    ],

    /*
    |--------------------------------------------------------------------------
    | Method visibility types to include
    |--------------------------------------------------------------------------
    |
    | Determines what types of methods will be generated.
    |
    */

    'facades_visibility' => ReflectionMethod::IS_PUBLIC,
];
