<?php

namespace Jackalope\Transport\Fs\Filesystem;

class Filesystem implements AdapterInterface
{
    protected $adapter;

    public function __construct(AdapterInterface $adapter)
    {
        $this->adapter = $adapter;
    }

    public function write($path, $contents)
    {
        $this->adapter->write($path, $contents);
    }

    public function mkdir($path)
    {
        $this->adapter->mkdir($path);
    }

    public function read($path)
    {
        return $this->adapter->read($path);
    }

    public function remove($path, $recursive = false)
    {
        $this->adapter->remove($path, $recursive);
    }

    public function exists($path)
    {
        return $this->adapter->exists($path);
    }

    public function ls($path)
    {
        return $this->adapter->ls($path);
    }
}
