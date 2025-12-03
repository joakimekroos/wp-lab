# wp-lab
This is a testing setup for Wordpress using Lando, Twig, wp--cli

## Run locally

- Be sure to have [Lando](https://docs.lando.dev/install/linux.html) installed

- Grab this repo

- Run `lando start`

- Run sthe installer
  - OR use the `db-init.sql` (unzip it first)
  - Run `lando wp db import <path-to-file>`
- Log in to wp-admin using CLI (not yet fully functional)