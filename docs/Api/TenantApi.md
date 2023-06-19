# OpenAPI\Client\TenantApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiTenantsGetItem()**](TenantApi.md#apiTenantsGetItem) | **GET** /api/v2/instance/tenants/{uuid} | Retrieves a Tenant resource. |
| [**apiTenantsPutItem()**](TenantApi.md#apiTenantsPutItem) | **PUT** /api/v2/instance/tenants/{uuid} | Replaces the Tenant resource. |
| [**xXDeprecatedApiTenantsGetItem()**](TenantApi.md#xXDeprecatedApiTenantsGetItem) | **GET** /instance/tenants/{uuid} | Retrieves a Tenant resource. |
| [**xXDeprecatedApiTenantsPutItem()**](TenantApi.md#xXDeprecatedApiTenantsPutItem) | **PUT** /instance/tenants/{uuid} | Replaces the Tenant resource. |


## `apiTenantsGetItem()`

```php
apiTenantsGetItem($uuid): \OpenAPI\Client\Model\TenantTenantRead
```

Retrieves a Tenant resource.

Retrieves a Tenant resource.

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


$apiInstance = new OpenAPI\Client\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | Tenant identifier

try {
    $result = $apiInstance->apiTenantsGetItem($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->apiTenantsGetItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| Tenant identifier | |

### Return type

[**\OpenAPI\Client\Model\TenantTenantRead**](../Model/TenantTenantRead.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/ld+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiTenantsPutItem()`

```php
apiTenantsPutItem($uuid, $tenant_tenant_write): \OpenAPI\Client\Model\TenantTenantRead
```

Replaces the Tenant resource.

Replaces the Tenant resource.

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


$apiInstance = new OpenAPI\Client\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | Tenant identifier
$tenant_tenant_write = new \OpenAPI\Client\Model\TenantTenantWrite(); // \OpenAPI\Client\Model\TenantTenantWrite | The updated Tenant resource

try {
    $result = $apiInstance->apiTenantsPutItem($uuid, $tenant_tenant_write);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->apiTenantsPutItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| Tenant identifier | |
| **tenant_tenant_write** | [**\OpenAPI\Client\Model\TenantTenantWrite**](../Model/TenantTenantWrite.md)| The updated Tenant resource | |

### Return type

[**\OpenAPI\Client\Model\TenantTenantRead**](../Model/TenantTenantRead.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: `application/json`, `application/ld+json`
- **Accept**: `application/json`, `application/ld+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `xXDeprecatedApiTenantsGetItem()`

```php
xXDeprecatedApiTenantsGetItem($uuid): \OpenAPI\Client\Model\TenantTenantRead
```

Retrieves a Tenant resource.

Retrieves a Tenant resource.

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


$apiInstance = new OpenAPI\Client\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | Tenant identifier

try {
    $result = $apiInstance->xXDeprecatedApiTenantsGetItem($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->xXDeprecatedApiTenantsGetItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| Tenant identifier | |

### Return type

[**\OpenAPI\Client\Model\TenantTenantRead**](../Model/TenantTenantRead.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/ld+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `xXDeprecatedApiTenantsPutItem()`

```php
xXDeprecatedApiTenantsPutItem($uuid, $tenant_tenant_write): \OpenAPI\Client\Model\TenantTenantRead
```

Replaces the Tenant resource.

Replaces the Tenant resource.

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


$apiInstance = new OpenAPI\Client\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | Tenant identifier
$tenant_tenant_write = new \OpenAPI\Client\Model\TenantTenantWrite(); // \OpenAPI\Client\Model\TenantTenantWrite | The updated Tenant resource

try {
    $result = $apiInstance->xXDeprecatedApiTenantsPutItem($uuid, $tenant_tenant_write);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->xXDeprecatedApiTenantsPutItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| Tenant identifier | |
| **tenant_tenant_write** | [**\OpenAPI\Client\Model\TenantTenantWrite**](../Model/TenantTenantWrite.md)| The updated Tenant resource | |

### Return type

[**\OpenAPI\Client\Model\TenantTenantRead**](../Model/TenantTenantRead.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: `application/json`, `application/ld+json`
- **Accept**: `application/json`, `application/ld+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
