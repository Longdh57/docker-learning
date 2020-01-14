FROM node:12.8-slim

RUN npm install system-sleep

ADD ./app.js /app/app.js
WORKDIR /app/

EXPOSE 8085

CMD ["node", "app.js"]