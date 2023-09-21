<?php

class kdrama {
    public $judul;
    public $genre;
    public $episode;
    public function __construct($judul, $genre, $episode){
        $this->judul = $judul;
        $this->genre = $genre;
        $this->episode = $episode;
    }
    public function showKdrama(){
        return "judul drama yang sedang ditonton adalah $this->judul
        drama nya bergenre $this->genre dan punya $this->episode eps";
    }
}

$nama = new kdrama("2521", "sad ending", 16);
print $nama->showKdrama();
?>