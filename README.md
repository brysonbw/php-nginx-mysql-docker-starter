# Minimal PHP & Nginx Docker Starter

For **development purposes only**. 

</br>

PDO and MySQL are installed. However, I didn't include MySQL in docker-compose.yml (uncomment to include). 
</br>

Same goes for [composer](https://getcomposer.org/) in ./docker/php/Dockerfile.

</br>

## Generate Env File For MySQL Vars
```bash
$ cp .env.example var.env  # or .env.development, .env, ect...
```

## Usage: Spin Up/Run Containers
```bash
docker-compose up -d
```
> Open http://localhost:8000/ to view in the browser
