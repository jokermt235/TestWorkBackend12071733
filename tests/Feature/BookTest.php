<?php

class BookTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testGetBook()
    {
        $this->json('GET', '/api/v1/book', ['pattern' => 'Book 1'])
             ->seeJson([
                 'name' => 'Book 1',
             ]);
    }

    public function testCreateBook()
    {
        $this->json('POST', '/api/v1/book', ['name' => 'Book 1','author_id'=>1,'page_count'=>265])
             ->seeJson([
                 'name' => 'Book 1',
             ]);
    }
    
    public function testUpdateBook()
    {
        $this->json('PUT', '/api/v1/book', ['id'=>1,'name' => 'Book 1.2','author_id'=>1,'page_count'=>265])
             ->seeJson([
                 'id' => 1,
             ]);
    }

}
