<?php
date_default_timezone_set('America/Detroit');
$site = (object)[
 'url' => "xinniw.net",
 'name' => "xinniw.net",
 'description' => "The personal website of David Minnix. David is an artist, software engineer, and musician who makes noise and tools for making noise.",
 'dateModified' => date('m/d/Y'),
 'index' => "about",
 'booking_message' => 'for booking contact: minnix.xinniw@gmail.com',
 'data' => [],
 'posts' => [],
 'pages' => [],
];
$files = scandir('pages');


$it = new DirectoryIterator('./data');

function loadData($fileinfo){
    global $site;

    $filepath = './data/' . $fileinfo->getFilename();
    ob_start();
    include $filepath;
    $capture = ob_get_clean();
}

foreach ($it as $fileinfo) {
    if (!$fileinfo->isDot()) {
        loadData($fileinfo);
    }
}

$it = new DirectoryIterator('./pages');

function loadTemplate($fileinfo){
    global $site;

    $content = function(){};
    $filepath = './pages/' . $fileinfo->getFilename();
    ob_start();
    include $filepath;
    $capture = ob_get_clean();


    $page = new stdClass();
    $page->title = $title;
    $page->path = '/' . $title;
    $page->content = clone $content;

    array_push($site->pages, clone $page);

}

foreach ($it as $fileinfo) {
    if (!$fileinfo->isDot()) {
        loadTemplate($fileinfo);
    }
}

$it = new DirectoryIterator('./posts/');

foreach($it as $fileinfo){
    if(!$fileinfo->isDot() && !$fileinfo->isDir()){
        //print $fileinfo->getFilename()."\n";
        ob_start();
        include $fileinfo->getPath().'/'.$fileinfo->getFilename();
        $content = ob_get_clean();

        $postDate = explode("-",$fileinfo->getBasename());
        $postDate = $postDate[1].'/'.$postDate[2].'/'.$postDate[0];
        $postName = $fileinfo->getBasename(".php");

        $post = (object)[
            'title'=>$postName ,
            'path' => '/blog/'.$postName.".html",
            'date' => $postDate,
            'content' => function()use($content){echo $content;},
        ];

        array_push($site->posts, clone $post);

    }
}

arsort($site->posts);

//print_r($site->pages);

foreach($site->pages as $page){
   // $page = clone $p;
    $filedir = "./bin/" . $page->title;
    $filename = $filedir . "/index.html";
    ob_start();
    include 'templates/page.php';
    $content = ob_get_clean();

    if (!file_exists($filedir)) {mkdir($filedir);}

    file_put_contents($filename, $content);
    if($p->title == $site->index){
        file_put_contents("./bin/index.html", $content);
    }
}

include 'copyr.php';
copyr('./assets', './bin/assets');



$it = new DirectoryIterator('./garden');

foreach($it as $fileinfo){
    if(!$fileinfo->isDot() && !$fileinfo->isDir()){
        //print $fileinfo->getFilename()."\n";
        ob_start();
        include $fileinfo->getPath().'/'.$fileinfo->getFilename();
        $content = ob_get_clean();

        $page = (object)[
            'title'=> $fileinfo->getBasename(),
            'path' => 'garden/'.$fileinfo->getFilename(),
            'content' => function()use($content){echo $content;},
        ];
        ob_start();
        include 'templates/page.php';
        $parsed = ob_get_clean();
        file_put_contents('./bin/garden/'.$fileinfo->getFilename(), $parsed);

    }
}

if (!file_exists("./bin/blog/")) {mkdir("./bin/blog/");}

foreach($site->posts as $post){
    $page = $post;
    ob_start();
    include 'templates/post.php';
    $parsed = ob_get_clean();
    file_put_contents('./bin'.$post->path, $parsed);


}




?>
