<?php

namespace App\Jobs;

use App\Mail\QuotationMail;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class SendQuotationEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $data;
    protected $pdf_output;
    protected $filePath;

    public function __construct($data, $pdf_output, $filePath)
    {
        $this->data = $data;
        $this->pdf_output = $pdf_output;
        $this->filePath = $filePath;
    }

    public function handle()
    {
        Storage::put($this->filePath, $this->pdf_output);

        if ($this->data['quotation']->attachment == '1') {
            Mail::to($this->data['quotation']->receiver_email)
                ->cc(explode(',', $this->data['quotation']->receiver_cc_email))
                ->send((new QuotationMail($this->data))->attachData($this->pdf_output, "Quotation-Ngenit-{$this->data['rfq_code']}.pdf"));
        } else {
            Mail::to($this->data['quotation']->receiver_email)
                ->cc(explode(',', $this->data['quotation']->receiver_cc_email))
                ->send(new QuotationMail($this->data));
        }
    }
}
