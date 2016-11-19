<?php
use onepersongroup\hw4\controllers;
require_once(dirname(__FILE__) . '/vendor/simpletest/simpletest/autorun.php');
require_once 'vendor/autoload.php';

class checkFormPass extends UnitTestCase {
    function teststandard() {
        $testfile = new onepersongroup\hw4\controllers\landcontroller;
        $this->assertTrue($testfile->checkForm("title","B,1,1,1,1,1"));
    }
    function testmissingcoordinate() {
        $testfile = new onepersongroup\hw4\controllers\landcontroller;
        $this->assertTrue($testfile->checkForm("title","B,1,1,,1,1"));
    }
}

class checkFormFail extends UnitTestCase {
    function testmissingfirst() {
        $testfile = new onepersongroup\hw4\controllers\landcontroller;
        $this->assertFalse($testfile->checkForm("title",",1,1,1,1"));
    }
    function testnewlinechar() {
        $testfile = new onepersongroup\hw4\controllers\landcontroller;
        $this->assertFalse($testfile->checkForm("title","E,1,1,1,1,1 \n,1,1,1,1,1"));
    }
}
?>
