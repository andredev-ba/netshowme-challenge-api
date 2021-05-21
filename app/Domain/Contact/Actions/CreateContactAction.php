<?php 

namespace Domain\Contact\Actions;

final class CreateContactAction {
  public function __invoke(ContactData $contactData): Contact {
    return Contact::create([
      'name' => $contactData->name,
      'email' => $contactData->email,
      'phone' => $contactData->phone,
      'message' => $contactData->message,
      'file_path' => $contactData->file_path
    ]);
  }
}