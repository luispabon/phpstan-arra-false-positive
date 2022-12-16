<?php

class Foo {
    private const BAR = "5";

    private const FOOBAR = [
        self::BAR => "yes",
    ];

    /**
     * @return array<string, string>
     */
    public function getFoobar(): array
    {
        return self::FOOBAR;
    }
}
