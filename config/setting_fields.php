<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Application Settings
    |--------------------------------------------------------------------------
    |
    | In here you can define all the settings used in your app, it will be
    | available as a settings page where user can update it if needed
    | create sections of settings with a type of input.
    */
    'general' => [

        'app' => [

            'title' => 'General Settings',
            'desc' => 'View and update your General Application Settings',
            'icon' => '',

            'elements' => [
                [
                    'type' => 'text',
                    'data' => 'string',
                    'name' => 'app_name',
                    'label' => 'App Name',
                    'class' => 'form-control',
                    'placeholder' => 'Application Name',
                    'rules' => '',
                    'hint' => 'You can set the app name here',
                    'attribute' => 'disabled',
                ],
                [
                    'type' => 'text',
                    'data' => 'string',
                    'name' => 'app_url',
                    'label' => 'App URL',
                    'class' => 'form-control',
                    'placeholder' => 'Application URL',
                    'rules' => '',
                    'hint' => 'You can set the app url here',
                    'attribute' => 'disabled',
                ],
                [
                    'type' => 'select',
                    'data' => 'string',
                    'name' => 'app_env',
                    'label' => 'App Environment',
                    'rules' => '',
                    'class' => 'form-control',
                    'options' => [
                        'development' => 'Development',
                        'production' => 'Production',
                        'beta' => 'Staging',
                    ]
                ],
                [
                    'type' => 'select',
                    'data' => 'boolean',
                    'name' => 'app_log_mode',
                    'label' => 'Application Debug Mode',
                    'rules' => '',
                    'class' => 'form-control',
                    'options' => [
                        1 => 'True',
                        0 => 'False'
                    ]
                ],
                [
                    'type' => 'select',
                    'data' => 'string',
                    'name' => 'timezone',
                    'label' => 'Time Zone',
                    'class' => 'form-control',
                    'rules' => 'string',
                    'options' => array_combine(
                        DateTimeZone::listIdentifiers(DateTimeZone::ALL),
                        DateTimeZone::listIdentifiers(DateTimeZone::ALL)
                    ),
                    'value' => config('app.timezone', 'UTC')
                ],
                [
                    'type' => 'text',
                    'name' => 'contact_email',
                    'label' => 'Contact Form Email',
                    'class' => 'form-control',
                    'rules' => 'required',
                    'placeholder' => '',

                ],
                [
                    'type' => 'text',
                    'name' => 'bcc_email',
                    'label' => 'Bcc Email',
                    'class' => 'form-control',
                    'rules' => 'required',
                    'placeholder' => '',

                ],
                // [
                //     'type' => 'text',
                //     'name' => 'mailchimp_api',
                //     'label' => 'Mailchimp API',
                //     'class' => 'form-control',
                //     'rules' => 'required',
                //     'placeholder' => '',

                // ],
                // [
                //     'type' => 'text',
                //     'name' => 'mailchimp_list_id',
                //     'label' => 'Mailchimp List ID',
                //     'class' => 'form-control',
                //     'rules' => 'required',
                //     'placeholder' => '',

                // ],
            ]
        ],

    ],

    'meta' => [

        'meta' => [

            'title' => 'Meta Information',
            'desc' => 'Update Meta Info and Localization',
            'icon' => '',

            'elements' => [
                [
                    'type' => 'text',
                    'data' => 'string',
                    'name' => 'site_title',
                    'label' => 'Site Title',
                    'class' => 'form-control',
                    'rules' => 'required|min:2|max:60'
                ],
                [
                    'type' => 'textarea',
                    'data' => 'string',
                    'name' => 'meta_description',
                    'label' => 'Meta Description',
                    'class' => 'form-control',
                    'placeholder' => 'Enter your Meta Description here. It must be between 50–160 characters.',
                    'rows' => '2',
                    'rules' => 'required|min:50|max:300'
                ],
                [
                    'type' => 'text',
                    'data' => 'string',
                    'name' => 'google_analytics',
                    'label' => 'Google Analytics Tracking ID',
                    'placeholder' => 'UA-XXXXXX-X',
                    'class' => 'form-control',
                    'rules' => '',
                ],
                [
                    'type' => 'text',
                    'data' => 'string',
                    'name' => 'facebook_pixel_code',
                    'label' => 'Facebook Pixel ID',
                    'placeholder' => 'your-pixel-id-goes-here',
                    'class' => 'form-control',
                    'rules' => '',
                ],
            ]
        ],
    ],

    'mail_config' => [

        'mail_setting' => [

            'title' => 'Mail Settings',
            'desc' => 'Manage mail configuration',
            'icon' => 'fa fa-cogs',

            'elements' => [
                [
                    'type' => 'select',
                    'data' => 'string',
                    'name' => 'mail_driver',
                    'label' => 'Mail Driver',
                    'rules' => '',
                    'class' => 'form-control',
                    'options' => [
                        'smtp' => 'smtp',
                        'mail' => 'mail',
                        'ses' => 'ses',
                        'log' => 'log'
                    ]
                ],
                [
                    'type' => 'text',
                    'data' => 'string',
                    'name' => 'main_host',
                    'label' => 'Mail Host',
                    'class' => 'form-control',
                    'placeholder' => 'smtp.mailgun.org',
                    'rules' => '',
                ],
                [
                    'type' => 'text',
                    'data' => 'string',
                    'name' => 'main_port',
                    'label' => 'Mail Port',
                    'class' => 'form-control',
                    'placeholder' => '587',
                    'rules' => '',
                ],
                [
                    'type' => 'text',
                    'data' => 'string',
                    'name' => 'mail_username',
                    'label' => 'SMTP Mail Username',
                    'class' => 'form-control',
                    'rules' => '',
                ],
                [
                    'type' => 'text',
                    'data' => 'string',
                    'name' => 'mail_password',
                    'label' => 'SMTP Mail Password',
                    'class' => 'form-control',
                    'rules' => '',
                ],
                [
                    'type' => 'email',
                    'name' => 'from_email',
                    'label' => 'From Email',
                    'class' => 'form-control',
                    'rules' => 'required|email',
                    'placeholder' => 'no-reply@domain.com',
                    'hint' => 'All the system generated email will be sent from this address.'

                ],
                [
                    'type' => 'text',
                    'name' => 'from_name',
                    'class' => 'form-control',
                    'label' => 'Email from Name',
                    'placeholder' => 'Email from Name',
                    'rules' => 'required|min:2|max:50'
                ],
            ]
        ],
    ],
];
