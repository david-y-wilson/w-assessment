# Wonde assessment

## Instructions to run locally

* If you don't have Docker desktop, install (https://www.docker.com/products/docker-desktop/)
* Clone the repository using the following command `git clone git@github.com:david-y-wilson/w-assessment.git`
* Navigate into the project directory using the following command `cd w-assessment`
* Build the project with the command `docker-compose up -d`
* Install the composer dependencies with the command `docker-compose exec app composer install`
* You will need to add a `.env` file in the root of the project directory that includes entries for `WONDE_TOKEN` and `WONDE_SCHOOL`
* Navigate to [http://localhost:8000](http://localhost:8000) to view the app.


