phd5-app
========

A universal web application template built upon Docker, PHP and Yii 2.0 Framework

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/dmstr/phd5-app/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/dmstr/phd5-app/?branch=master)
:construction_worker: [![Build Status](https://travis-ci.org/dmstr/phd5-app.svg?branch=master)](https://travis-ci.org/dmstr/phd5-app)
:wolf: [![build status](https://git.hrzg.de/dmstr/phd5-app/badges/master/build.svg)](https://git.hrzg.de/dmstr/phd5-app/commits/master)

Documentation
-------------
 
See [docs](https://github.com/dmstr/phd5-docs)

TL;dr
-----

### Requirements

- docker `>=1.10`
- docker-compose `>=1.8.0`
- make (optional)

### Development

    make all

Show help

    make help

Create bash    
    
    make bash

Run setup in container    
    
    $ yii app/setup

See [configuration](https://github.com/dmstr/phd5-docs/blob/master/guide/development/configuration.md)...


### Testing

Run command from `tests` folder

    cd tests

Setup test application stack    
    
    make up setup bash
    
Run tests inside the container    
      
    $ codecept run      

See [testing](https://github.com/dmstr/phd5-docs/blob/master/guide/development/testing.md)...   


---

#### ![dmstr logo](http://t.phundament.com/dmstr-16-cropped.png) Built by [dmstr](http://diemeisterei.de)        
