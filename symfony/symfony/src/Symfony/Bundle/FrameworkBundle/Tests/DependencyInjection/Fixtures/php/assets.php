<?php

$container->loadFromExtension('framework', array(
    'assets' => array(
        'version' => 'SomeVersionScheme',
        'base_urls' => 'http://cdn.example.com',
        'version_format' => '%%s?version=%%s',
        'packages' => array(
            'images_path' => array(
                'base_path' => '/foo',
            ),
            'images' => array(
                'version' => '1.0.0',
                'base_urls' => array('http://images1.example.com', 'http://images2.example.com'),
            ),
            'foo' => array(
                'version' => '1.0.0',
                'version_format' => '%%s-%%s',
            ),
            'bar' => array(
                'base_urls' => array('https://bar2.example.com'),
            ),
            'bar_null_version' => array(
                'version' => null,
                'base_urls' => array('https://bar3.example.com'),
            ),
        ),
    ),
));
