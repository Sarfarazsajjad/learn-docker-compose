FROM python:3-onbuild
# we can comment this line because we are going to mount the folder inside container
# when we are defining the service in docker-compose.yml
# but keeping this line will make sure that our code gets copied into the image atleast once
# so even if the container is not mounted with the source code folder it will still have some
# code to run with
COPY . /usr/src/app
CMD [ "python", "api.py" ]