<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Domain\Contact\Models\Contact;

class ContactTest extends TestCase
{
    /** @test */
    public function check_if_contact_columns_is_correct()
    {
        $contact = new Contact();

        $expected = [
          'name',
          'email',
          'phone',
          'message',
          'file_path',
          'client_ip'
        ];

        $arrayCompared = array_diff($expected, $contact->getFillable());

        $this->assertEquals(0, count($arrayCompared));
    }
}
