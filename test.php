<?php
use onepersongroup\hw4\controllers;
require_once(dirname(__FILE__) . '/vendor/simpletest/simpletest/autorun.php');
require_once 'vendor/autoload.php';

class checkFormCoordinates extends UnitTestCase {
    function teststandard() {
        $testfile = new onepersongroup\hw4\controllers\landcontroller;
        $this->assertTrue($testfile->checkForm("title","B,1,1,1,1,1"));
    }
    function testMissingCoordinate() {
        $testfile = new onepersongroup\hw4\controllers\landcontroller;
        $this->assertTrue($testfile->checkForm("title","B,1,1,,1,1"));
    }
    function testMissingFirst() {
        $testfile = new onepersongroup\hw4\controllers\landcontroller;
        $this->assertFalse($testfile->checkForm("title",",1,1,1,1"));
    }
    function testNewlineChar() {
        $testfile = new onepersongroup\hw4\controllers\landcontroller;
        $this->assertFalse($testfile->checkForm("title","E,1,1,1,1,1\n,1,1,1,1,1"));
    }
    function testZeroCoordinates() {
        $testfile = new onepersongroup\hw4\controllers\landcontroller;
        $this->assertFalse($testfile->checkForm("title","B"));
    }
    function testSixCoordinates() {
        $testfile = new onepersongroup\hw4\controllers\landcontroller;
        $this->assertFalse($testfile->checkForm("title","B,1,1,1,1,1,1"));
    }
}

class checkFormLengths extends UnitTestCase {
    function test80characters() {
        $testfile = new onepersongroup\hw4\controllers\landcontroller;
        $this->assertTrue($testfile->checkForm("title","BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB,1"));
    }
    function test81characters() {
        $testfile = new onepersongroup\hw4\controllers\landcontroller;
        $this->assertFalse($testfile->checkForm("title","BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB,11"));
    }
    function test50lines() {
        $testfile = new onepersongroup\hw4\controllers\landcontroller;
        $this->assertTrue($testfile->checkForm("title","B,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1"));
    }
    function test51lines() {
        $testfile = new onepersongroup\hw4\controllers\landcontroller;
        $this->assertFalse($testfile->checkForm("title","B,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1\nB,1,1,1,1,1"));
    }
}
?>
