docker stop my_wordpress_container
docker rm my_wordpress_container
docker rmi wp
docker build -t wp .
docker run -d -p 80:80 -p 443:443 -p 3307:3306 \
  -e DB_NAME=wordpress \
  -e DB_USER=wp \
  -e DB_PASSWORD=fara \
  -v $(pwd)/ssl:/etc/ssl/private \
  -v wordpress_data:/var/www/html \
  -v mysql_data:/var/lib/mysql \
  --name my_wordpress_container \
  wp
