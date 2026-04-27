<?php

namespace core;

class Container {
    public function resolve($class) {
        return new $class();
    }
}