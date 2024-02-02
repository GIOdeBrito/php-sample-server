# PHP Sample Server

This is a model repository for future PHP projects, and also to for practice.

The repository was made to work on Github codespaces so Apache was not configured
and PHP was already pre-installed.

## Running
Open the terminal and run the shell script located at the root directory.

```bash
./start_php.sh
```

The `docker` build and run will take care of everything basically.
Then open your your browser and access localhost on port 8080.

Alternatively, one can inspect the microcosm of the application by running it
together with bash.

```bash
docker run -it --rm php /bin/bash
```
