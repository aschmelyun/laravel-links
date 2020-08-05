## Laravel Links

This is a demo application built alongside a video tutorial showing how to create a [linktr.ee](https://linktr.ee) clone using the [Laravel](https://laravel.com) PHP framework.

This project comprises three simple data models and related tables:

- **Users** are individual accounts that a person can create on the app
- **Links** belong to a User and hold both a name and a valid URL
- **Visits** track each click that occurs on a particular link and records the info associated with it

This demo app makes use of Laravel's default bootstrapped views and authentication routes. There's a very basic dashboard that a user is directed to after logging in where they can see their links, view the amount of visits for each, add a new link, or modify the display settings on their link page.

Visiting a particular user's links page displays a simple list of their added links, with the background color and text color they selected on their settings page.

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## License

The Laravel framework and this application is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
