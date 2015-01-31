<?php
require __DIR__ . '/vendor/autoload.php';
use Goutte\Client;
use Stichoza\Google\GoogleTranslate;

use App\VBlog;
use App\Foo;

$client = new Client();

$vblog = new VBlog($client);
$vblog->getPostNames();

Foo::bar();

$tr = new GoogleTranslate("en", "es");
echo $tr->translate("Hello World!") . "\n";