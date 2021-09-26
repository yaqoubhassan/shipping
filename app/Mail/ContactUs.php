<?php

namespace App\Mail;

use Log;
use Exception;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactUs extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $detials;

    public function __construct($contact)
    {
        $this->details = $contact;
        // Log::info('details', [$this->details['name']]);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        try{
            return $this->from($this->details['email'])
                ->markdown('emails.contactus')
                ->subject('Someone contacted you')
                ->with([
                    'message' => $this->details['message'],
                    'name' => $this->details['name'],
                ]);
        } catch(Swift_TransportException $e){
            return 'error';
        } catch (\Throwable $e) {
            return 'error';
        }
    }
}
