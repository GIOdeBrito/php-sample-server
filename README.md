# PHP Sample Server

This is a model repository for future PHP personal projects and for studying.

The repository was made to work on Github codespaces so Apache was not yet configured
and PHP was already pre-installed.

## Requirements

- A Linux-running machine (Preferably)
- Docker
- Docker compose

## Network

Before running the application it is necessary to have their network up just so website
and server may communicate with each other. 

Make sure the network is created, if not, create it before moving onto the next section.

```bash
sudo docker network create sample-php-network
```

Then, inspect the list of active networks.

```bash
sudo docker network ls
```

The network ``sample-php-network`` will appear, much probably, at the very bottom.

## Run

To run the application, first build and prepare the images.

```bash
sudo docker-compose build 
```

Then, to run the containers, or to update the container with the new
image, run the following command.

```bash
sudo docker-compose up -d
```

When necessary to stop the containers run the command below.

```bash
sudo docker-compose down
```

## CodeSpaces

If you encounter the error of 'CORS is missing', or cannot make a request to the server.
Set the ``port visibility`` on the ports to public.
