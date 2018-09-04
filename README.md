# TinyPNG bundle for Symfony

**This bundle is abandoned. Use this [TinyPNG bundle](https://github.com/Setono/TinyPngBundle) instead**

The TinyPNG bundle adds a very simple configuration option in `config.yml` to configure the TinyPNG API.

## Usage

Add bundle using composer:

```
composer require loevgaard/tinypng-bundle
```

Add configuration to `config.yml`:

```
tinypng:
    api_key: [INSERT API KEY]
```

Add bundle to `AppKernel.php`:

```php
$bundles = [
    ...
    new Tinypng\Bundle\TinypngBundle(),
    ...
];
```

Now you can do

```php
Tinify\fromFile("unoptimized.png")->toFile("optimized.png");
```

directly without setting the API key.

For usage of the TinyPNG API see [https://github.com/tinify/tinify-php](https://github.com/tinify/tinify-php).
