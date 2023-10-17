FROM ubuntu:latest
RUN apt-get update
RUN apt-get -y install apache2
RUN service apache2 start
RUN apt-get -y install git
RUN git clone https://github.com/AakarshitChaurasia/HMSDocker.git app
RUN cp -r /app/* /var/www/html/
ENTRYPOINT apachectl -D FOREGROUND
ENV name <Devops>
