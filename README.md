# Container Base Images

## PHP Base Image with OpenTelemetry, Redis, and Xdebug

This Dockerfile builds a PHP base image based on `php:{PHP_VERSION}-fpm` with the following extensions installed:

* **gRPC (v1.67.0):**  For building high-performance, open-source, general-purpose RPC frameworks.
* **Protobuf (v4.28.3):** Google's language-neutral, platform-neutral, extensible mechanism for serializing structured data.
* **OpenTelemetry (v1.1.0):**  A collection of tools, APIs, and SDKs used to instrument, generate, collect, and export telemetry data (metrics, logs, and traces) for analysis.
* **Redis (v6.1.0):** An in-memory data structure store, used as a database, cache, and message broker.
* **Xdebug (v3.3.2):** A powerful debugging and profiling tool for PHP.

### Usage

This image is intended to be used as a base image for your PHP applications that require the above extensions. You can build upon this image by adding your application code and any further customization.

**Example:**

```dockerfile
FROM docker.io/chtkehao/php-fpm:latest

# Add your application code
COPY . /var/www/html

# ... any further customization
```

### Building the Image

```bash
docker build -f php/Dockerfile.php -t docker.io/your-dockerhub-username/php-fpm ./php
```

**Note:** Replace `your-dockerhub-username` with your actual Docker Hub username or desired image name.

### PHP Version

Currently, this image **only supports PHP version 8.3**. The `PHP_VERSION` argument is set to 8.3 by default. 


### Included PHP Configuration

This image includes a custom `php.ini` file located at `/usr/local/etc/php/conf.d/custom-php.ini`. 
You can modify this file to adjust PHP settings according to your needs. Remember to rebuild the image after making any changes to the `php.ini` file.
