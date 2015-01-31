<?php
namespace App;

class VBlog
{
    var $client;

    public function __construct ($client)
    {
        $this->client = $client;
    }

    public function getPostNames()
    {
        $crawler = $this->client->request('GET', 'http://victorbarcelo.net/');
        $crawler->filter('.post_title')->each(
            function ($node) {
                print $node->text() . "\n";
            }
        );
    }
}