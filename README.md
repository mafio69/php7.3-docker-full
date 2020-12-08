# php7.3-docker-full  
Start server in docker(php + mariadb + phpadmin + apache2) no frameworks.  
  
Tested on ubuntu 20.04  
To run on the system, docker and docker-compose must be installed.    
    1. [install docker](https://docs.docker.com/compose/install)    
    2. [install docker-compose](https://docs.docker.com/compose/install)    
  
##  Commands:  
  - `docker-compose build` - First command.    
  - `docker-compose up` - Second command to start docker and after building the container.    
  - `docker ps` - List of current containers.    
  - `docker exec -it pbweb bash` - Entering the container command line the name of "pbweb" can be changed before running in docker-compose.yml.    
           Note: All commands are executed in the directory where docker-compose.yml is located (l:13).  
## Links:  
 [phpadmin](http://localhost:8080)[app](http://localhost)   
# Build with:  
php:7.3-apache-stretch    
https://github.com/docker-library/repo-info/blob/master/repos/php/remote/7.3-apache-stretch.md    
mariadb    
https://registry.hub.docker.com/_/mariadb    
adminer    
https://registry.hub.docker.com/_/admine  
  
### He put together  
[mafio69](mailto:mf1969@gmail.com?subject=[GitHub]%20Docker%20Repo)    
[github](https://github.com/mafio69)    
  
### Access problems  
`sudo groupadd docker - create a docker group`  - Create group "docker".
`sudo usermod -aG docker $ USER` - Adding the current user to the docker group.  
`sudo chown :docker src` - Change of owner to the docker group.  
`sudo sudo chmod 0775 -R ./src/vendor` - Grant full rights to the group (recursive).