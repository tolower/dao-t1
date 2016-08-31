# Ubuntu 14.04，Trusty Tahr（可靠的塔尔羊）发行版
FROM  daocloud.io/tolower/dao-t

# 道客船长荣誉出品
MAINTAINER Captain Dao <support@daocloud.io>


COPY . /app
WORKDIR /app
RUN chmod 755 ./start.sh

EXPOSE 80
CMD ["./start.sh"]
