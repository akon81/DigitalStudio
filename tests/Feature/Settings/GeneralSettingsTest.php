<?php

use App\Settings\GeneralSettings;

test('general settings default values are present', function () {
    $settings = app(GeneralSettings::class);

    expect(is_string($settings->email))->toBeTrue();
    expect(is_string($settings->phone))->toBeTrue();
    expect(is_string($settings->facebook))->toBeTrue();
    expect(is_string($settings->instagram))->toBeTrue();
    expect(is_int($settings->homepage_projects_count))->toBeTrue();
});

test('general settings can be updated in memory', function () {
    $settings = app(GeneralSettings::class);

    $settings->email = 'ci-test@example.com';
    $settings->phone = '+123456789';
    $settings->homepage_projects_count = 7;

    expect($settings->email)->toEqual('ci-test@example.com');
    expect($settings->phone)->toEqual('+123456789');
    expect($settings->homepage_projects_count)->toEqual(7);
});
