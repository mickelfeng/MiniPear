<?php

class UtilsTest extends PHPUnit_Framework_TestCase
{
    function test()
    {
        \MiniPear\Utils::mirror_file('http://pear.php.net/channel.xml','test');
        path_ok('test/channel.xml');
        unlink('test/channel.xml');

        \MiniPear\Utils::mirror_file('http://pear.php.net/rest/p/packages.xml','test');
        path_ok('test/rest/p/packages.xml');
        unlink('test/rest/p/packages.xml');
    }
}


