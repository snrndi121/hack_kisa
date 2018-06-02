#!/usr/bin/env bash

#export TAG=RC1.19.3
export TAG=lastest
export SSH_KEY_FOLDER=/home/uki408/Documents/.ssh/id_uki408home

# Make log folder.
export LOG_FOLDER=$(pwd)/logs
mkdir ${LOG_FOLDER}

# log server ?ùÑ?ö∞Í∏?.
docker run -d \
--name loop-logger \
--publish 24224:24224/tcp \
--volume $(pwd)/fluentd:/fluentd \
--volume ${LOG_FOLDER}:/logs \
loopchain/loopchain-fluentd:${TAG}


# RadioStation?óê?Ñú ?ù¥?ö©?ï† ?ç∞?ù¥??? ????û• Í≥µÍ∞Ñ?ùÑ ÎßåÎì≠?ãà?ã§.
#mkdir -p storageRS

# RadioStation?ùÑ ?ã§?ñâ?ï©?ãà?ã§.
#docker run -d --name radio_station \
#-v $(pwd)/conf:/conf \
#-v $(pwd)/storageRS:/.storage \
#-p 7102:7102 \
#-p 9002:9002 \
#--log-driver fluentd --log-opt fluentd-address=localhost:24224 --log-opt tag=docker.{{.Name}} \
#loopchain/looprs:${TAG} \
#python3 radiostation.py -o /conf/rs_conf.json


# Peer 0Î≤àÏóê?Ñú ?ù¥?ö©?ï† ?ç∞?ù¥??? ????û• Í≥µÍ∞Ñ?ùÑ ÎßåÎì≠?ãà?ã§.
mkdir -p storage0

# Peer 0Î≤àÏùÑ ?ùÑ?õÅ?ãà?ã§.
docker run -d --name peer0 \
-v $(pwd)/conf:/conf \
-v $(pwd)/storage0:/.storage \
-v $(pwd)/score:/score \
-v ${SSH_KEY_FOLDER} \
-e "DEFAULT_SCORE_HOST=github.com" \
--link radio_station:radio_station \
--log-driver fluentd --log-opt fluentd-address=localhost:24224 --log-opt tag=docker.{{.Name}} \
-p 7100:7100 -p 9000:9000 \
loopchain/looppeer:${TAG} \
python3 peer.py -o /conf/peer_conf.json  -r 54.64.115.242:7102

# Peer 1
#mkdir -p storage1

#docker run -d --name peer1 \
#-v $(pwd)/conf:/conf \
#-v $(pwd)/storage1:/.storage \
#-v $(pwd)/score:/score \
#-v ${SSH_KEY_FOLDER} \
#-e "DEFAULT_SCORE_HOST=github.com" \
#--link radio_station:radio_station \
#--log-driver fluentd --log-opt fluentd-address=localhost:24224 --log-opt tag=docker.{{.Name}} \
#-p 7101:7101 -p 9001:9001 \
#loopchain/looppeer:${TAG} \
#python3 peer.py -o /conf/peer_conf.json  -r radio_station:7102
