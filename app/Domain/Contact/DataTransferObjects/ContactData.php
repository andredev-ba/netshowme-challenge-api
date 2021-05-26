<?php

namespace Domain\Contact\DataTransferObject;

use Spatie\DataTransferObject\DataTransferObject;
use App\api\Contact\Requests\ContactRequest;

class ContactData extends DataTransferObject {
  /** @var string */
  public $name;

  /** @var string */
  public $email;

  /** @var string */
  public $phone;

  /** @var string */
  public $message;

  /** @var object */
  public $file;

  /** @var string */
  public $client_ip;

  public static function fromRequest(ContactRequest $contactRequest): ContactData {
    return new Self([
      'name' => $contactRequest->name,
      'email' => $contactRequest->email,
      'phone' => $contactRequest->phone,
      'message' => $contactRequest->message,
      'file' => $contactRequest->file('file'),
      'client_ip' => $contactRequest->ip()
    ]);
  }
}