#!/bin/sh

echo "\nStarting project PHP Sample Server...";

echo "\nBuilding docker image";
docker build -t php .

echo "\nRunning GIO's PHP Server";
docker run -p 8080:80 php


