# ListcleanSwagger\Client\UploadsApi

All URIs are relative to *https://api.listclean.xyz/v1/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**uploadsGet**](UploadsApi.md#uploadsGet) | **GET** /uploads/ | Get the list of uploads (csv upload)
[**uploadsPost**](UploadsApi.md#uploadsPost) | **POST** /uploads/ | Start the Upload (csv upload)
[**uploadsUploadIdGet**](UploadsApi.md#uploadsUploadIdGet) | **GET** /uploads/{upload_id} | Get status of a Upload
[**uploadsUploadIdPost**](UploadsApi.md#uploadsUploadIdPost) | **POST** /uploads/{upload_id} | Upload a Chunk [CHUNKS] (csv upload)


# **uploadsGet**
> \ListcleanSwagger\Client\Model\InlineResponse200 uploadsGet()

Get the list of uploads (csv upload)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = ListcleanSwagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ListcleanSwagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new ListcleanSwagger\Client\Api\UploadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->uploadsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UploadsApi->uploadsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\ListcleanSwagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadsPost**
> \ListcleanSwagger\Client\Model\InlineResponse2001 uploadsPost($body)

Start the Upload (csv upload)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = ListcleanSwagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ListcleanSwagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new ListcleanSwagger\Client\Api\UploadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \ListcleanSwagger\Client\Model\Body(); // \ListcleanSwagger\Client\Model\Body | The body of the API call

try {
    $result = $apiInstance->uploadsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UploadsApi->uploadsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ListcleanSwagger\Client\Model\Body**](../Model/Body.md)| The body of the API call | [optional]

### Return type

[**\ListcleanSwagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadsUploadIdGet**
> \ListcleanSwagger\Client\Model\InlineResponse2002 uploadsUploadIdGet($upload_id)

Get status of a Upload

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = ListcleanSwagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ListcleanSwagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new ListcleanSwagger\Client\Api\UploadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$upload_id = 56; // int | 

try {
    $result = $apiInstance->uploadsUploadIdGet($upload_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UploadsApi->uploadsUploadIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **upload_id** | **int**|  |

### Return type

[**\ListcleanSwagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadsUploadIdPost**
> \ListcleanSwagger\Client\Model\InlineResponse2003 uploadsUploadIdPost($upload_id, $body)

Upload a Chunk [CHUNKS] (csv upload)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = ListcleanSwagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ListcleanSwagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new ListcleanSwagger\Client\Api\UploadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$upload_id = 56; // int | 
$body = new \ListcleanSwagger\Client\Model\Body1(); // \ListcleanSwagger\Client\Model\Body1 | The body of the API call

try {
    $result = $apiInstance->uploadsUploadIdPost($upload_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UploadsApi->uploadsUploadIdPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **upload_id** | **int**|  |
 **body** | [**\ListcleanSwagger\Client\Model\Body1**](../Model/Body1.md)| The body of the API call | [optional]

### Return type

[**\ListcleanSwagger\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

