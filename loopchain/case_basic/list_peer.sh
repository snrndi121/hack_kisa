#!/usr/bin/env bash

curl http://localhost:9002/api/v1/peer/list | python3 -m json.tool
