#!/bin/sh

APACHE_USER=apache
APACHE_GROUP=apache

find ../files -type d | xargs chmod 2777
find ../files -type f | xargs chmod 0666
