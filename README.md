## Installation

You can install the package via composer:

```bash
composer require mach3builders/vuetrans
```

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
import Trans from './vendor/vuetrans/trans'
window.vue = require('Vue')
Vue.use(Trans)
```

## Usage

When you are done with the installation steps youll now be able to use the following helper. Inside your vue templates
``` js
{{ trans('auth.failed') }}
```

If you have a translation with an attribute, you can send this as a param. Note since it is in js youll need to send an object.
``` js
{{ trans('auth.throttle', {seconds: 3}) }}
```

Props return by your vue component can also be used with the translation. like computed, watched and return data. If the name of the property matches the name of the translation attribute than soly passing it wil sufy.

in example
``` php
User.php
'welcome' => 'Welcome :name',
```
``` js
{{ trans('user.welcome', {name}) }} OR
{{ trans('user.welcome', {name: user.name}) }}
```

For developing porpuses make sure your cache driver is on array mode.

``` env
CACHE_DRIVER=array
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
