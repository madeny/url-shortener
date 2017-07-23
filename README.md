# Laravel 5 url shortener

[![Latest Version on Packagist](https://img.shields.io/packagist/v/madeny/url-shortener.svg?style=flat-square)](https://packagist.org/packages/madeny/url-shortener)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/madeny/url-shortener/master.svg?style=flat-square)](https://travis-ci.org/madeny/url-shortener)
[![Total Downloads](https://img.shields.io/packagist/dt/madeny/url-shortener.svg?style=flat-square)](https://packagist.org/packages/madeny/url-shortener)

## Introduction

URL shortener package that gives a convenient Laravel Facade for [mremi/UrlShortener](https://github.com/mremi/UrlShortener)

Madeny always learning . [madeny.com](http://madeny.com)

## Laravel compatibility

 Laravel  | translation
:---------|:----------
 5.5.x    | 5.5.dev

## Installation and Setup

Require through composer

    composer require madeny/url-shortener

Or manually edit your composer.json file:

    "require": {
        "madeny/url-shortener": "1.0"
    }
Config: .env to have this
for bitly driver:

URL_SHORTENER_BITLY_USERNAME=username
URL_SHORTENER_BITLY_PASSWORD=password

for google driver:

URL_SHORTENER_GOOGLE_API_KEY=apikey



## Usage

### Shorten a url

    ```php
    \UrlShortener::shorten('http://google.com'); // Uses default driver as per config settings
    \UrlShortener::driver('bitly')->shorten('http://google.com');
    ```

### Expand a url

    ```php
    \UrlShortener::expand('http://google.com'); // Uses default driver as per config settings
    \UrlShortener::driver('bitly')->expand('http://google.com');
    ```
