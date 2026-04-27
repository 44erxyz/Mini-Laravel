<?php

namespace core;

class Middleware {
    public static function handle($next) {
        return $next();
    }
}