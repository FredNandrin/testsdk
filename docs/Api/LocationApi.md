# OpenAPI\Client\LocationApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiLocationsGetBackendCollection()**](LocationApi.md#apiLocationsGetBackendCollection) | **GET** /api/v2/backend/locations | Retrieves the collection of Location resources. |
| [**apiLocationsGetXXDeprecatedCheckoutLocationsDe()**](LocationApi.md#apiLocationsGetXXDeprecatedCheckoutLocationsDe) | **GET** /de/api/v1/locations | Retrieves the collection of Location resources. |
| [**apiLocationsGetXXDeprecatedCheckoutLocationsEn()**](LocationApi.md#apiLocationsGetXXDeprecatedCheckoutLocationsEn) | **GET** /en/api/v1/locations | Retrieves the collection of Location resources. |
| [**apiLocationsGetXXDeprecatedCheckoutLocationsFr()**](LocationApi.md#apiLocationsGetXXDeprecatedCheckoutLocationsFr) | **GET** /fr/api/v1/locations | Retrieves the collection of Location resources. |
| [**apiLocationsGetXXDeprecatedCheckoutLocationsRu()**](LocationApi.md#apiLocationsGetXXDeprecatedCheckoutLocationsRu) | **GET** /ru/api/v1/locations | Retrieves the collection of Location resources. |
| [**apiLocationsGetXXDeprecatedCheckoutLocationsUk()**](LocationApi.md#apiLocationsGetXXDeprecatedCheckoutLocationsUk) | **GET** /uk/api/v1/locations | Retrieves the collection of Location resources. |
| [**apiLocationsGetXXDeprecatedCheckoutLocationsZh()**](LocationApi.md#apiLocationsGetXXDeprecatedCheckoutLocationsZh) | **GET** /zh/api/v1/locations | Retrieves the collection of Location resources. |
| [**apiLocationsLocationsCollection()**](LocationApi.md#apiLocationsLocationsCollection) | **GET** /api/v2/checkout/locations | Retrieves the collection of Location resources. |


## `apiLocationsGetBackendCollection()`

```php
apiLocationsGetBackendCollection($page): \OpenAPI\Client\Model\LocationLocationReadBackend[]
```

Retrieves the collection of Location resources.

Retrieves the collection of Location resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LocationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->apiLocationsGetBackendCollection($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationApi->apiLocationsGetBackendCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The collection page number | [optional] [default to 1] |

### Return type

[**\OpenAPI\Client\Model\LocationLocationReadBackend[]**](../Model/LocationLocationReadBackend.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/ld+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiLocationsGetXXDeprecatedCheckoutLocationsDe()`

```php
apiLocationsGetXXDeprecatedCheckoutLocationsDe($page): \OpenAPI\Client\Model\LocationLocationOutputDtoLocationRead[]
```

Retrieves the collection of Location resources.

Retrieves the collection of Location resources.

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


$apiInstance = new OpenAPI\Client\Api\LocationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->apiLocationsGetXXDeprecatedCheckoutLocationsDe($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationApi->apiLocationsGetXXDeprecatedCheckoutLocationsDe: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The collection page number | [optional] [default to 1] |

### Return type

[**\OpenAPI\Client\Model\LocationLocationOutputDtoLocationRead[]**](../Model/LocationLocationOutputDtoLocationRead.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/ld+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiLocationsGetXXDeprecatedCheckoutLocationsEn()`

```php
apiLocationsGetXXDeprecatedCheckoutLocationsEn($page): \OpenAPI\Client\Model\LocationLocationOutputDtoLocationRead[]
```

Retrieves the collection of Location resources.

Retrieves the collection of Location resources.

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


$apiInstance = new OpenAPI\Client\Api\LocationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->apiLocationsGetXXDeprecatedCheckoutLocationsEn($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationApi->apiLocationsGetXXDeprecatedCheckoutLocationsEn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The collection page number | [optional] [default to 1] |

### Return type

[**\OpenAPI\Client\Model\LocationLocationOutputDtoLocationRead[]**](../Model/LocationLocationOutputDtoLocationRead.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/ld+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiLocationsGetXXDeprecatedCheckoutLocationsFr()`

```php
apiLocationsGetXXDeprecatedCheckoutLocationsFr($page): \OpenAPI\Client\Model\LocationLocationOutputDtoLocationRead[]
```

Retrieves the collection of Location resources.

Retrieves the collection of Location resources.

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


$apiInstance = new OpenAPI\Client\Api\LocationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->apiLocationsGetXXDeprecatedCheckoutLocationsFr($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationApi->apiLocationsGetXXDeprecatedCheckoutLocationsFr: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The collection page number | [optional] [default to 1] |

### Return type

[**\OpenAPI\Client\Model\LocationLocationOutputDtoLocationRead[]**](../Model/LocationLocationOutputDtoLocationRead.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/ld+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiLocationsGetXXDeprecatedCheckoutLocationsRu()`

```php
apiLocationsGetXXDeprecatedCheckoutLocationsRu($page): \OpenAPI\Client\Model\LocationLocationOutputDtoLocationRead[]
```

Retrieves the collection of Location resources.

Retrieves the collection of Location resources.

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


$apiInstance = new OpenAPI\Client\Api\LocationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->apiLocationsGetXXDeprecatedCheckoutLocationsRu($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationApi->apiLocationsGetXXDeprecatedCheckoutLocationsRu: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The collection page number | [optional] [default to 1] |

### Return type

[**\OpenAPI\Client\Model\LocationLocationOutputDtoLocationRead[]**](../Model/LocationLocationOutputDtoLocationRead.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/ld+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiLocationsGetXXDeprecatedCheckoutLocationsUk()`

```php
apiLocationsGetXXDeprecatedCheckoutLocationsUk($page): \OpenAPI\Client\Model\LocationLocationOutputDtoLocationRead[]
```

Retrieves the collection of Location resources.

Retrieves the collection of Location resources.

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


$apiInstance = new OpenAPI\Client\Api\LocationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->apiLocationsGetXXDeprecatedCheckoutLocationsUk($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationApi->apiLocationsGetXXDeprecatedCheckoutLocationsUk: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The collection page number | [optional] [default to 1] |

### Return type

[**\OpenAPI\Client\Model\LocationLocationOutputDtoLocationRead[]**](../Model/LocationLocationOutputDtoLocationRead.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/ld+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiLocationsGetXXDeprecatedCheckoutLocationsZh()`

```php
apiLocationsGetXXDeprecatedCheckoutLocationsZh($page): \OpenAPI\Client\Model\LocationLocationOutputDtoLocationRead[]
```

Retrieves the collection of Location resources.

Retrieves the collection of Location resources.

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


$apiInstance = new OpenAPI\Client\Api\LocationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->apiLocationsGetXXDeprecatedCheckoutLocationsZh($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationApi->apiLocationsGetXXDeprecatedCheckoutLocationsZh: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The collection page number | [optional] [default to 1] |

### Return type

[**\OpenAPI\Client\Model\LocationLocationOutputDtoLocationRead[]**](../Model/LocationLocationOutputDtoLocationRead.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/ld+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiLocationsLocationsCollection()`

```php
apiLocationsLocationsCollection($page): \OpenAPI\Client\Model\LocationLocationOutputDtoLocationRead[]
```

Retrieves the collection of Location resources.

Retrieves the collection of Location resources.

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


$apiInstance = new OpenAPI\Client\Api\LocationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->apiLocationsLocationsCollection($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationApi->apiLocationsLocationsCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The collection page number | [optional] [default to 1] |

### Return type

[**\OpenAPI\Client\Model\LocationLocationOutputDtoLocationRead[]**](../Model/LocationLocationOutputDtoLocationRead.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/ld+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
