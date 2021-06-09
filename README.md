# headless-gatsbyjs-pimcore
This repository contains code for running an headless cms using Pimcore as backend and gatsby for SSR.

# how to run

```
docker-compose up

# restore pimcore
docker-compose exec backend sh restore.sh

# run gatsby
docker-compose exec dev npm install
docker-compose exec dev gatsby build
docker-compose exec dev gatsby develop --host=0.0.0.0

```

now you can see live:
- pimcore: `http://localhost/admin`
- blog: `http://localhost:8000`
- graphi: `http://localhost:8000/__graphql`