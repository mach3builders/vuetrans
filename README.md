## Installation

You can install the package via composer:

```bash
composer require mach3builders/vuetrans
```

## Usage

After requiring the package, publish the assets.

``` php
php artisan vendor:publish --tag=assets
```
After Publishing the assets add the following script tag to your head

``` html
<script src="{{ route('mach3builders.vuetrans') }}"></script>
```

After adding the script tag, import the vue plugin inside your app.js

``` js
import Trans from './vendor/vuetrans/trans';
Vue.use(Trans);
```


### Testing

``` bash
composer test
```

## Credits

- [Jasper Helmich](https://github.com/mach3builders)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
