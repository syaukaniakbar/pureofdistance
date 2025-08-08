<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class RegistrationSuccess extends Mailable
{
    use Queueable, SerializesModels;

    public $nama;
    public $no_hp;
    public $jenis_kelamin;

    /**
     * Create a new message instance.
     */
    public function __construct($nama, $no_hp, $jenis_kelamin)
    {
        $this->nama = $nama;
        $this->no_hp = $no_hp;
        $this->jenis_kelamin = $jenis_kelamin;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Registration Success',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.registration-success',
            with: [
                'nama' => $this->nama,
                'no_hp' => $this->no_hp,
                'jenis_kelamin' => $this->jenis_kelamin,
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
