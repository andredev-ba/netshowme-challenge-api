<?php 

namespace Domain\UploadFile\Actions;

use Domain\UploadFile\DataTransferObject\UploadFileData;

final class UploadFileAction {
  public function __invoke($file): String {
    $path = $file->store('contacts');
    return $path;
  }
}