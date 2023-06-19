# OpenAPI\Client\LoginApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiMyprobatixloginPost()**](LoginApi.md#apiMyprobatixloginPost) | **POST** /myprobatix/login | Creates a JWT Bearer Token. |


## `apiMyprobatixloginPost()`

```php
apiMyprobatixloginPost($login): \OpenAPI\Client\Model\ApiMyprobatixloginPost200Response
```

Creates a JWT Bearer Token.

Creates a JWT Bearer Token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LoginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$login = new \OpenAPI\Client\Model\Login(); // \OpenAPI\Client\Model\Login | The new login resource

try {
    $result = $apiInstance->apiMyprobatixloginPost($login);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginApi->apiMyprobatixloginPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **login** | [**\OpenAPI\Client\Model\Login**](../Model/Login.md)| The new login resource | |

### Return type

[**\OpenAPI\Client\Model\ApiMyprobatixloginPost200Response**](../Model/ApiMyprobatixloginPost200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/ld+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
