<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Storage;

class GetFilesTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testGetFiles_2()
    {
        $target_dir = storage_path() . '/temp';
        Storage::makeDirectory($target_dir);

        Storage::put($target_dir . '/file1.jpg', '');
        Storage::put($target_dir . '/file2.jpg', '');

        $controller = new \App\Http\Controllers\PhotoController();
        $returned_files = $controller->get_files($target_dir);

        $this->assertEquals(2, count($returned_files));
    }

    public function testSort()
    {
        $target_dir = storage_path() . '/temp';
        Storage::makeDirectory($target_dir);

        Storage::put($target_dir . '/file2.jpg', '');
        Storage::put($target_dir . '/file1.jpg', '');

        $controller = new \App\Http\Controllers\PhotoController();
        $returned_files = $controller->get_files($target_dir);

        $this->assertEquals('file1.jpg', basename($returned_files[0]));
        $this->assertEquals('file2.jpg', basename($returned_files[1]));
    
    }
}
