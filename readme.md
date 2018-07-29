# Codeigniter Blade Starter

Original Codeigniter version 3.1.8 with Blade as a template engine.

## Installation

Clone or download this repository and run `composer update`.

## Usage

Just return view helper with two arguments. The first argument is path to blade file, the second argument is data (optional).

```
// application/controllers/Welcome.php

public function index()
{
    return view('welcome_message');
}
```

## Documentation

 * [Codeigniter](https://www.codeigniter.com/user_guide/)
 * [Blade Template](https://laravel.com/docs/5.6/blade)
