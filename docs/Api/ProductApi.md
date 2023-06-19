# OpenAPI\Client\ProductApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiProductsGetXXDeprecatedCheckoutProductsDe()**](ProductApi.md#apiProductsGetXXDeprecatedCheckoutProductsDe) | **GET** /de/api/v1/products | Retrieves the collection of Product resources. |
| [**apiProductsGetXXDeprecatedCheckoutProductsEn()**](ProductApi.md#apiProductsGetXXDeprecatedCheckoutProductsEn) | **GET** /en/api/v1/products | Retrieves the collection of Product resources. |
| [**apiProductsGetXXDeprecatedCheckoutProductsFr()**](ProductApi.md#apiProductsGetXXDeprecatedCheckoutProductsFr) | **GET** /fr/api/v1/products | Retrieves the collection of Product resources. |
| [**apiProductsGetXXDeprecatedCheckoutProductsRu()**](ProductApi.md#apiProductsGetXXDeprecatedCheckoutProductsRu) | **GET** /ru/api/v1/products | Retrieves the collection of Product resources. |
| [**apiProductsGetXXDeprecatedCheckoutProductsUk()**](ProductApi.md#apiProductsGetXXDeprecatedCheckoutProductsUk) | **GET** /uk/api/v1/products | Retrieves the collection of Product resources. |
| [**apiProductsGetXXDeprecatedCheckoutProductsZh()**](ProductApi.md#apiProductsGetXXDeprecatedCheckoutProductsZh) | **GET** /zh/api/v1/products | Retrieves the collection of Product resources. |
| [**apiProductsProductsCollection()**](ProductApi.md#apiProductsProductsCollection) | **GET** /api/v2/checkout/products | Retrieves the collection of Product resources. |


## `apiProductsGetXXDeprecatedCheckoutProductsDe()`

```php
apiProductsGetXXDeprecatedCheckoutProductsDe($page): \OpenAPI\Client\Model\ProductProductOutputDtoProductRead[]
```

Retrieves the collection of Product resources.

Retrieves the collection of Product resources.

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


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->apiProductsGetXXDeprecatedCheckoutProductsDe($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->apiProductsGetXXDeprecatedCheckoutProductsDe: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The collection page number | [optional] [default to 1] |

### Return type

[**\OpenAPI\Client\Model\ProductProductOutputDtoProductRead[]**](../Model/ProductProductOutputDtoProductRead.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/ld+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiProductsGetXXDeprecatedCheckoutProductsEn()`

```php
apiProductsGetXXDeprecatedCheckoutProductsEn($page): \OpenAPI\Client\Model\ProductProductOutputDtoProductRead[]
```

Retrieves the collection of Product resources.

Retrieves the collection of Product resources.

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


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->apiProductsGetXXDeprecatedCheckoutProductsEn($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->apiProductsGetXXDeprecatedCheckoutProductsEn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The collection page number | [optional] [default to 1] |

### Return type

[**\OpenAPI\Client\Model\ProductProductOutputDtoProductRead[]**](../Model/ProductProductOutputDtoProductRead.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/ld+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiProductsGetXXDeprecatedCheckoutProductsFr()`

```php
apiProductsGetXXDeprecatedCheckoutProductsFr($page): \OpenAPI\Client\Model\ProductProductOutputDtoProductRead[]
```

Retrieves the collection of Product resources.

Retrieves the collection of Product resources.

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


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->apiProductsGetXXDeprecatedCheckoutProductsFr($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->apiProductsGetXXDeprecatedCheckoutProductsFr: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The collection page number | [optional] [default to 1] |

### Return type

[**\OpenAPI\Client\Model\ProductProductOutputDtoProductRead[]**](../Model/ProductProductOutputDtoProductRead.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/ld+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiProductsGetXXDeprecatedCheckoutProductsRu()`

```php
apiProductsGetXXDeprecatedCheckoutProductsRu($page): \OpenAPI\Client\Model\ProductProductOutputDtoProductRead[]
```

Retrieves the collection of Product resources.

Retrieves the collection of Product resources.

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


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->apiProductsGetXXDeprecatedCheckoutProductsRu($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->apiProductsGetXXDeprecatedCheckoutProductsRu: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The collection page number | [optional] [default to 1] |

### Return type

[**\OpenAPI\Client\Model\ProductProductOutputDtoProductRead[]**](../Model/ProductProductOutputDtoProductRead.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/ld+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiProductsGetXXDeprecatedCheckoutProductsUk()`

```php
apiProductsGetXXDeprecatedCheckoutProductsUk($page): \OpenAPI\Client\Model\ProductProductOutputDtoProductRead[]
```

Retrieves the collection of Product resources.

Retrieves the collection of Product resources.

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


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->apiProductsGetXXDeprecatedCheckoutProductsUk($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->apiProductsGetXXDeprecatedCheckoutProductsUk: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The collection page number | [optional] [default to 1] |

### Return type

[**\OpenAPI\Client\Model\ProductProductOutputDtoProductRead[]**](../Model/ProductProductOutputDtoProductRead.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/ld+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiProductsGetXXDeprecatedCheckoutProductsZh()`

```php
apiProductsGetXXDeprecatedCheckoutProductsZh($page): \OpenAPI\Client\Model\ProductProductOutputDtoProductRead[]
```

Retrieves the collection of Product resources.

Retrieves the collection of Product resources.

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


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->apiProductsGetXXDeprecatedCheckoutProductsZh($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->apiProductsGetXXDeprecatedCheckoutProductsZh: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The collection page number | [optional] [default to 1] |

### Return type

[**\OpenAPI\Client\Model\ProductProductOutputDtoProductRead[]**](../Model/ProductProductOutputDtoProductRead.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/ld+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiProductsProductsCollection()`

```php
apiProductsProductsCollection($page): \OpenAPI\Client\Model\ProductProductOutputDtoProductRead[]
```

Retrieves the collection of Product resources.

Retrieves the collection of Product resources.

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


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->apiProductsProductsCollection($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->apiProductsProductsCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The collection page number | [optional] [default to 1] |

### Return type

[**\OpenAPI\Client\Model\ProductProductOutputDtoProductRead[]**](../Model/ProductProductOutputDtoProductRead.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/ld+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
