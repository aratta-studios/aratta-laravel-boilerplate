<p align="center">
<img height="300px" src="https://github.com/Esperlos/laravel_esperlos_boilerplate/blob/master/eperlos_laravel_logo.png?raw=true">
</p>

## Aratta Laravel Boilerplate

+CedarMapHelper for handling cedar map apis

+FirebaseHelper for handling firebase apis

+JalaliDateHelper, NumbersHelper for handling persian date and numbers

+SmsPanelHelper for handling sms panel apis

+UploadHelper for handling file and image uploads

+ResponseHelper, InputHelper for easier api handling using a better pattern

+ControllerGenerator to generate controllers with our pattern

+Vue Generators to generate vue pages / stores / components with our pattern

+Setup vue, vuex, vue router, vuetify and other vue essential packages by default

+Done some other customizes for easier use of Helpers

+New example for Model/Controller/Vue files

+Jwt ready (maybe needed a few configs from this link: https://jwt-auth.readthedocs.io/en/develop/ )

# Setup

```
composer create-project --prefer-dist aratta-studios/aratta-laravel-boilerplate ProjectName
cd ProjectName
npm install
php artisan jwt:secret
```

then you can  set db configs, set migrations and so on ...


# Generating Controller

This command will generate a controller in app/http/controller/api/ folder

```
php ControllerGenerator.php --name=ControllerName
```

# Generating Vue Page and Store

This command will generate a vue page in resources/js/ui/pages/ folder

And generates a related vuex store in resources/js/store/ folder

With the same name then adds the created store module in the store/index.js

```
php VuePageGenerator.php --name=pageName
```


# Generating Vue Components

This command will generate a component in resources/js/ui/components/ folder

```
php VuePageGenerator.php --name=componentName
```


# Run

```
php artisan serve
```

```
npm run watch
```
# Example Routes

default example route for vue:

http://localhost:8000/

default example routes for api:

http://localhost:8000/api/v1/example/create-example-user

Body:
```json
{
	"field_one":"Hello",
	"field_two":"Word"
}
```

http://localhost:8000/api/v1/example/edit-example-profile

Body:

```json
{
	"api_token":"FLH7CMhUiDN54OkjFBxN1CeWnXIgjsJY36Gz3lCy7IEia81MO5lG9UW7efGK",
		"field_one":"Hello",
	"field_two":"Sajjad"

}
```

http://localhost:8000/api/v1/example/get-example


Body:


```json
{
	"api_token":"FLH7CMhUiDN54OkjFBxN1CeWnXIgjsJY36Gz3lCy7IEia81MO5lG9UW7efGK",
		"field_one":"Hello",
	"field_two":"Sajjad"

}
```

http://localhost:8000/api/v1/example/get-examples-list


Body:


```json
{
	"api_token":"FLH7CMhUiDN54OkjFBxN1CeWnXIgjsJY36Gz3lCy7IEia81MO5lG9UW7efGK",
	"offset":"0"
}
```

# InputHelper

This helper checks for valid input from user

-First parameter is just Request that you receive from controller function.

-Second parameter is an array of request parameters that you want to check.

-Last parameter is a callback function with Response parameter this function will be called when checks are passed.

Import:
```php
use App\Http\Helpers\InputHelper;
```
Usage:
```php
InputHelper::inputChecker(
    $request,
    [
        $request->field_one,
        $request->field_two,
        // All fields that you need to check
    ],
    function (Request $request) {
        // Input is correct do something
    }
);
```
If you don't need to check any fields:

```php
InputHelper::inputChecker(
    $request,
    null,
    function (Request $request) {
        // Do something
    }
);
```

# ResponseHelper

This helper helps you to provide an integrated json response for all apis

-First parameter is error message, if you don't have any errors you can set null value for it.

-Second parameter is Http Response code.

-Last parameter is data that you want send to user. it can be an array or object or even a string.

Import:
```php
use App\Http\Helpers\ResponseHelper;
```
Usage:
```php
ResponseHelper::jsonResponse(null, Response::HTTP_OK, config('messages.success'))->send();
```
Sample Output:
```json
{
    "errors": null,
    "status": 200,
    "data": [
        {
            "id": 2,
            "api_token": "FeDsHsoDjJZXd2gxl7c80WxYjobMB0ptzP3FZn5cU2wq4KIR21Y4qtssGoPx",
            "field_one": "Hello",
            "field_two": "Word",
            "created_at": "2019-05-31 12:25:11",
            "updated_at": "2019-05-31 12:25:11"
        },
        {
            "id": 1,
            "api_token": "FLH7CMhUiDN54OkjFBxN1CeWnXIgjsJY36Gz3lCy7IEia81MO5lG9UW7efGK",
            "field_one": "Hello",
            "field_two": "Sajjad",
            "created_at": "2019-05-31 12:24:43",
            "updated_at": "2019-05-31 12:43:58"
        }
    ]
}
```
# CedarMapHelper

Import:
```php
use App\Http\Helpers\CedarMapHelper;
```
Usage:
```php
$directionsData = CedarMapHelper::getDirectionsData(
    (object) ['latitude' => $request->get('start_lat'), 'longitude' => $request->get('start_lng')],
    (object) ['latitude' => $request->get('end_lat'), 'longitude' => $request->get('end_lng')]
);
```

# FirebaseHelper

Import:
```php
use App\Http\Helpers\FirebaseHelper;
```
Usage:
```php
FirebaseHelper::sendFcmNotificationMessage($pushTokenArray, $data, 'Text');
```
# SmsPanelHelper

Import:
```php
use App\Http\Helpers\SmsPanelHelper;
```
Usage:
```php
SmsPanelHelper::sendSms($phoneNumber), $tempCode);
```

