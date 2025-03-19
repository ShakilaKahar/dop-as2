<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestEmail extends Mailable
{
    use Queueable, SerializesModels;

    public function build()
    {
        return $this->from('23ftt1095@student.pb.edu.bn', 'Laravel Application')
                    ->subject('Test Email from Laravel')
                    ->view('emails.test');
    }
}
