<?php

use Illuminate\Support\Facades\Session;

describe('escape like query', function () {
    it('can escaped value', function (string $value, string $expected) {
        expect(escape_like_query($value))->toBe($expected);
    })->with([
        ['%', '\\%'],
        ['_', '\\_'],
        ['\\', '\\\\'],
        ['\\%', '\\\\\\%'],
        ['\\_', '\\\\\\_'],
        ['\\a', '\\\\a'],
        ['a\\', 'a\\\\'],
        ['a\\b', 'a\\\\b'],
        ['a%b', 'a\\%b'],
        ['a_b', 'a\\_b'],
    ]);
});
