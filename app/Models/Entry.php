<?php


namespace App\Models;

use Illuminate\Support\Collection;

class Entry
{
    public $id;
    public $author;
    public $blurb;
    public $date;
    public $headline;
    public $image;
    public $para;
    public $url;

    /**
     * Entry constructor.
     * @param $id
     * @param $author
     * @param $blurb
     * @param $date
     * @param $headline
     * @param $image
     * @param $para
     * @param $url
     */
    public function __construct($id, $author, $blurb, $date, $headline, $image, $para, $url)
    {
        $this->id = $id;
        $this->author = $author;
        $this->blurb = $blurb;
        $this->date = $date;
        $this->headline = $headline;
        $this->image = $image;
        $this->para = $para;
        $this->url = $url;
    }

    public static function allEntries() {

    }

    public static function singleEntry($id) {
        return static::allEntries()->firstWhere('id', $id);
    }

}

