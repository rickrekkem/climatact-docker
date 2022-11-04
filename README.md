# 🌍 Climatact Complete Docker Container

This image is built on [this repo](https://github.com/AminMkh/docker-php7-oci8-apache)

It contains PHP 7, Apache 2, Oracle's OCI8 extension.


<img src="https://i.imgur.com/L0001P9.png" width="500">

## Setup
- **Fork** this repo and clone the forked repo into a local directory for development.

- Enter workspace: ```cd climatact-docker```

- Add **username** and **password** credentials to db/dbconnect.php

```diff
- Important -
! The database will not connect, and therefore Climatact will not work properly, 
! without using UF's anyconnect VPN. 
+ Connect before running the image.
``` 

## Requirements

To use this image, [docker-compose install](https://docs.docker.com/compose/) is required:

### run image
```
docker-compose up
```

### kill image

```
docker-compose down
```


App running via:

http://localhost/

