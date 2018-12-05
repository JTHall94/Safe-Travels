# Safe Travels

This is my final project, created as a capstone website for the Awesome Inc Web Developer Bootcamp. Safe Travels is an alert system, intended to provide users with a safeguard in potentially dangerous situations. Users are able to create accounts, add contacts, and create alerts. Alerts contain useful information such as accurate geolocation markers, time data, and descriptive information about the alert creator. If the alert is not "resolved" before its set end-time, contacts that are tagged by the user receive text messages and emails with all of the necessary information stored during the creation of the alert.

Project Repository: https://github.com/JTHall94/Safe-Travels

### Author
**Jacob Hall** - https://github.com/JTHall94

##Contributing
If you would like to contribute to the development of this project, here are the instructions for installing everything necessary.

###Installation

Clone this project to your local machine.

```
$ composer install          #installs php dependencies
$ npm install               #installs javascript dependencies
$ cp .env.example .env      #ensures a working .env file
$ php artisan key:generate  #creates a local app key
```

Finally, just start up a local development server!

```
$ php artisan serve
```

## Built using
* [Laravel] - PHP Framework
* [Vue.js] - Javascript Framework
