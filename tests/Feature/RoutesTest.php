<?php

test('example', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});


test('test-basic-routes', function() {
    $response = $this->get('/');

    $response->assertViewIs('welcome');

    //2.példa
    $response=$this->get('/contact');
    $response->assertStatus(200);
    //assertOk()

    //3.pelda
    $response=$this->get('/conta');
    $response->assertNotFound();

    //4.példa
    $response=$this->get("/pass-array");
    $response->assertOk();
    $response->assertSee("piacra");
    //5.példa
    $response=$this->get("/request-test?title=EzEgyCim");
    $response->assertSee("EzEgyCim");
});