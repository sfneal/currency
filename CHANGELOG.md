# Changelog

All notable changes to `currency` will be documented in this file


## 0.1.0 - 2020-11-09
- initial release


## 0.1.1 - 2020-11-09
- fix min php version requirement to 7.2


## 0.2.0 - 2020-12-11
- add support for php8
- optimize Travis CI config


## 1.0.0 - 2021-01-21
- initial production release
- bump min sfneal/actions package version requirement


## 1.0.1 - 2021-03-30
- fix sfneal/actions version syntax
- fix Travis CI config to enable code coverage uploads


## 1.1.0 - 2021-03-31
- bump sfneal/actions min version to 2.0
- refactor `FormatDollars` to extend `Action` instead of `ActionStatic`


## 2.0.0 - 2021-04-01
- make `Currency` class with static `format()` method to improve syntax
- cut `FormatDollars` actions class
- cut sfneal/actions from composer requirements
 
 
## 2.0.1 - 2021-08-31
- add support for php7.1
- fix min phpunit/phpunit version to support php7.1 & use of `assertIsString()` method
