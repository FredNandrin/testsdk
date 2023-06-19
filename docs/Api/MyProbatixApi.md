# OpenAPI\Client\MyProbatixApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiApiInternalv3emailPost()**](MyProbatixApi.md#apiApiInternalv3emailPost) | **POST** /api-internal/v3/email | Sends email |
| [**apiApiv3myprobatixbookingDtoPatientEventdocumentsTypeGet()**](MyProbatixApi.md#apiApiv3myprobatixbookingDtoPatientEventdocumentsTypeGet) | **GET** /api/v3/myprobatix/booking-dto/{patientEvent}/documents/{type} | Retrieves a document |


## `apiApiInternalv3emailPost()`

```php
apiApiInternalv3emailPost($email_dto_email_write): \OpenAPI\Client\Model\EmailDto
```

Sends email

Sends email to the given receiverEmail, available types:                   myProbatixSignUp                 myProbatixActivation                 myProbatixPasswordReset                 myProbatixConfirmation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MyProbatixApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email_dto_email_write = new \OpenAPI\Client\Model\EmailDtoEmailWrite(); // \OpenAPI\Client\Model\EmailDtoEmailWrite | The new EmailDto resource

try {
    $result = $apiInstance->apiApiInternalv3emailPost($email_dto_email_write);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyProbatixApi->apiApiInternalv3emailPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email_dto_email_write** | [**\OpenAPI\Client\Model\EmailDtoEmailWrite**](../Model/EmailDtoEmailWrite.md)| The new EmailDto resource | |

### Return type

[**\OpenAPI\Client\Model\EmailDto**](../Model/EmailDto.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`, `application/ld+json`
- **Accept**: `application/json`, `application/ld+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiApiv3myprobatixbookingDtoPatientEventdocumentsTypeGet()`

```php
apiApiv3myprobatixbookingDtoPatientEventdocumentsTypeGet($patient_event, $type): \OpenAPI\Client\Model\MyDocumentDtoDocumentRead
```

Retrieves a document

Retrieves a base64 encoded PDF document or URL, available types:                   returnPolicy,                  refundInvoice,                  bookingConfirmation,                  certificate,                  invoice,                 js_test_result

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: jwt
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MyProbatixApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$patient_event = 'patient_event_example'; // string | MyDocumentDto identifier
$type = 'type_example'; // string | MyDocumentDto identifier

try {
    $result = $apiInstance->apiApiv3myprobatixbookingDtoPatientEventdocumentsTypeGet($patient_event, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyProbatixApi->apiApiv3myprobatixbookingDtoPatientEventdocumentsTypeGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **patient_event** | **string**| MyDocumentDto identifier | |
| **type** | **string**| MyDocumentDto identifier | |

### Return type

[**\OpenAPI\Client\Model\MyDocumentDtoDocumentRead**](../Model/MyDocumentDtoDocumentRead.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/ld+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
