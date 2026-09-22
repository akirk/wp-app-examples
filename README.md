# wp-app examples

Example WordPress plugins for [`akirk/wp-app`](https://github.com/akirk/wp-app).

## Try in Playground

- [Minimal App](https://playground.wordpress.net/?blueprint-url=https://raw.githubusercontent.com/akirk/wp-app-examples/main/minimal-appj.json)
- [Community App](https://playground.wordpress.net/?blueprint-url=https://raw.githubusercontent.com/akirk/wp-app-examples/main/community-app.json)
- [Encrypted Contacts App](https://playground.wordpress.net/?blueprint-url=https://raw.githubusercontent.com/akirk/wp-app-examples/main/encrypted-contacts-app.json)

## Installation

Each example installs the published `akirk/wp-app` package through Composer and
does not assume a particular local directory layout.

```sh
cd minimal-app
composer install
```

### Use a local wp-app checkout

To develop an example against a local checkout of `akirk/wp-app`, add a Composer
path repository to the example's `composer.json`. For example, if `wp-app` and
`wp-app-examples` are sibling directories:

```json
{
    "repositories": [
        {
            "type": "path",
            "url": "../../wp-app",
            "options": {
                "symlink": true
            }
        }
    ]
}
```

The path is resolved relative to the example directory (such as
`wp-app-examples/minimal-app`). Install or refresh the dependency from that
directory:

```sh
composer update akirk/wp-app
```

Composer will symlink the local checkout into `vendor/akirk/wp-app`, so changes
made there are immediately available to the example.

You can then run the example locally with WordPress Playground:

```sh
npx @wp-playground/cli@latest server --auto-mount --login --follow-symlinks
```

Run this command from the example directory. The `--follow-symlinks` option
allows Playground to load the symlinked local `wp-app` checkout.
