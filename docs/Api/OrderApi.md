# OpenAPI\Client\OrderApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiOrdersCheckoutCancelBookingItem()**](OrderApi.md#apiOrdersCheckoutCancelBookingItem) | **DELETE** /api/v2/checkout/order/{uuid} | Cancel Order. |
| [**apiOrdersCheckoutCheckVoucherCollection()**](OrderApi.md#apiOrdersCheckoutCheckVoucherCollection) | **POST** /api/v2/checkout/checkVoucher | Check Voucher. |
| [**apiOrdersCheckoutGetStatusItem()**](OrderApi.md#apiOrdersCheckoutGetStatusItem) | **GET** /api/v2/checkout/order/{uuid}/status | Get Order status. |
| [**apiOrdersCheckoutPlaceOrderCollection()**](OrderApi.md#apiOrdersCheckoutPlaceOrderCollection) | **POST** /api/v2/checkout/order | Place Order. |
| [**apiOrdersDeleteXXDeprecatedCheckoutCancelBookingItemDe()**](OrderApi.md#apiOrdersDeleteXXDeprecatedCheckoutCancelBookingItemDe) | **DELETE** /{_locale}/api/v1/order/{uuid}/status | DEPRECATED - Cancel Order. |
| [**apiOrdersGetXXDeprecatedCheckoutGetStatusItem()**](OrderApi.md#apiOrdersGetXXDeprecatedCheckoutGetStatusItem) | **GET** /{_locale}/api/v1/order/{uuid}/status | DEPRECATED - Get Order status. |
| [**apiOrdersPostXXDeprecatedCheckoutCheckVoucherDe()**](OrderApi.md#apiOrdersPostXXDeprecatedCheckoutCheckVoucherDe) | **POST** /de/api/v1/checkVoucher | DEPRECATED - Check Voucher. |
| [**apiOrdersPostXXDeprecatedCheckoutCheckVoucherEn()**](OrderApi.md#apiOrdersPostXXDeprecatedCheckoutCheckVoucherEn) | **POST** /en/api/v1/checkVoucher | DEPRECATED - Check Voucher. |
| [**apiOrdersPostXXDeprecatedCheckoutCheckVoucherFr()**](OrderApi.md#apiOrdersPostXXDeprecatedCheckoutCheckVoucherFr) | **POST** /fr/api/v1/checkVoucher | DEPRECATED - Check Voucher. |
| [**apiOrdersPostXXDeprecatedCheckoutCheckVoucherRu()**](OrderApi.md#apiOrdersPostXXDeprecatedCheckoutCheckVoucherRu) | **POST** /ru/api/v1/checkVoucher | DEPRECATED - Check Voucher. |
| [**apiOrdersPostXXDeprecatedCheckoutCheckVoucherUk()**](OrderApi.md#apiOrdersPostXXDeprecatedCheckoutCheckVoucherUk) | **POST** /uk/api/v1/checkVoucher | DEPRECATED - Check Voucher. |
| [**apiOrdersPostXXDeprecatedCheckoutCheckVoucherZh()**](OrderApi.md#apiOrdersPostXXDeprecatedCheckoutCheckVoucherZh) | **POST** /zh/api/v1/checkVoucher | DEPRECATED - Check Voucher. |
| [**apiOrdersPostXXDeprecatedCheckoutPlaceOrderDe()**](OrderApi.md#apiOrdersPostXXDeprecatedCheckoutPlaceOrderDe) | **POST** /de/api/v1/order | Place Order. |
| [**apiOrdersPostXXDeprecatedCheckoutPlaceOrderEn()**](OrderApi.md#apiOrdersPostXXDeprecatedCheckoutPlaceOrderEn) | **POST** /en/api/v1/order | Place Order. |
| [**apiOrdersPostXXDeprecatedCheckoutPlaceOrderFr()**](OrderApi.md#apiOrdersPostXXDeprecatedCheckoutPlaceOrderFr) | **POST** /fr/api/v1/order | Place Order. |
| [**apiOrdersPostXXDeprecatedCheckoutPlaceOrderRu()**](OrderApi.md#apiOrdersPostXXDeprecatedCheckoutPlaceOrderRu) | **POST** /ru/api/v1/order | Place Order. |
| [**apiOrdersPostXXDeprecatedCheckoutPlaceOrderUk()**](OrderApi.md#apiOrdersPostXXDeprecatedCheckoutPlaceOrderUk) | **POST** /uk/api/v1/order | Place Order. |
| [**apiOrdersPostXXDeprecatedCheckoutPlaceOrderZh()**](OrderApi.md#apiOrdersPostXXDeprecatedCheckoutPlaceOrderZh) | **POST** /zh/api/v1/order | Place Order. |


## `apiOrdersCheckoutCancelBookingItem()`

```php
apiOrdersCheckoutCancelBookingItem($uuid)
```

Cancel Order.

Removes the Order resource.

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


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | Order identifier

try {
    $apiInstance->apiOrdersCheckoutCancelBookingItem($uuid);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->apiOrdersCheckoutCancelBookingItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| Order identifier | |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiOrdersCheckoutCheckVoucherCollection()`

```php
apiOrdersCheckoutCheckVoucherCollection($body): \OpenAPI\Client\Model\OrderOrderCheckDtoOrderRead
```

Check Voucher.

Creates a Order resource.

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


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array('key' => new \stdClass); // object | The new Order resource

try {
    $result = $apiInstance->apiOrdersCheckoutCheckVoucherCollection($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->apiOrdersCheckoutCheckVoucherCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | **object**| The new Order resource | |

### Return type

[**\OpenAPI\Client\Model\OrderOrderCheckDtoOrderRead**](../Model/OrderOrderCheckDtoOrderRead.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: `application/json`, `application/ld+json`
- **Accept**: `application/json`, `application/ld+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiOrdersCheckoutGetStatusItem()`

```php
apiOrdersCheckoutGetStatusItem($uuid): \OpenAPI\Client\Model\OrderOrderOutputDtoOrderRead
```

Get Order status.

Retrieves a Order resource.

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


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | Order identifier

try {
    $result = $apiInstance->apiOrdersCheckoutGetStatusItem($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->apiOrdersCheckoutGetStatusItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| Order identifier | |

### Return type

[**\OpenAPI\Client\Model\OrderOrderOutputDtoOrderRead**](../Model/OrderOrderOutputDtoOrderRead.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/ld+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiOrdersCheckoutPlaceOrderCollection()`

```php
apiOrdersCheckoutPlaceOrderCollection($body): \OpenAPI\Client\Model\OrderOrderOutputDtoOrderRead
```

Place Order.

Creates a Order resource.

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


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array('key' => new \stdClass); // object | The new Order resource

try {
    $result = $apiInstance->apiOrdersCheckoutPlaceOrderCollection($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->apiOrdersCheckoutPlaceOrderCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | **object**| The new Order resource | |

### Return type

[**\OpenAPI\Client\Model\OrderOrderOutputDtoOrderRead**](../Model/OrderOrderOutputDtoOrderRead.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: `application/json`, `application/ld+json`
- **Accept**: `application/json`, `application/ld+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiOrdersDeleteXXDeprecatedCheckoutCancelBookingItemDe()`

```php
apiOrdersDeleteXXDeprecatedCheckoutCancelBookingItemDe($_locale, $uuid)
```

DEPRECATED - Cancel Order.

Removes the Order resource.

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


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_locale = '_locale_example'; // string | Order identifier
$uuid = 'uuid_example'; // string | Order identifier

try {
    $apiInstance->apiOrdersDeleteXXDeprecatedCheckoutCancelBookingItemDe($_locale, $uuid);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->apiOrdersDeleteXXDeprecatedCheckoutCancelBookingItemDe: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **_locale** | **string**| Order identifier | |
| **uuid** | **string**| Order identifier | |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiOrdersGetXXDeprecatedCheckoutGetStatusItem()`

```php
apiOrdersGetXXDeprecatedCheckoutGetStatusItem($_locale, $uuid): \OpenAPI\Client\Model\OrderOrderOutputDtoOrderRead
```

DEPRECATED - Get Order status.

Retrieves a Order resource.

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


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_locale = '_locale_example'; // string | Order identifier
$uuid = 'uuid_example'; // string | Order identifier

try {
    $result = $apiInstance->apiOrdersGetXXDeprecatedCheckoutGetStatusItem($_locale, $uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->apiOrdersGetXXDeprecatedCheckoutGetStatusItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **_locale** | **string**| Order identifier | |
| **uuid** | **string**| Order identifier | |

### Return type

[**\OpenAPI\Client\Model\OrderOrderOutputDtoOrderRead**](../Model/OrderOrderOutputDtoOrderRead.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/ld+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiOrdersPostXXDeprecatedCheckoutCheckVoucherDe()`

```php
apiOrdersPostXXDeprecatedCheckoutCheckVoucherDe($body): object
```

DEPRECATED - Check Voucher.

Creates a Order resource.

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


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array('key' => new \stdClass); // object | The new Order resource

try {
    $result = $apiInstance->apiOrdersPostXXDeprecatedCheckoutCheckVoucherDe($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->apiOrdersPostXXDeprecatedCheckoutCheckVoucherDe: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | **object**| The new Order resource | |

### Return type

**object**

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: `application/json`, `application/ld+json`
- **Accept**: `application/json`, `application/ld+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiOrdersPostXXDeprecatedCheckoutCheckVoucherEn()`

```php
apiOrdersPostXXDeprecatedCheckoutCheckVoucherEn($body): object
```

DEPRECATED - Check Voucher.

Creates a Order resource.

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


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array('key' => new \stdClass); // object | The new Order resource

try {
    $result = $apiInstance->apiOrdersPostXXDeprecatedCheckoutCheckVoucherEn($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->apiOrdersPostXXDeprecatedCheckoutCheckVoucherEn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | **object**| The new Order resource | |

### Return type

**object**

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: `application/json`, `application/ld+json`
- **Accept**: `application/json`, `application/ld+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiOrdersPostXXDeprecatedCheckoutCheckVoucherFr()`

```php
apiOrdersPostXXDeprecatedCheckoutCheckVoucherFr($body): object
```

DEPRECATED - Check Voucher.

Creates a Order resource.

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


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array('key' => new \stdClass); // object | The new Order resource

try {
    $result = $apiInstance->apiOrdersPostXXDeprecatedCheckoutCheckVoucherFr($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->apiOrdersPostXXDeprecatedCheckoutCheckVoucherFr: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | **object**| The new Order resource | |

### Return type

**object**

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: `application/json`, `application/ld+json`
- **Accept**: `application/json`, `application/ld+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiOrdersPostXXDeprecatedCheckoutCheckVoucherRu()`

```php
apiOrdersPostXXDeprecatedCheckoutCheckVoucherRu($body): object
```

DEPRECATED - Check Voucher.

Creates a Order resource.

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


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array('key' => new \stdClass); // object | The new Order resource

try {
    $result = $apiInstance->apiOrdersPostXXDeprecatedCheckoutCheckVoucherRu($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->apiOrdersPostXXDeprecatedCheckoutCheckVoucherRu: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | **object**| The new Order resource | |

### Return type

**object**

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: `application/json`, `application/ld+json`
- **Accept**: `application/json`, `application/ld+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiOrdersPostXXDeprecatedCheckoutCheckVoucherUk()`

```php
apiOrdersPostXXDeprecatedCheckoutCheckVoucherUk($body): object
```

DEPRECATED - Check Voucher.

Creates a Order resource.

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


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array('key' => new \stdClass); // object | The new Order resource

try {
    $result = $apiInstance->apiOrdersPostXXDeprecatedCheckoutCheckVoucherUk($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->apiOrdersPostXXDeprecatedCheckoutCheckVoucherUk: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | **object**| The new Order resource | |

### Return type

**object**

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: `application/json`, `application/ld+json`
- **Accept**: `application/json`, `application/ld+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiOrdersPostXXDeprecatedCheckoutCheckVoucherZh()`

```php
apiOrdersPostXXDeprecatedCheckoutCheckVoucherZh($body): object
```

DEPRECATED - Check Voucher.

Creates a Order resource.

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


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array('key' => new \stdClass); // object | The new Order resource

try {
    $result = $apiInstance->apiOrdersPostXXDeprecatedCheckoutCheckVoucherZh($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->apiOrdersPostXXDeprecatedCheckoutCheckVoucherZh: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | **object**| The new Order resource | |

### Return type

**object**

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: `application/json`, `application/ld+json`
- **Accept**: `application/json`, `application/ld+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiOrdersPostXXDeprecatedCheckoutPlaceOrderDe()`

```php
apiOrdersPostXXDeprecatedCheckoutPlaceOrderDe($body): \OpenAPI\Client\Model\OrderOrderOutputDtoOrderRead
```

Place Order.

Creates a Order resource.

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


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array('key' => new \stdClass); // object | The new Order resource

try {
    $result = $apiInstance->apiOrdersPostXXDeprecatedCheckoutPlaceOrderDe($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->apiOrdersPostXXDeprecatedCheckoutPlaceOrderDe: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | **object**| The new Order resource | |

### Return type

[**\OpenAPI\Client\Model\OrderOrderOutputDtoOrderRead**](../Model/OrderOrderOutputDtoOrderRead.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: `application/json`, `application/ld+json`
- **Accept**: `application/json`, `application/ld+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiOrdersPostXXDeprecatedCheckoutPlaceOrderEn()`

```php
apiOrdersPostXXDeprecatedCheckoutPlaceOrderEn($body): \OpenAPI\Client\Model\OrderOrderOutputDtoOrderRead
```

Place Order.

Creates a Order resource.

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


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array('key' => new \stdClass); // object | The new Order resource

try {
    $result = $apiInstance->apiOrdersPostXXDeprecatedCheckoutPlaceOrderEn($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->apiOrdersPostXXDeprecatedCheckoutPlaceOrderEn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | **object**| The new Order resource | |

### Return type

[**\OpenAPI\Client\Model\OrderOrderOutputDtoOrderRead**](../Model/OrderOrderOutputDtoOrderRead.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: `application/json`, `application/ld+json`
- **Accept**: `application/json`, `application/ld+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiOrdersPostXXDeprecatedCheckoutPlaceOrderFr()`

```php
apiOrdersPostXXDeprecatedCheckoutPlaceOrderFr($body): \OpenAPI\Client\Model\OrderOrderOutputDtoOrderRead
```

Place Order.

Creates a Order resource.

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


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array('key' => new \stdClass); // object | The new Order resource

try {
    $result = $apiInstance->apiOrdersPostXXDeprecatedCheckoutPlaceOrderFr($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->apiOrdersPostXXDeprecatedCheckoutPlaceOrderFr: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | **object**| The new Order resource | |

### Return type

[**\OpenAPI\Client\Model\OrderOrderOutputDtoOrderRead**](../Model/OrderOrderOutputDtoOrderRead.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: `application/json`, `application/ld+json`
- **Accept**: `application/json`, `application/ld+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiOrdersPostXXDeprecatedCheckoutPlaceOrderRu()`

```php
apiOrdersPostXXDeprecatedCheckoutPlaceOrderRu($body): \OpenAPI\Client\Model\OrderOrderOutputDtoOrderRead
```

Place Order.

Creates a Order resource.

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


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array('key' => new \stdClass); // object | The new Order resource

try {
    $result = $apiInstance->apiOrdersPostXXDeprecatedCheckoutPlaceOrderRu($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->apiOrdersPostXXDeprecatedCheckoutPlaceOrderRu: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | **object**| The new Order resource | |

### Return type

[**\OpenAPI\Client\Model\OrderOrderOutputDtoOrderRead**](../Model/OrderOrderOutputDtoOrderRead.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: `application/json`, `application/ld+json`
- **Accept**: `application/json`, `application/ld+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiOrdersPostXXDeprecatedCheckoutPlaceOrderUk()`

```php
apiOrdersPostXXDeprecatedCheckoutPlaceOrderUk($body): \OpenAPI\Client\Model\OrderOrderOutputDtoOrderRead
```

Place Order.

Creates a Order resource.

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


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array('key' => new \stdClass); // object | The new Order resource

try {
    $result = $apiInstance->apiOrdersPostXXDeprecatedCheckoutPlaceOrderUk($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->apiOrdersPostXXDeprecatedCheckoutPlaceOrderUk: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | **object**| The new Order resource | |

### Return type

[**\OpenAPI\Client\Model\OrderOrderOutputDtoOrderRead**](../Model/OrderOrderOutputDtoOrderRead.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: `application/json`, `application/ld+json`
- **Accept**: `application/json`, `application/ld+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiOrdersPostXXDeprecatedCheckoutPlaceOrderZh()`

```php
apiOrdersPostXXDeprecatedCheckoutPlaceOrderZh($body): \OpenAPI\Client\Model\OrderOrderOutputDtoOrderRead
```

Place Order.

Creates a Order resource.

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


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array('key' => new \stdClass); // object | The new Order resource

try {
    $result = $apiInstance->apiOrdersPostXXDeprecatedCheckoutPlaceOrderZh($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->apiOrdersPostXXDeprecatedCheckoutPlaceOrderZh: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | **object**| The new Order resource | |

### Return type

[**\OpenAPI\Client\Model\OrderOrderOutputDtoOrderRead**](../Model/OrderOrderOutputDtoOrderRead.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: `application/json`, `application/ld+json`
- **Accept**: `application/json`, `application/ld+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
