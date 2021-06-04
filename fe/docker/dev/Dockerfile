FROM nginx
RUN apt -y  update  &&\
 apt-get install -y git &&\
 apt-get install -y gcc g++ make &&\
 curl -fsSL https://deb.nodesource.com/setup_lts.x | bash - &&\
 apt-get install -y nodejs &&\
 node -v && npm -v &&\
 npm install -g gatsby-cli &&\
 gatsby --version

WORKDIR /usr/share/nginx/html/