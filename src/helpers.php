<?php

if (!function_exists('template_path')) {
    function template_path($path = ''): string
    {
        return base_path(trim('stubs/' . $path, '/'));
    }
}

if (!function_exists('resolveStubPath')) {
    function resolveStubPath($stub): string
    {
        return file_exists(
            $customPath = base_path(trim($stub, '/'))
        )
            ? $customPath
            : dirname(__DIR__) . '/stubs/' . $stub;
    }
}
