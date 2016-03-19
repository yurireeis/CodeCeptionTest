<?php

namespace PhantomInstaller;

class PhantomBinary
{
    const BIN = '/home/yreis/socialbase/CodeCeptionTest/bin/phantomjs';
    const DIR = '/home/yreis/socialbase/CodeCeptionTest/bin';

    public static function getBin() {
        return self::BIN;
    }

    public static function getDir() {
        return self::DIR;
    }
}
