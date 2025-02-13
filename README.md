# Laravel HttpJsonBridge 🌉

**A simple way to define your Json Response for your Laravel's Api .**

## installation

```php
composer require kepsondiaz/httpjsonbridge
```

## Doc
    Send a response based on the event that occurs when your api is called

**send a Response when a badRequest occur. Status code 400**
```php
/**
 * Response with status code 400.
 */
return (new \Kepsondiaz\HttpJsonBridge\HttpJsonBridge)->badRequestApiResponse($message);
```

**send a Response when response is OK.**
```php
/**
 * Response with status code 200.
 */
return (new \Kepsondiaz\HttpJsonBridge\HttpJsonBridge)->okApiResponse($data, $message);
```

**send a Response when response when resource is not found**
```php
/**
 * Response with status code 404.
 */
return (new \Kepsondiaz\HttpJsonBridge\HttpJsonBridge)->notFoundApiResponse();
```

**send a Response when response when user is unauthorised**
```php
/**
 * Response with status code 401.
 */
return (new \Kepsondiaz\HttpJsonBridge\HttpJsonBridge)->unauthorizedApiResponse();
```
