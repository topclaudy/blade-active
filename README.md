Blade Active
=============

**Blade Active** provides Blade directives for the [Active](https://github.com/dwightwatson/active) package. 

## Installation

The recommended way to install **Blade Active** is through [Composer](http://getcomposer.org/)

```bash
$ composer require awobaz/blade-active
```

## Usage

First, read the documentation of the [Active](https://github.com/dwightwatson/active) package.

**Blade Active** provides 2 Blade directives to wrap the functionality of the `active()` and `is_active()` helpers:

```php
@active()
@isactive()
```

### Using @active()

```php
<a href="{{ route('posts.index') }}" class="@active('posts.index')">All posts</a>
```

### Using @active()

```php
@isactive('posts/*')
    You're looking at a blog post!
@endisactive
```
## Contributing

Please read [CONTRIBUTING.md](https://github.com/topclaudy/blade-active/blob/master/CONTRIBUTING.md) for details on our code of conduct, and the process for submitting pull requests to us.

## Versioning

We use [SemVer](http://semver.org/) for versioning. For the versions available, see the [tags on this repository](https://github.com/topclaudy/blade-active/tags).


## Authors

* [Claudin J. Daniel](https://github.com/topclaudy) - *Blade directives*
* [Dwight Watson](https://github.com/dwightwatson) - *Initial work*

## License

**Blade Active** is licensed under the [MIT License](http://opensource.org/licenses/MIT).