# Google Package for FuelPHP - with OAuth2 support

This package provides support for the Google APIs using OAuth2 tokens.
It does _not_ provide an authorisation mechanism, for that, we recommend [fuel-packages/fuel-oauth2](http://github.com/fuel-packages/fuel-oauth2) (or [fuel-packages/fuel-oauth2](http://github.com/happyninjas/fuel-ninjauth)).

Please feel free to pull-request additional APIs, we'll only be adding them if we need them/are paid to add them ;)

Thanks go to [ninjarite/fuel-google](http://github.com/ninjarite/fuel-google) for their inspiration :)

## Dependencies

This package requires fuel-packages/fuel-oauth2 in order to refresh access tokens when they expire.

## Installation

This package follows standard installation rules, which can be found within the [FuelPHP Documentation for Packages] (http://fuelphp.com/docs/general/packages.html)

## Usage

```php
$api = \Google\Analytics::forge(array(
	'tokens' => array(
		'access_token' => $access_token,
		'refresh_token' => $refresh_token,
		'expires' => $expires_at,
	),
	'client' => array(
		'id'		=> $app_client_id,
		'secret'	=> $app_client_secret,
	),
));
```

## Future work

- Move client id and secret to config file (still allow people to manually set it, config as fallback)
- Finish implementing Google Analytics
- Add more APIs

