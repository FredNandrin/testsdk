# OpenAPI\Client\ProbatixInstanceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiProbatixInstancesPostCollection()**](ProbatixInstanceApi.md#apiProbatixInstancesPostCollection) | **POST** /api/v2/instance/probatix_instances | Creates a ProbatixInstance resource. |
| [**apiProbatixInstancesPostXXDeprecatedCollection()**](ProbatixInstanceApi.md#apiProbatixInstancesPostXXDeprecatedCollection) | **POST** /instance/probatix_instances | Creates a ProbatixInstance resource. |


## `apiProbatixInstancesPostCollection()`

```php
apiProbatixInstancesPostCollection($probatix_instance_instance_write): \OpenAPI\Client\Model\ProbatixInstanceInstanceRead
```

Creates a ProbatixInstance resource.

Creates a ProbatixInstance resource.

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


$apiInstance = new OpenAPI\Client\Api\ProbatixInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$probatix_instance_instance_write = new \OpenAPI\Client\Model\ProbatixInstanceInstanceWrite(); // \OpenAPI\Client\Model\ProbatixInstanceInstanceWrite | The new ProbatixInstance resource

try {
    $result = $apiInstance->apiProbatixInstancesPostCollection($probatix_instance_instance_write);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProbatixInstanceApi->apiProbatixInstancesPostCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **probatix_instance_instance_write** | [**\OpenAPI\Client\Model\ProbatixInstanceInstanceWrite**](../Model/ProbatixInstanceInstanceWrite.md)| The new ProbatixInstance resource | |

### Return type

[**\OpenAPI\Client\Model\ProbatixInstanceInstanceRead**](../Model/ProbatixInstanceInstanceRead.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: `application/json`, `application/ld+json`
- **Accept**: `application/json`, `application/ld+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiProbatixInstancesPostXXDeprecatedCollection()`

```php
apiProbatixInstancesPostXXDeprecatedCollection($probatix_instance_instance_write): \OpenAPI\Client\Model\ProbatixInstanceInstanceRead
```

Creates a ProbatixInstance resource.

Creates a ProbatixInstance resource.

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


$apiInstance = new OpenAPI\Client\Api\ProbatixInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$probatix_instance_instance_write = new \OpenAPI\Client\Model\ProbatixInstanceInstanceWrite(); // \OpenAPI\Client\Model\ProbatixInstanceInstanceWrite | The new ProbatixInstance resource

try {
    $result = $apiInstance->apiProbatixInstancesPostXXDeprecatedCollection($probatix_instance_instance_write);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProbatixInstanceApi->apiProbatixInstancesPostXXDeprecatedCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **probatix_instance_instance_write** | [**\OpenAPI\Client\Model\ProbatixInstanceInstanceWrite**](../Model/ProbatixInstanceInstanceWrite.md)| The new ProbatixInstance resource | |

### Return type

[**\OpenAPI\Client\Model\ProbatixInstanceInstanceRead**](../Model/ProbatixInstanceInstanceRead.md)

### Authorization

[apiKey](../../README.md#apiKey), [jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: `application/json`, `application/ld+json`
- **Accept**: `application/json`, `application/ld+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
