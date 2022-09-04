# OpenAPI example

## Installation

Run `composer install`

## Create the API documentation

1. `vendor/bin/openapi src/Annotations -o openapi-annotations.yaml` to create the documentation using the Annotations example
2. `vendor/bin/openapi src/Attributes -o openapi-attributes.yaml` to create the documentation using the Attributes example

## Compare both YAML files

To check for differences between both YAML files, you can use `git diff --no-index to compare files which are not tracked by git:

`git diff --no-index openapi-annotations.yaml openapi-attributes.yaml`

If all went fine, you should not get any difference reported.

## Swagger UI

As quick example, pull the Swagger-UI from Docker Hub:

`docker pull swaggerapi/swagger-ui`

Since Swagger-UI required a JSON instead a YAML, create one first:

`vendor/bin/openapi src/Attributes -o openapi-attributes.json`

Then, run the container locally:

```
docker run -p 80:8080 -e SWAGGER_JSON=/foo/openapi-attributes.json -v `pwd`:/foo swaggerapi/swagger-ui
```

Now you can open http://localhost in your browser.