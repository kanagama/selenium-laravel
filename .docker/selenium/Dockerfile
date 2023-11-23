FROM selenium/standalone-chrome-debug:3.141.0-actinium

USER root

ENV LANGUAGE ja_JP.UTF-8
ENV LANG ja_JP.UTF-8

RUN apt-get install -y --no-install-recommends locales
RUN locale-gen ja_JP.UTF-8
RUN dpkg-reconfigure --frontend noninteractive locales
RUN apt-get update -qqy
RUN apt-get -qqy --no-install-recommends install language-pack-ja
RUN rm -rf /var/lib/apt/lists/* /var/cache/apt/*

USER seluser