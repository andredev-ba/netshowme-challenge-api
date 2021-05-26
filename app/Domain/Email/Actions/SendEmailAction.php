<?php 

namespace Domain\Email\Actions;
use Exception;
use Illuminate\Support\Facades\Mail;
use Domain\Email\Contacts\SendEmailContact;

final class SendEmailAction {
  public function __invoke($contact): void {
    try {
      //send email
      Mail::to(config('config.toEmail'))->send(new SendEmailContact($contact));
      
    } catch (Exception $err) {
      throw $err;
    }
  }
}
