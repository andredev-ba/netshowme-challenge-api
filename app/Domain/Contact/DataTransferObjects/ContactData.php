<?php

namespace Domain\Contact\DataTransferObject;

use Spatie\DataTransferObject\DataTransferObject;

class ContactData extends DataTransferObject {
  /** @var string */
  public $name;

  /** @var string */
  public $email;

  /** @var string */
  public $phone;

  /** @var string */
  public $message;

  /** @var string */
  public $file_path;

  public static function fromRequest(ContactRequest $contactRequest): ContactData {
    return new Self([
      'name' => $contactRequest['name'],
      'email' => $contactRequest['email'],
      'phone' => $contactRequest['phone'],
      'message' => $contactRequest['message'],
      'file_path' => $contactRequest['file_path']
    ]);
  }
}