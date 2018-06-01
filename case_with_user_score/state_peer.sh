#!/usr/bin/env bash

curl http://localhost:9000/api/v1/status/peer | python3 -m json.tool
