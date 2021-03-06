<?php

namespace Spatie\YamlFrontMatter;

use Illuminate\Support\Arr;

class Document
{
    protected $matter;
    protected $body;

    public function __construct(array $matter, string $body)
    {
        $this->matter = $matter;
        $this->body = $body;
    }

    public function matter(string $key = null, $default = null)
    {
        if ($key) {
            return Arr::get($this->matter, $key, $default);
        }

        return $this->matter;
    }

    public function body() : string
    {
        return $this->body;
    }
}
