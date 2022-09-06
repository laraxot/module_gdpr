<?php

declare(strict_types=1);

namespace Modules\GDPR\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DataUpdateRequestMail extends Mailable {
    use Queueable;
    use SerializesModels;

    public $dataUpdateRequest;

    public function __construct($dataUpdateRequest) {
        $this->dataUpdateRequest = $dataUpdateRequest;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build() {
        return $this->to($this->dataUpdateRequest['email'])
            ->subject('New Request For Data Update')
            ->view('gdpr::emails.customers.new-data-update-request')->with($this->dataUpdateRequest);
    }
}
