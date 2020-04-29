## Laravel Sanctum Project Skeleton

In this project you may simply login with Laravel Sanctum and list users with generated access token after login.

Project is not supposesed to be used in production, just for testing purposes. Use it on your risk!

Project basically uses SQLite, you may change it if you like

## Installation

* Clone the repository `git clone git@github.com:sineld/laravel-sanctum-project-skeleton.git sanctum`
* Cd into project directory
* Run `composer install` command
* Run `cp .env.example .env` to generate .env file
* Run `php artisan migrate --seed` to create needfull tables and users.
* Redirect Postman to `http://projecturl/api/login` with `email` and `password` *form-data* with POST request
* Enter `sinan@sinaneldem.com.tr` as email and `secret` as password

If everything has gone correct, you will get a response like

	{
		"status_code": 200,
		"access_token": "wG0pm5mZBRYP9sbxR8felKggw6pQmMDDY10TQ5qwuUSh7g3kllvrd0oYycxTog2Uz76jRQPdPzAL3SM8",
		"token_type": "Bearer"
	}

Cool, now list all users with generated Bearer token

* Rediredt Postman to `http://projecturl/api/users` with `Bearer wG0pm5mZBRYP9sbxR8felKggw6pQmMDDY10TQ5qwuUSh7g3kllvrd0oYycxTog2Uz76jRQPdPzAL3SM8` Token, in Auth tab with GET request

You'll probably see a list like below:

	[
		{
			"id": 5,
			"name": "Sinan Eldem",
			"email": "sinan@sinaneldem.com.tr",
			"email_verified_at": null,
			"created_at": null,
			"updated_at": null
		},
		{
			"id": 6,
			"name": "Sanctum Tester",
			"email": "info@laravel.gen.tr",
			"email_verified_at": null,
			"created_at": null,
			"updated_at": null
		}
	]

You're done!

Now dive into codes and generate your first API application!

Thanks!

[Sinan Eldem](https://www.sinaneldem.com.tr)

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
