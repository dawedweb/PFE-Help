<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class MessageTeacher extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public $teacher;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    
    public function __construct($teacher)
    {
        $this->teacher = $teacher;
    }

    public function build()
    {
        return $this->from("amine@gmail.com") // L'expéditeur
                    ->subject("Message via le SMTP Google") // Le sujet
                    ->view(''); // La vue
    }


    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Message Teacher',
        );
    }

    /**
     * Get the message content definition.
     */
  
     public function content()
     {
         return new Content(
             markdown: '',
             with:[
                 'teacher' => $this->teacher,
             ],
         );
     }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
