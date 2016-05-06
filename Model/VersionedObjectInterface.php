<?php

namespace Xoptov\VersionerBundle\Model;

interface VersionedObjectInterface
{
    /**
     * @return string
     */
    public function getChecksum();
}