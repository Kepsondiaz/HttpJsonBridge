# Laravel HttpJsonBridge 🌉

**A simple way to define your Json Response for your Laravel's Api .**

## installation

```php
composer require kepsondiaz/httpjsonbridge
```

## Doc
    Send a response based on the event that occurs when your api is called

**send a Response when a badRequest occur**
```php
return (new \Kepsondiaz\HttpJsonBridge\HttpJsonBridge)->badRequestApiResponse([
                'message' => 'your custom message for response'
            ]);
```

**send a Response when response is OK**
```php
return (new \Kepsondiaz\HttpJsonBridge\HttpJsonBridge)->okApiResponse([
                // do something
            ]);
```

**send a Response when response when resource is not found**
```php
return (new \Kepsondiaz\HttpJsonBridge\HttpJsonBridge)->notFoundApiResponse([
                // do something
            ]);
```

**send a Response when response when user is unauthorised**
```php
return (new \Kepsondiaz\HttpJsonBridge\HttpJsonBridge)->unauthorizedApiResponse([
                // do something
            ]);
```