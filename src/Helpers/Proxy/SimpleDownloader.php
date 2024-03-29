<?php

namespace App\Helpers\Proxy;

class SimpleDownloader implements Downloader
{
    public function download(string $url): string
    {
        echo " Downloading a file from the Internet... ";
        $result = file_get_contents($url);
        echo " Downloaded bytes: " . strlen($result) . "\n";

        return $result;
    }
}