# OpenAPI\Client\TranslationApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiTranslationsGetXXDeprecatedCheckoutTranslationsCollection()**](TranslationApi.md#apiTranslationsGetXXDeprecatedCheckoutTranslationsCollection) | **GET** /{_locale}/api/v1/translations | Retrieves the collection of Translation resources. |
| [**apiTranslationsTranslationsCollection()**](TranslationApi.md#apiTranslationsTranslationsCollection) | **GET** /api/v2/checkout/translations | Retrieves the collection of Translation resources. |


## `apiTranslationsGetXXDeprecatedCheckoutTranslationsCollection()`

```php
apiTranslationsGetXXDeprecatedCheckoutTranslationsCollection($_locale, $page): object[]
```

Retrieves the collection of Translation resources.

Retrieves the collection of Translation resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

// Configure Bearer (JWT) authorization: jwt
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TranslationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_locale = '_locale_example'; // string | TranslationDto identifier
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->apiTranslationsGetXXDeprecatedCheckoutTranslationsCollection($_locale, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranslationApi->apiTranslationsGetXXDeprecatedCheckoutTranslationsCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **_locale** | **string**| TranslationDto identifier | |
| **page** | **int**| The collection page number | [optional] [default to 1] |

### Return type

**object[]**

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/ld+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiTranslationsTranslationsCollection()`

```php
apiTranslationsTranslationsCollection($page): object[]
```

Retrieves the collection of Translation resources.

Retrieves the collection of Translation resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

// Configure Bearer (JWT) authorization: jwt
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TranslationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->apiTranslationsTranslationsCollection($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranslationApi->apiTranslationsTranslationsCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The collection page number | [optional] [default to 1] |

### Return type

**object[]**

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/ld+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
