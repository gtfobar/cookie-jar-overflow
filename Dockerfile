FROM nginx:latest
RUN rm /etc/nginx/nginx.conf /etc/nginx/conf.d/default.conf
COPY . /cookies
COPY nginx.conf /etc/nginx