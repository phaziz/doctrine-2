<?php
namespace MyProject\Proxies;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 **/
class UserProxy extends \User implements \Doctrine\ORM\Proxy\Proxy
{
    // .. lazy load code here

    public function addReportedBug($bug)
    {
        $this->_load();
        return parent::addReportedBug($bug);
    }

    public function assignedToBug($bug)
    {
        $this->_load();
        return parent::assignedToBug($bug);
    }
}