# SugarServiceProvider

Provides integration with [SugarCRM REST Client for SugarCRM 7](https://github.com/spinegar/sugarcrm7-api-wrapper-class) for the
[Pimple](https://pimple.symfony.com/) DI container.

## Parameters

*  **sugar.url**: Extension for template and partials files. Defaults to `mustache`.
*  **sugar.username**: An array of options to be passed to the `Mustache_Engine` constructor.
*  **sugar.password**: Path to directory containing the templates.

## Services

*  **sugar**: The Mustache instance.

## Usage Example

### Registering with the application

    $container->register(new \Concedra\Pimple\SugarServiceProvider());

## See also

*  [SugarCRM REST Client for SugarCRM 7](https://github.com/spinegar/sugarcrm7-api-wrapper-class)
