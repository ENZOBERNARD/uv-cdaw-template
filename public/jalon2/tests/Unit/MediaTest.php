<?php

namespace Tests\Unit;

use App\Models\Medias;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;

use Tests\TestCase;
use Illuminate\Http\Request;

class MediaTest extends TestCase
{
    /**
     * A basic test example.
     *
     * 
     */
    public function test_media()
    {   
        $media = Medias::where('ID', 1)->get();
        echo $media;
        $this->assertEquals('saepe',$media[0]['TITRE']);
    }
}
