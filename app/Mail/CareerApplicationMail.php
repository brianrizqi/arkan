<?php

namespace App\Mail;

use App\Models\CareerApplication;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CareerApplicationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $application;

    /**
     * Create a new message instance.
     */
    public function __construct(CareerApplication $application)
    {
        $this->application = $application;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        $subject = $this->application->career 
            ? 'New Job Application: ' . $this->application->career->title 
            : 'New Speculative Application';

        return new Envelope(
            subject: $subject . ' - ' . $this->application->first_name . ' ' . $this->application->last_name,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'emails.career_application',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [
            Attachment::fromPath(storage_path('app/public/' . $this->application->cv_path))
                ->as('CV_' . $this->application->first_name . '_' . $this->application->last_name . '.' . pathinfo($this->application->cv_path, PATHINFO_EXTENSION))
                ->withMime('application/pdf'),
        ];
    }
}
