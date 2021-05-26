<?php 

namespace Domain\Contact\Actions;
use Domain\Contact\DataTransferObject\ContactData;
use Domain\Contact\Models\Contact;
use Exception;

final class CreateContactAction {
  public function __invoke(ContactData $contactData, $uploadFileAction, $sendEmailAction): Contact {
    try {

      //upload file and return string path
      $path = $uploadFileAction($contactData->file);
      
      $contact = Contact::create([
        'name' => $contactData->name,
        'email' => $contactData->email,
        'phone' => $contactData->phone,
        'message' => $contactData->message,
        'file_path' => $path,
        'client_ip' => $contactData->client_ip
      ]);

      //send email
      $sendEmailAction($contact);

      return $contact;

    } catch (Exception $err) {
      throw $err;
    }
  }
}