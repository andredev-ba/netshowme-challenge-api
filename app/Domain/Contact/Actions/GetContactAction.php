<?php 

namespace Domain\Contact\Actions;
use Domain\Contact\Models\Contact;

final class GetContactAction {
  public function __invoke() {
      $contacts = Contact::all();
      return $contacts;
  }
}