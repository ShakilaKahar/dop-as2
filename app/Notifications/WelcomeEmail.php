<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\HtmlString;

class WelcomeEmail extends Notification
{
    use Queueable;

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        $url = 'https://rakshanda.duckdns.org/';  // Your website's URL

        return (new MailMessage)
                    ->subject('Welcome to Our Service!')
                    ->greeting('Hello ' . $notifiable->name . '!')
                    ->line('Thank you for registering with us. We are glad to have you onboard.')
                    ->action('Visit Us', $url)
                    ->line('Feel free to explore our services and let us know how we can assist you further.')
                    ->salutation(new HtmlString('Best Regards,<br><img src="https://rakshanda.duckdns.org/images/pblogo.png" alt="PB Logo" style="width:100px;"/>'));
    }
}
