<?php
require __DIR__ . '/vendor/autoload.php';
use Goutte\Client;
use Stichoza\Google\GoogleTranslate;

require("src/App/VBlog.php");
use App\VBlog;

require("src/App/Foo.php");
use App\Foo;

$client = new Client();

$vblog = new VBlog($client);
$vblog->getPostNames();

Foo::bar();

$tr = new GoogleTranslate("en", "es");
echo $tr->translate("Hello World!") . "\n";