# ListcleanSwaggerClient-php
Listclean APIs. For API reference doc at [https://api.listclean.xyz](https://api.listclean.xyz).

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 0.1.0
- Build package: io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/listclean/listclean-swagger-php.git"
    }
  ],
  "require": {
    "listclean/listclean-swagger-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/ListcleanSwaggerClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = ListcleanSwagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ListcleanSwagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new ListcleanSwagger\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->accountProfileGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->accountProfileGet: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://api.listclean.xyz/v1/*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccountsApi* | [**accountProfileGet**](docs/Api/AccountsApi.md#accountprofileget) | **GET** /account/profile/ | Get account profile details
*AccountsApi* | [**accountProfilePost**](docs/Api/AccountsApi.md#accountprofilepost) | **POST** /account/profile/ | Update account profile details
*ListsApi* | [**listsGet**](docs/Api/ListsApi.md#listsget) | **GET** /lists/ | Get the all list info
*ListsApi* | [**listsListIdDelete**](docs/Api/ListsApi.md#listslistiddelete) | **DELETE** /lists/{list_id} | Delete the single list
*ListsApi* | [**listsListIdGet**](docs/Api/ListsApi.md#listslistidget) | **GET** /lists/{list_id} | Get the single list info
*UploadsApi* | [**uploadsGet**](docs/Api/UploadsApi.md#uploadsget) | **GET** /uploads/ | Get the list of uploads (csv upload)
*UploadsApi* | [**uploadsPost**](docs/Api/UploadsApi.md#uploadspost) | **POST** /uploads/ | Start the Upload (csv upload)
*UploadsApi* | [**uploadsUploadIdGet**](docs/Api/UploadsApi.md#uploadsuploadidget) | **GET** /uploads/{upload_id} | Get status of a Upload
*UploadsApi* | [**uploadsUploadIdPost**](docs/Api/UploadsApi.md#uploadsuploadidpost) | **POST** /uploads/{upload_id} | Upload a Chunk [CHUNKS] (csv upload)


## Documentation For Models

 - [ApiResponse](docs/Model/ApiResponse.md)
 - [Body](docs/Model/Body.md)
 - [Body1](docs/Model/Body1.md)
 - [Body2](docs/Model/Body2.md)
 - [InlineResponse200](docs/Model/InlineResponse200.md)
 - [InlineResponse2001](docs/Model/InlineResponse2001.md)
 - [InlineResponse2001Data](docs/Model/InlineResponse2001Data.md)
 - [InlineResponse2002](docs/Model/InlineResponse2002.md)
 - [InlineResponse2002Data](docs/Model/InlineResponse2002Data.md)
 - [InlineResponse2002DataChunkDetails](docs/Model/InlineResponse2002DataChunkDetails.md)
 - [InlineResponse2003](docs/Model/InlineResponse2003.md)
 - [InlineResponse2004](docs/Model/InlineResponse2004.md)
 - [InlineResponse2004Data](docs/Model/InlineResponse2004Data.md)
 - [InlineResponse2004DataAnalytics](docs/Model/InlineResponse2004DataAnalytics.md)
 - [InlineResponse2004DataAnalyticsCleanSummary](docs/Model/InlineResponse2004DataAnalyticsCleanSummary.md)
 - [InlineResponse2004DataAnalyticsDirtySummary](docs/Model/InlineResponse2004DataAnalyticsDirtySummary.md)
 - [InlineResponse2004DataAnalyticsSummary](docs/Model/InlineResponse2004DataAnalyticsSummary.md)
 - [InlineResponse2004DataAnalyticsSummaryClean](docs/Model/InlineResponse2004DataAnalyticsSummaryClean.md)
 - [InlineResponse2004DataAnalyticsSummaryDirty](docs/Model/InlineResponse2004DataAnalyticsSummaryDirty.md)
 - [InlineResponse2004DataCost](docs/Model/InlineResponse2004DataCost.md)
 - [InlineResponse2004DataCostCost](docs/Model/InlineResponse2004DataCostCost.md)
 - [InlineResponse2004DataCostRate](docs/Model/InlineResponse2004DataCostRate.md)
 - [InlineResponse2004DataLists](docs/Model/InlineResponse2004DataLists.md)
 - [InlineResponse2005](docs/Model/InlineResponse2005.md)
 - [InlineResponse2006](docs/Model/InlineResponse2006.md)
 - [InlineResponse2007](docs/Model/InlineResponse2007.md)
 - [InlineResponse2007Data](docs/Model/InlineResponse2007Data.md)
 - [InlineResponse200Data](docs/Model/InlineResponse200Data.md)


## Documentation For Authorization


## api_key

- **Type**: API key
- **API key parameter name**: X-Auth-Token
- **Location**: HTTP header


## Author

support@listclean.xyz


