<?php

declare(strict_types=1);

use function Pest\Laravel\get;

test('root path with slash does not redirect', function () {
    $response = get('/');

    $response->assertSuccessful();
});

test('URLs without trailing slash work normally', function () {
    $response = get('/portfolio');

    $response->assertSuccessful();
});

test('canonical meta tag is present on homepage', function () {
    $response = get('/');

    $response->assertSee('<link rel="canonical" href="', false);
});

test('og:url matches canonical url', function () {
    $response = get('/');

    $content = $response->getContent();

    // Extract canonical URL
    preg_match('/<link rel="canonical" href="([^"]+)"/', $content, $canonicalMatches);
    preg_match('/<meta property="og:url" content="([^"]+)"/', $content, $ogMatches);

    expect($canonicalMatches)->toHaveCount(2);
    expect($ogMatches)->toHaveCount(2);

    $canonicalUrl = $canonicalMatches[1];
    $ogUrl = $ogMatches[1];

    expect($canonicalUrl)->toBe($ogUrl);
    expect($canonicalUrl)->not->toEndWith('/');
});
