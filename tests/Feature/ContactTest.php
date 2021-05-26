<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;
use Illuminate\Http\UploadedFile;
use Illuminate\Testing\Fluent\AssertableJson;

class ContactTest extends TestCase
{
  use RefreshDatabase;
  /** @test */
  public function check_if_create_contact_is_work()
  {

    $file = UploadedFile::fake()->create(
      'document.pdf', 300, 'application/pdf'
    );

    $data = [
      'name' => 'Any Name',
      'email' => 'any@email.com',
      'phone' => '(77) 3331-1210',
      'message' => 'Any Message',
      'file' => $file
    ];

    $response = $this->json('POST', '/api/contact', $data);

    $contact = $response->getOriginalContent();
    Storage::delete($contact->file_path);

    $response
      ->assertStatus(201)
      ->assertJsonPath('email', 'any@email.com')
      ->assertJsonPath('name', 'Any Name')
      ->assertJsonPath('phone', '(77) 3331-1210')
      ->assertJsonPath('message', 'Any Message');
  }
}
