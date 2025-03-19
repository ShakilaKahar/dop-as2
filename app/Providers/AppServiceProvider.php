protected $listen = [
    'Illuminate\Auth\Events\Registered' => [
        'App\Listeners\SendWelcomeEmail',
    ],
];
