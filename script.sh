#!/usr/bin/env bash

set -x && {
  . /etc/environment && printenv
  set -x
}

echo "$MY_ENVIRONMENT_VARIABLE" >/tmp/result

exit 0
