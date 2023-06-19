# OpenAPI\Client\UserApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiApiv2backendusersUuidPatch()**](UserApi.md#apiApiv2backendusersUuidPatch) | **PATCH** /api/v2/backend/users/{uuid} | Updates the User resource. |


## `apiApiv2backendusersUuidPatch()`

```php
apiApiv2backendusersUuidPatch($uuid, $user): \OpenAPI\Client\Model\User
```

Updates the User resource.

User has to be logged in. Cannot edit other Users.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string | User identifier
$user = new \OpenAPI\Client\Model\User(); // \OpenAPI\Client\Model\User | The updated User resource

try {
    $result = $apiInstance->apiApiv2backendusersUuidPatch($uuid, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->apiApiv2backendusersUuidPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| User identifier | |
| **user** | [**\OpenAPI\Client\Model\User**](../Model/User.md)| The updated User resource | |

### Return type

[**\OpenAPI\Client\Model\User**](../Model/User.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/merge-patch+json`
- **Accept**: `application/json`, `application/ld+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
