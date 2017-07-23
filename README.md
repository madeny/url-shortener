# Laravel 5.5 url shortener

## Smattering

URL shortener package with Laravel Package Auto-Discovery.

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
