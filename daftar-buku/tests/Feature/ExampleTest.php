<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    public function test_root_redirects_to_book_list(): void
    {
        $this->get('/')
            ->assertRedirect('/buku');
    }

    public function test_book_list_can_be_opened(): void
    {
        $this->withoutVite();

        $this->get('/buku')
            ->assertOk();
    }
}
