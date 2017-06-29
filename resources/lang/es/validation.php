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

    'accepted'             => 'El campo :attribute debe ser aceptado.',
    'active_url'           => 'El campo :attribute no es una URL válida.',
    'after'                => 'El campo :attribute debe ser una fecha posterior a :date.',
    'after_or_equal'       => 'El campo :attribute debe ser una fecha posterior o igual a :date.',
    'alpha'                => 'El campo :attribute sólo puede contener letras.',
    'alpha_dash'           => 'El campo :attribute sólo puede contener letras, números y guiones (a-z, 0-9, -_).',
    'alpha_num'            => 'El campo :attribute sólo puede contener letras y números.',
    'array'                => 'El campo :attribute debe ser un array.',
    'before'               => 'El campo :attribute debe ser una fecha anterior a :date.',
    'before_or_equal'      => 'El campo :attribute debe ser una fecha anterior o igual a :date.',
    'between'              => [
        'numeric' => 'El campo :attribute debe ser un valor entre :min y :max.',
        'file'    => 'El archivo :attribute debe pesar entre :min y :max kilobytes.',
        'string'  => 'El campo :attribute debe contener entre :min y :max caracteres.',
        'array'   => 'El campo :attribute debe contener entre :min y :max elementos.',
    ],
    'boolean'              => 'El campo :attribute debe ser verdadero o falso.',
    'confirmed'            => 'El campo confirmación de :attribute no coincide.',
    'country'              => 'El campo :attribute no es un país válido.',
    'date'                 => 'El campo :attribute no corresponde con una fecha válida.',
    'date_format'          => 'El campo :attribute no corresponde con el formato de fecha :format.',
    'different'            => 'Los campos :attribute y :other han de ser diferentes.',
    'digits'               => 'El campo :attribute debe ser un número de :digits dígitos.',
    'digits_between'       => 'El campo :attribute debe contener entre :min y :max dígitos.',
    'dimensions'           => 'El campo :attribute tiene dimensiones invalidas.',
    'distinct'             => 'El campo :attribute tiene un valor duplicado.',
    'email'                => 'El campo :attribute no corresponde con una dirección de e-mail válida.',
    'file'                 => 'El campo :attribute debe ser un archivo.',
    'filled'               => 'El campo :attribute es obligatorio.',
    'exists'               => 'El campo :attribute no existe.',
    'image'                => 'El campo :attribute debe ser una imagen.',
    'in'                   => 'El campo :attribute debe ser igual a alguno de estos valores :values',
    'in_array'             => 'El campo :attribute no existe en :other.',
    'integer'              => 'El campo :attribute debe ser un número entero.',
    'ip'                   => 'El campo :attribute debe ser una dirección IP válida.',
    'json'                 => 'El campo :attribute debe ser una cadena de texto JSON válida.',
    'max'                  => [
        'numeric' => 'El campo :attribute debe ser :max como máximo.',
        'file'    => 'El archivo :attribute debe pesar :max kilobytes como máximo.',
        'string'  => 'El campo :attribute debe contener :max caracteres como máximo.',
        'array'   => 'El campo :attribute debe contener :max elementos como máximo.',
    ],
    'mimes'                => 'El campo :attribute debe ser un archivo de tipo :values.',
    'mimetypes'            => 'El campo :attribute debe ser un archivo de tipo :values.',
    'min'                  => [
        'numeric' => 'El campo :attribute debe tener al menos :min.',
        'file'    => 'El archivo :attribute debe pesar al menos :min kilobytes.',
        'string'  => 'El campo :attribute debe contener al menos :min caracteres.',
        'array'   => 'El campo :attribute no debe contener más de :min elementos.',
    ],
    'not_in'               => 'El campo :attribute seleccionado es invalido.',
    'numeric'              => 'El campo :attribute debe ser un numero.',
    'present'              => 'El campo :attribute debe estar presente.',
    'regex'                => 'El formato del campo :attribute es inválido.',
    'required'             => 'El campo :attribute es obligatorio',
    'required_if'          => 'El campo :attribute es obligatorio cuando el campo :other es :value.',
    'required_unless'      => 'El campo :attribute es requerido a menos que :other se encuentre en :values.',
    'required_with'        => 'El campo :attribute es obligatorio cuando :values está presente.',
    'required_with_all'    => 'El campo :attribute es obligatorio cuando :values está presente.',
    'required_without'     => 'El campo :attribute es obligatorio cuando :values no está presente.',
    'required_without_all' => 'El campo :attribute es obligatorio cuando ningún campo :values están presentes.',
    'same'                 => 'Los campos :attribute y :other deben coincidir.',
    'size'                 => [
        'numeric' => 'El campo :attribute debe ser :size.',
        'file'    => 'El archivo :attribute debe pesar :size kilobytes.',
        'string'  => 'El campo :attribute debe contener :size caracteres.',
        'array'   => 'El campo :attribute debe contener :size elementos.',
    ],
    'state'                => 'El estado no es válido para el país seleccionado.',
    'string'               => 'El campo :attribute debe contener solo caracteres.',
    'timezone'             => 'El campo :attribute debe contener una zona válida.',
    'unique'               => 'El elemento :attribute ya está en uso.',
    'uploaded'             => 'El elemento :attribute fallo al subir.',
    'url'                  => 'El formato de :attribute no corresponde con el de una URL válida.',

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
        'name' => [
            'required' => 'El campo nombre es obligatorio.',
            'alpha' => 'El campo nombre sólo puede contener letras.'
        ],

        'last_name' => [
            'required' => 'El campo apellidos es obligatorio.',
            'regex' => 'El formato del campo apellidos es inválido.'

        ],

        'address' => [
            'required' => 'El campo dirección es obligatorio.'
        ],

        'phone' => [
            'required' => 'El campo teléfono es obligatorio.',
            'digits'   => 'El campo teléfono debe ser un número de :digits dígitos.'
        ],

        'birthday' => [
            'required' => 'El campo fecha de nacimiento es obligatorio.'
        ],

        'position' => [
            'required' => 'El campo puesto es obligatorio.'
        ],

        'start_date' => [
            'required' => 'El campo fecha de inicio de contrato es obligatorio.'
        ],

        'email' => [
            'required' => 'El campo correo electronico es obligatorio.'
        ],

        'nationality' => [
            'required' => 'El campo nacionalidad es obligatorio.'
        ],

        'avenue' => [
            'required' => 'El campo avenida es obligatorio.'
        ],

        'streets' => [
            'required' => 'El campo entre que calles es obligatorio.'
        ],
        'number' => [
            'required' => 'El campo número interior y exterior es obligatorio.'
        ],
        'colony' => [
            'required' => 'El campo colonia es obligatorio.'
        ],
        'reference' => [
            'required' => 'El campo referencia es obligatorio.'
        ],

        'postal_code' => [
            'required' => 'El campo código postal es obligatorio.'
        ],
        
        'municipality' => [
            'required' => 'El campo municicipio es obligatorio.'
        ],
        'city' => [
            'required' => 'El campo ciudad es obligatorio.'
        ],
        'federative' => [
            'required' => 'El campo entidad federativa es obligatorio.'
        ],
        'dependent' => [
            'required' => 'El campo número de hijos o dependientes es obligatorio.'
        ],
        'time_address' => [
            'required' => 'El campo tiempo de vivir en el mismo domicilio es obligatorio.'
        ],
        'type_material' => [
            'required' => 'El campo tipo de material de la vivienda es obligatorio.'
        ],
        'school_grade' => [
            'required' => 'El campo grado de escolaridad es obligatorio.'
        ],
        'nacionality' => [
            'required' => 'El campo nacionalidad es obligatorio.'
        ],
        'place' => [
            'required' => 'El campo lugar de nacimiento es obligatorio.'
        ],
        'ocupation' => [
            'required' => 'El campo ocupación es obligatorio.'
        ],
        'address_work' => [
            'required' => 'El campo dirección de trabajo es obligatorio.'
        ],
        'activity' => [
            'required' => 'El campo giro o actividad principal es obligatorio.'
        ],
        'antiquity' => [
            'required' => 'El campo antiguedad es obligatorio.'
        ],
        'antiquity_locality' => [
            'required' => 'El campo antiguedad en la colonia es obligatorio.'
        ],
        'times' => [
            'required' => 'El campo que dias y en que horario atiende su trabajo es obligatorio.'
        ],
        'name_company' => [
            'required' => 'El campo nombre de la empresa es obligatorio.'
        ],
        'amount' => [
            'required' => 'El campo monto recibido es obligatorio.'
        ],
        'term' => [
            'required' => 'El campo plazo es obligatorio.'
        ],
        'payment_amount' => [
            'required' => 'El campo monto de pago por amortización es obligatorio.'
        ],
        'relationship' => [
            'required' => 'El campo parentezco es obligatorio.'
        ],

        'birthdate' => [
            'required' => 'El campo fecha de nacimiento es obligatorio.'
        ],
        'last_name' => [
            'required' => 'El campo apellidos  es obligatorio.'
        ],

        'rows[]' => [
            'required' => 'Debes seleccionar por lo menos un permiso.'
        ],
        'nomenclature' => [
            'required' => 'El campo nomenclatura es obligatorio.'
        ],
         'municipality' => [
            'required' => 'El campo municipio es obligatorio.'
        ],
        'exercise' => [
            'required' => 'El campo ejercicio es obligatorio.',
            'alpha' => 'El campo ejercicio sólo puede contener letras.'
        ],
        'name_bank' => [
            'required' => 'El campo nombre del banco es obligatorio.',
            'alpha' => 'El campo nombre del banco sólo puede contener letras.'
        ],
        'account_number' => [
            'required' => 'El campo número de cuenta/número de sucursal es obligatorio.',
        ],
        'name_institution' => [
            'required' => 'El campo nombre de la institución es obligatorio.',
            'alpha' => 'El campo nombre de la institución sólo puede contener letras.'
        ],
        'description' => [
            'required' => 'El campo descripción es obligatorio.',
            'alpha' => 'El campo descripción sólo puede contener letras.'
        ],
        'minimum_amount' => [
            'required' => 'El campo monto minimo es obligatorio.',
            'numeric' => 'El campo monto minimo sólo puede contener números.'
        ],
        'maximum_amount' => [
            'required' => 'El campo monto maximo es obligatorio.',
            'numeric' => 'El campo monto maximo sólo puede contener números.'
        ],
        'minimum_term' => [
            'required' => 'El campo plazo minimo es obligatorio.',
        ],
        'maximum_term' => [
            'required' => 'El campo plazo maximo es obligatorio.',
        ],
         'cup_interest' => [
            'required' => 'El campo tasa de interes es obligatorio.',
        ],
         'surcharge' => [
            'required' => 'El campo recargo es obligatorio.',
        ],
        'branch_id' => [
            'required' => 'El campo sucursal es obligatorio.',
        ],
        'last_name' => [
            'required' => 'El campo apellido es obligatorio.',
        ],
        'date' => [
            'required' => 'El campo fecha es obligatorio.',
        ],
        'name_spouse' => [
            'required' => 'El campo nombre del conyugue es obligatorio.',
        ],
        'previous_credit' => [
            'required' => 'El campo de crédito anterior es obligatorio.',
        ],
        'last_name' => [
            'required' => 'El campo apellido es obligatorio.',
        ],
        'amount_requested' => [
            'required' => 'El campo monto solicitado es obligatorio.',
        ],
        'authorized_amount' => [
            'required' => 'El campo monto autorizado es obligatorio.',
        ],
        'warranty' => [
            'required' => 'El campo garantía líquida es obligatorio.',
        ],
        'warranty_value' => [
            'required' => 'El campo valor de la garantia es obligatorio.',
        ],
        'sequence' => [
            'required' => 'El campo secuencia es obligatorio.',
        ],
        'observations' => [
            'required' => 'El campo observaciones es obligatorio.',
        ],
        'term' => [
            'required' => 'El campo plazo en dias es obligatorio.',
        ],
        'surcharges ' => [
            'required' => 'El campo recargos es obligatorio.',
        ],
        'expiration_from ' => [
            'required' => 'El campo vencimientos del es obligatorio.',
        ],
        'expiration_to ' => [
            'required' => 'El campo al es obligatorio.',
        ],
        'justification ' => [
            'required' => 'El campo justificación es obligatorio.',
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

    'attributes' => [],

];
