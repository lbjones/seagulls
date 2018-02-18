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
    private $target_dir = '';

public function setUpFiles($files)
{
    $this->target_dir = storage_path() . '/temp';
    Storage::deleteDirectory($this->target_dir);
    Storage::makeDirectory($this->target_dir);

    foreach ($files as $file) {
        Storage::put($this->target_dir . "/" . $file, '');
    }
}

    public function testGetFiles_2()
    {
        $this->setUpFiles(["file2.jpg","file1.jpg"]);

        $controller = new \App\Http\Controllers\PhotoController();
        $returned_files = $controller->get_files($this->target_dir);

        $this->assertEquals(2, count($returned_files));
    }

    public function testSort()
    {
        $this->setUpFiles(["file2.jpg","file1.jpg"]);

        $controller = new \App\Http\Controllers\PhotoController();
        $returned_files = $controller->get_files($this->target_dir);
        
        $this->assertEquals('file1.jpg', basename($returned_files[0]));
        $this->assertEquals('file2.jpg', basename($returned_files[1]));
    
    }

    public function testGetImageFiles_2()
    {
        $this->setUpFiles(["file1.jpg","file2.jpg","weirname.foo"]);

        $controller = new \App\Http\Controllers\PhotoController();
        $returned_files = $controller->get_files($this->target_dir);
        
        $this->assertEquals('file1.jpg', basename($returned_files[0]));
        $this->assertEquals('file2.jpg', basename($returned_files[1]));
        $this->assertEquals(2, count($returned_files));
    }
}
