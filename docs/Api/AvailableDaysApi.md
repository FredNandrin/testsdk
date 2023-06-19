# OpenAPI\Client\AvailableDaysApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiCheckoutAvailableDays()**](AvailableDaysApi.md#apiCheckoutAvailableDays) | **GET** /api/v2/checkout/available-days/{productQuery}/{locationQuery} | Retrieves the collection of AvailableDays resources. |
| [**xXDeprecatedApiCheckoutAvailableDays()**](AvailableDaysApi.md#xXDeprecatedApiCheckoutAvailableDays) | **GET** /available-days/{productQuery}/{locationQuery} | Retrieves the collection of AvailableDays resources. |
| [**xXDeprecatedApiCheckoutAvailableDaysDe()**](AvailableDaysApi.md#xXDeprecatedApiCheckoutAvailableDaysDe) | **GET** /de/available-days/{productQuery}/{locationQuery} | Retrieves the collection of AvailableDays resources. |
| [**xXDeprecatedApiCheckoutAvailableDaysEn()**](AvailableDaysApi.md#xXDeprecatedApiCheckoutAvailableDaysEn) | **GET** /en/available-days/{productQuery}/{locationQuery} | Retrieves the collection of AvailableDays resources. |
| [**xXDeprecatedApiCheckoutAvailableDaysFr()**](AvailableDaysApi.md#xXDeprecatedApiCheckoutAvailableDaysFr) | **GET** /fr/available-days/{productQuery}/{locationQuery} | Retrieves the collection of AvailableDays resources. |
| [**xXDeprecatedApiCheckoutAvailableDaysRu()**](AvailableDaysApi.md#xXDeprecatedApiCheckoutAvailableDaysRu) | **GET** /ru/available-days/{productQuery}/{locationQuery} | Retrieves the collection of AvailableDays resources. |
| [**xXDeprecatedApiCheckoutAvailableDaysUk()**](AvailableDaysApi.md#xXDeprecatedApiCheckoutAvailableDaysUk) | **GET** /uk/available-days/{productQuery}/{locationQuery} | Retrieves the collection of AvailableDays resources. |
| [**xXDeprecatedApiCheckoutAvailableDaysZh()**](AvailableDaysApi.md#xXDeprecatedApiCheckoutAvailableDaysZh) | **GET** /zh/available-days/{productQuery}/{locationQuery} | Retrieves the collection of AvailableDays resources. |


## `apiCheckoutAvailableDays()`

```php
apiCheckoutAvailableDays($product_query, $location_query, $page): \OpenAPI\Client\Model\AvailableDays[]
```

Retrieves the collection of AvailableDays resources.

Retrieves the collection of AvailableDays resources.

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


$apiInstance = new OpenAPI\Client\Api\AvailableDaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_query = 'product_query_example'; // string | AvailableDayDto identifier
$location_query = 'location_query_example'; // string | AvailableDayDto identifier
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->apiCheckoutAvailableDays($product_query, $location_query, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvailableDaysApi->apiCheckoutAvailableDays: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_query** | **string**| AvailableDayDto identifier | |
| **location_query** | **string**| AvailableDayDto identifier | |
| **page** | **int**| The collection page number | [optional] [default to 1] |

### Return type

[**\OpenAPI\Client\Model\AvailableDays[]**](../Model/AvailableDays.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/ld+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `xXDeprecatedApiCheckoutAvailableDays()`

```php
xXDeprecatedApiCheckoutAvailableDays($product_query, $location_query, $page): \OpenAPI\Client\Model\AvailableDays[]
```

Retrieves the collection of AvailableDays resources.

Retrieves the collection of AvailableDays resources.

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


$apiInstance = new OpenAPI\Client\Api\AvailableDaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_query = 'product_query_example'; // string | AvailableDayDto identifier
$location_query = 'location_query_example'; // string | AvailableDayDto identifier
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->xXDeprecatedApiCheckoutAvailableDays($product_query, $location_query, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvailableDaysApi->xXDeprecatedApiCheckoutAvailableDays: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_query** | **string**| AvailableDayDto identifier | |
| **location_query** | **string**| AvailableDayDto identifier | |
| **page** | **int**| The collection page number | [optional] [default to 1] |

### Return type

[**\OpenAPI\Client\Model\AvailableDays[]**](../Model/AvailableDays.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/ld+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `xXDeprecatedApiCheckoutAvailableDaysDe()`

```php
xXDeprecatedApiCheckoutAvailableDaysDe($product_query, $location_query, $page): \OpenAPI\Client\Model\AvailableDays[]
```

Retrieves the collection of AvailableDays resources.

Retrieves the collection of AvailableDays resources.

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


$apiInstance = new OpenAPI\Client\Api\AvailableDaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_query = 'product_query_example'; // string | AvailableDayDto identifier
$location_query = 'location_query_example'; // string | AvailableDayDto identifier
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->xXDeprecatedApiCheckoutAvailableDaysDe($product_query, $location_query, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvailableDaysApi->xXDeprecatedApiCheckoutAvailableDaysDe: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_query** | **string**| AvailableDayDto identifier | |
| **location_query** | **string**| AvailableDayDto identifier | |
| **page** | **int**| The collection page number | [optional] [default to 1] |

### Return type

[**\OpenAPI\Client\Model\AvailableDays[]**](../Model/AvailableDays.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/ld+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `xXDeprecatedApiCheckoutAvailableDaysEn()`

```php
xXDeprecatedApiCheckoutAvailableDaysEn($product_query, $location_query, $page): \OpenAPI\Client\Model\AvailableDays[]
```

Retrieves the collection of AvailableDays resources.

Retrieves the collection of AvailableDays resources.

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


$apiInstance = new OpenAPI\Client\Api\AvailableDaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_query = 'product_query_example'; // string | AvailableDayDto identifier
$location_query = 'location_query_example'; // string | AvailableDayDto identifier
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->xXDeprecatedApiCheckoutAvailableDaysEn($product_query, $location_query, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvailableDaysApi->xXDeprecatedApiCheckoutAvailableDaysEn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_query** | **string**| AvailableDayDto identifier | |
| **location_query** | **string**| AvailableDayDto identifier | |
| **page** | **int**| The collection page number | [optional] [default to 1] |

### Return type

[**\OpenAPI\Client\Model\AvailableDays[]**](../Model/AvailableDays.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/ld+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `xXDeprecatedApiCheckoutAvailableDaysFr()`

```php
xXDeprecatedApiCheckoutAvailableDaysFr($product_query, $location_query, $page): \OpenAPI\Client\Model\AvailableDays[]
```

Retrieves the collection of AvailableDays resources.

Retrieves the collection of AvailableDays resources.

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


$apiInstance = new OpenAPI\Client\Api\AvailableDaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_query = 'product_query_example'; // string | AvailableDayDto identifier
$location_query = 'location_query_example'; // string | AvailableDayDto identifier
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->xXDeprecatedApiCheckoutAvailableDaysFr($product_query, $location_query, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvailableDaysApi->xXDeprecatedApiCheckoutAvailableDaysFr: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_query** | **string**| AvailableDayDto identifier | |
| **location_query** | **string**| AvailableDayDto identifier | |
| **page** | **int**| The collection page number | [optional] [default to 1] |

### Return type

[**\OpenAPI\Client\Model\AvailableDays[]**](../Model/AvailableDays.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/ld+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `xXDeprecatedApiCheckoutAvailableDaysRu()`

```php
xXDeprecatedApiCheckoutAvailableDaysRu($product_query, $location_query, $page): \OpenAPI\Client\Model\AvailableDays[]
```

Retrieves the collection of AvailableDays resources.

Retrieves the collection of AvailableDays resources.

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


$apiInstance = new OpenAPI\Client\Api\AvailableDaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_query = 'product_query_example'; // string | AvailableDayDto identifier
$location_query = 'location_query_example'; // string | AvailableDayDto identifier
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->xXDeprecatedApiCheckoutAvailableDaysRu($product_query, $location_query, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvailableDaysApi->xXDeprecatedApiCheckoutAvailableDaysRu: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_query** | **string**| AvailableDayDto identifier | |
| **location_query** | **string**| AvailableDayDto identifier | |
| **page** | **int**| The collection page number | [optional] [default to 1] |

### Return type

[**\OpenAPI\Client\Model\AvailableDays[]**](../Model/AvailableDays.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/ld+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `xXDeprecatedApiCheckoutAvailableDaysUk()`

```php
xXDeprecatedApiCheckoutAvailableDaysUk($product_query, $location_query, $page): \OpenAPI\Client\Model\AvailableDays[]
```

Retrieves the collection of AvailableDays resources.

Retrieves the collection of AvailableDays resources.

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


$apiInstance = new OpenAPI\Client\Api\AvailableDaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_query = 'product_query_example'; // string | AvailableDayDto identifier
$location_query = 'location_query_example'; // string | AvailableDayDto identifier
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->xXDeprecatedApiCheckoutAvailableDaysUk($product_query, $location_query, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvailableDaysApi->xXDeprecatedApiCheckoutAvailableDaysUk: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_query** | **string**| AvailableDayDto identifier | |
| **location_query** | **string**| AvailableDayDto identifier | |
| **page** | **int**| The collection page number | [optional] [default to 1] |

### Return type

[**\OpenAPI\Client\Model\AvailableDays[]**](../Model/AvailableDays.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/ld+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `xXDeprecatedApiCheckoutAvailableDaysZh()`

```php
xXDeprecatedApiCheckoutAvailableDaysZh($product_query, $location_query, $page): \OpenAPI\Client\Model\AvailableDays[]
```

Retrieves the collection of AvailableDays resources.

Retrieves the collection of AvailableDays resources.

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


$apiInstance = new OpenAPI\Client\Api\AvailableDaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_query = 'product_query_example'; // string | AvailableDayDto identifier
$location_query = 'location_query_example'; // string | AvailableDayDto identifier
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->xXDeprecatedApiCheckoutAvailableDaysZh($product_query, $location_query, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvailableDaysApi->xXDeprecatedApiCheckoutAvailableDaysZh: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_query** | **string**| AvailableDayDto identifier | |
| **location_query** | **string**| AvailableDayDto identifier | |
| **page** | **int**| The collection page number | [optional] [default to 1] |

### Return type

[**\OpenAPI\Client\Model\AvailableDays[]**](../Model/AvailableDays.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/ld+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
