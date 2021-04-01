#!/bin/sh

set -xe

cat /nginx.conf.sample > /etc/nginx/conf.d/default.conf
exec "$@"
