<?php

namespace App\Mail;

use App\Models\Newsletter;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use App\Models\NewsletterUser;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendNewsLetter extends Mailable
{
    use Queueable, SerializesModels;
    public $newsletter;
    public $notifiable;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(NewsLetter $newsletter, NewsletterUser $notifiable)
    {
        $this->newsletter = $newsletter;
        $this->notifiable = $notifiable;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'NewsLetter',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            markdown: 'emails.sendNewsLetter',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
