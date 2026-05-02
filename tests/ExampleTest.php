<?php


use AbdulqdosAlabinie\WeightConversions\Weight;

it('can test', function () {
    expect(true)->toBeTrue();
});

it('can convert kilograms to pounds', function () {
    $pounds = Weight::kilograms(100)->toPounds();
    expect($pounds)->toEqual(220.46);
});
