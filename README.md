# clickpesa
URL / Website monitoring script that monitors more than 3 URL’s. It checks the URL’s  every 2 minutes after execution and update a report if there were 3 consecutive failed check on a single URL 

*****************************************************
                      Requirements
*****************************************************
- OS (LINUX DISTRIBITION / UBUNTU)
- PHP >= 7.2.5
- BCMath PHP Extension
- Ctype PHP Extension
- Fileinfo PHP extension
- JSON PHP Extension
- Mbstring PHP Extension
- OpenSSL PHP Extension
- PDO PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension

*****************************************************
                      How to run
*****************************************************
1. clone the project from https://github.com/EddyOmatco/clickpesa.git
2. save the cloned project to web server's public folder.
3. Run 'php artisan mighrate'
4. to enable cron, type "crontab -e" and paste "* * * * * php /path/to/artisan schedule:run 1>> /dev/null 2>&1" (eliminate brackets)
5. run "php artisan serve" to run the app.
6. load "http://127.0.0.1:8000" to see the app.
7. use the form to fill in the name and the url you want to test.
8. leave and see what is happening after every 2 min
