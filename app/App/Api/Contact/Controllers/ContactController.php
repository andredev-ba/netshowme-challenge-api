<?php

namespace App\Api\Contact\Controllers;

use Domain\Contact\Models\Contact;
use App\Core\Http\Controllers\Controller;
use App\Api\Contact\Requests\ContactRequest;
use Domain\Contact\DataTransferObject\ContactData;
use Domain\Contact\Actions\CreateContactAction;
use Domain\UploadFile\Actions\UploadFileAction;
use Domain\Email\Actions\SendEmailAction;
use Domain\Contact\Actions\GetContactAction;

class ContactController extends Controller {
  
  public function index(GetContactAction $getContactAction) {
    return $getContactAction();
  }

  public function store (
    ContactRequest $request, 
    CreateContactAction $createContactAction,
    UploadFileAction $uploadFileAction,
    SendEMailAction $sendEmailAction
  ) {
    $data = ContactData::fromRequest($request);
    $response = $createContactAction($data, $uploadFileAction, $sendEmailAction);
    return $response;
  }
}