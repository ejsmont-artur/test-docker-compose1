# Docker Compose Hello World 

All that you need to do after cloning this repo is run

    sudo ./docker-compose up

This will build docker images for all containers and start them all up. Then you can start multiple instances in the future etc. Cluster is wired together with:
- one nginx container as load balancer
- three php containers as web servers
- one redis container as the db
 
Nginx exposes port 80 externally so you should be able to map it on you host machine and view http://127.0.0.1/
    
    
