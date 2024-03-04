<?php

namespace Buffer;

interface BufferInterface
{
    public function setup(BufferStorageInterface $storage);
    public function save(MessageInterface $message):bool;
    public function read():MessageInterface;

}