# SugarServiceProvider

Provides integration with [SugarCRM REST Client for SugarCRM 7](https://github.com/spinegar/sugarcrm7-api-wrapper-class) for the
[Pimple](https://pimple.symfony.com/) DI container.

## Parameters

*  **sugar.url**: Host URL to your sugar instance.
*  **sugar.username**: Username of your instance.
*  **sugar.password**: Password of your instance.

## Services

*  **sugar**: [Spinegar\Sugar7Wrapper\Rest](/spinegar/sugarcrm7-api-wrapper-class/blob/master/src/Spinegar/Sugar7Wrapper/Rest.php) instance.

## Usage Example

### Registering with the application

    $container->register(new \Concedra\Pimple\SugarServiceProvider());

## See also

*  [SugarCRM REST Client for SugarCRM 7](https://github.com/spinegar/sugarcrm7-api-wrapper-class)
