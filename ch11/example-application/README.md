# Continuous Integration example

This is a simple example application to demonstrate
1. how to build a Continuous Integration pipeline with GitHub Actions
2. how to set up a local pipeline using CaptainHook

## Installation
To install it locally, simply run

`composer install`

## Hot to test GitHub Actions

To test the GitHub Actions pipeline, please create a separate GitHub repository from the project folder. This is necessary, because GitHub requires the `.github/worfklows` folder to be located in the project root.

## How to test CaptainHook

After running `composer install`, the `pre-commit` hook is already installed. To test it, simply change a PHP file, add it using `git add`, and commit the changes using `git commit`.