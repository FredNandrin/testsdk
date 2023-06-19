# OpenAPI\Client\AvailabilitiesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiCheckoutAvailabilities()**](AvailabilitiesApi.md#apiCheckoutAvailabilities) | **POST** /api/v2/checkout/availabilities | Creates a Availabilities resource. |
| [**xXDeprecatedApiCheckoutAvailabilities()**](AvailabilitiesApi.md#xXDeprecatedApiCheckoutAvailabilities) | **POST** /availabilities | Creates a Availabilities resource. |
| [**xXDeprecatedApiCheckoutAvailabilitiesDe()**](AvailabilitiesApi.md#xXDeprecatedApiCheckoutAvailabilitiesDe) | **POST** /de/availabilities | Creates a Availabilities resource. |
| [**xXDeprecatedApiCheckoutAvailabilitiesEn()**](AvailabilitiesApi.md#xXDeprecatedApiCheckoutAvailabilitiesEn) | **POST** /en/availabilities | Creates a Availabilities resource. |
| [**xXDeprecatedApiCheckoutAvailabilitiesFr()**](AvailabilitiesApi.md#xXDeprecatedApiCheckoutAvailabilitiesFr) | **POST** /fr/availabilities | Creates a Availabilities resource. |
| [**xXDeprecatedApiCheckoutAvailabilitiesRu()**](AvailabilitiesApi.md#xXDeprecatedApiCheckoutAvailabilitiesRu) | **POST** /ru/availabilities | Creates a Availabilities resource. |
| [**xXDeprecatedApiCheckoutAvailabilitiesUk()**](AvailabilitiesApi.md#xXDeprecatedApiCheckoutAvailabilitiesUk) | **POST** /uk/availabilities | Creates a Availabilities resource. |
| [**xXDeprecatedApiCheckoutAvailabilitiesZh()**](AvailabilitiesApi.md#xXDeprecatedApiCheckoutAvailabilitiesZh) | **POST** /zh/availabilities | Creates a Availabilities resource. |


## `apiCheckoutAvailabilities()`

```php
apiCheckoutAvailabilities($availabilities): \OpenAPI\Client\Model\AvailabilitiesAvailableDayDto
```

Creates a Availabilities resource.

Creates a Availabilities resource.

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


$apiInstance = new OpenAPI\Client\Api\AvailabilitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$availabilities = new \OpenAPI\Client\Model\Availabilities(); // \OpenAPI\Client\Model\Availabilities | The new Availabilities resource

try {
    $result = $apiInstance->apiCheckoutAvailabilities($availabilities);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvailabilitiesApi->apiCheckoutAvailabilities: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **availabilities** | [**\OpenAPI\Client\Model\Availabilities**](../Model/Availabilities.md)| The new Availabilities resource | |

### Return type

[**\OpenAPI\Client\Model\AvailabilitiesAvailableDayDto**](../Model/AvailabilitiesAvailableDayDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: `application/json`, `application/ld+json`
- **Accept**: `application/json`, `application/ld+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `xXDeprecatedApiCheckoutAvailabilities()`

```php
xXDeprecatedApiCheckoutAvailabilities($availabilities): \OpenAPI\Client\Model\AvailabilitiesAvailableDayDto
```

Creates a Availabilities resource.

Creates a Availabilities resource.

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


$apiInstance = new OpenAPI\Client\Api\AvailabilitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$availabilities = new \OpenAPI\Client\Model\Availabilities(); // \OpenAPI\Client\Model\Availabilities | The new Availabilities resource

try {
    $result = $apiInstance->xXDeprecatedApiCheckoutAvailabilities($availabilities);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvailabilitiesApi->xXDeprecatedApiCheckoutAvailabilities: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **availabilities** | [**\OpenAPI\Client\Model\Availabilities**](../Model/Availabilities.md)| The new Availabilities resource | |

### Return type

[**\OpenAPI\Client\Model\AvailabilitiesAvailableDayDto**](../Model/AvailabilitiesAvailableDayDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: `application/json`, `application/ld+json`
- **Accept**: `application/json`, `application/ld+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `xXDeprecatedApiCheckoutAvailabilitiesDe()`

```php
xXDeprecatedApiCheckoutAvailabilitiesDe($availabilities): \OpenAPI\Client\Model\AvailabilitiesAvailableDayDto
```

Creates a Availabilities resource.

Creates a Availabilities resource.

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


$apiInstance = new OpenAPI\Client\Api\AvailabilitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$availabilities = new \OpenAPI\Client\Model\Availabilities(); // \OpenAPI\Client\Model\Availabilities | The new Availabilities resource

try {
    $result = $apiInstance->xXDeprecatedApiCheckoutAvailabilitiesDe($availabilities);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvailabilitiesApi->xXDeprecatedApiCheckoutAvailabilitiesDe: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **availabilities** | [**\OpenAPI\Client\Model\Availabilities**](../Model/Availabilities.md)| The new Availabilities resource | |

### Return type

[**\OpenAPI\Client\Model\AvailabilitiesAvailableDayDto**](../Model/AvailabilitiesAvailableDayDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: `application/json`, `application/ld+json`
- **Accept**: `application/json`, `application/ld+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `xXDeprecatedApiCheckoutAvailabilitiesEn()`

```php
xXDeprecatedApiCheckoutAvailabilitiesEn($availabilities): \OpenAPI\Client\Model\AvailabilitiesAvailableDayDto
```

Creates a Availabilities resource.

Creates a Availabilities resource.

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


$apiInstance = new OpenAPI\Client\Api\AvailabilitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$availabilities = new \OpenAPI\Client\Model\Availabilities(); // \OpenAPI\Client\Model\Availabilities | The new Availabilities resource

try {
    $result = $apiInstance->xXDeprecatedApiCheckoutAvailabilitiesEn($availabilities);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvailabilitiesApi->xXDeprecatedApiCheckoutAvailabilitiesEn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **availabilities** | [**\OpenAPI\Client\Model\Availabilities**](../Model/Availabilities.md)| The new Availabilities resource | |

### Return type

[**\OpenAPI\Client\Model\AvailabilitiesAvailableDayDto**](../Model/AvailabilitiesAvailableDayDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: `application/json`, `application/ld+json`
- **Accept**: `application/json`, `application/ld+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `xXDeprecatedApiCheckoutAvailabilitiesFr()`

```php
xXDeprecatedApiCheckoutAvailabilitiesFr($availabilities): \OpenAPI\Client\Model\AvailabilitiesAvailableDayDto
```

Creates a Availabilities resource.

Creates a Availabilities resource.

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


$apiInstance = new OpenAPI\Client\Api\AvailabilitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$availabilities = new \OpenAPI\Client\Model\Availabilities(); // \OpenAPI\Client\Model\Availabilities | The new Availabilities resource

try {
    $result = $apiInstance->xXDeprecatedApiCheckoutAvailabilitiesFr($availabilities);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvailabilitiesApi->xXDeprecatedApiCheckoutAvailabilitiesFr: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **availabilities** | [**\OpenAPI\Client\Model\Availabilities**](../Model/Availabilities.md)| The new Availabilities resource | |

### Return type

[**\OpenAPI\Client\Model\AvailabilitiesAvailableDayDto**](../Model/AvailabilitiesAvailableDayDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: `application/json`, `application/ld+json`
- **Accept**: `application/json`, `application/ld+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `xXDeprecatedApiCheckoutAvailabilitiesRu()`

```php
xXDeprecatedApiCheckoutAvailabilitiesRu($availabilities): \OpenAPI\Client\Model\AvailabilitiesAvailableDayDto
```

Creates a Availabilities resource.

Creates a Availabilities resource.

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


$apiInstance = new OpenAPI\Client\Api\AvailabilitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$availabilities = new \OpenAPI\Client\Model\Availabilities(); // \OpenAPI\Client\Model\Availabilities | The new Availabilities resource

try {
    $result = $apiInstance->xXDeprecatedApiCheckoutAvailabilitiesRu($availabilities);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvailabilitiesApi->xXDeprecatedApiCheckoutAvailabilitiesRu: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **availabilities** | [**\OpenAPI\Client\Model\Availabilities**](../Model/Availabilities.md)| The new Availabilities resource | |

### Return type

[**\OpenAPI\Client\Model\AvailabilitiesAvailableDayDto**](../Model/AvailabilitiesAvailableDayDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: `application/json`, `application/ld+json`
- **Accept**: `application/json`, `application/ld+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `xXDeprecatedApiCheckoutAvailabilitiesUk()`

```php
xXDeprecatedApiCheckoutAvailabilitiesUk($availabilities): \OpenAPI\Client\Model\AvailabilitiesAvailableDayDto
```

Creates a Availabilities resource.

Creates a Availabilities resource.

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


$apiInstance = new OpenAPI\Client\Api\AvailabilitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$availabilities = new \OpenAPI\Client\Model\Availabilities(); // \OpenAPI\Client\Model\Availabilities | The new Availabilities resource

try {
    $result = $apiInstance->xXDeprecatedApiCheckoutAvailabilitiesUk($availabilities);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvailabilitiesApi->xXDeprecatedApiCheckoutAvailabilitiesUk: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **availabilities** | [**\OpenAPI\Client\Model\Availabilities**](../Model/Availabilities.md)| The new Availabilities resource | |

### Return type

[**\OpenAPI\Client\Model\AvailabilitiesAvailableDayDto**](../Model/AvailabilitiesAvailableDayDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: `application/json`, `application/ld+json`
- **Accept**: `application/json`, `application/ld+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `xXDeprecatedApiCheckoutAvailabilitiesZh()`

```php
xXDeprecatedApiCheckoutAvailabilitiesZh($availabilities): \OpenAPI\Client\Model\AvailabilitiesAvailableDayDto
```

Creates a Availabilities resource.

Creates a Availabilities resource.

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


$apiInstance = new OpenAPI\Client\Api\AvailabilitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$availabilities = new \OpenAPI\Client\Model\Availabilities(); // \OpenAPI\Client\Model\Availabilities | The new Availabilities resource

try {
    $result = $apiInstance->xXDeprecatedApiCheckoutAvailabilitiesZh($availabilities);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvailabilitiesApi->xXDeprecatedApiCheckoutAvailabilitiesZh: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **availabilities** | [**\OpenAPI\Client\Model\Availabilities**](../Model/Availabilities.md)| The new Availabilities resource | |

### Return type

[**\OpenAPI\Client\Model\AvailabilitiesAvailableDayDto**](../Model/AvailabilitiesAvailableDayDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: `application/json`, `application/ld+json`
- **Accept**: `application/json`, `application/ld+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
