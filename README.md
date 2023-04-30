1. Clone or download this repo
2. Run 'docker-compose up -d' in root folder
3. Run 'yii migrate', if you have some problem, run this command in docker container : 1) run 'docker exec -it yii-application_frontend_1 bash
   ' 2) then 'yii migrate'
4. Go to http://127.0.0.1:20080