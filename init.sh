#!/bin/sh

mkdir -p log

printf "'mysql -p  < config/auth_ci4.sql':\n"

if ! mysql -p < config/auth_ci4.sql 2>&1 | tee -a log/db.log >/dev/null;
then
  printf "\nErro ao criar o banco/tabela no MySQL. '%s':\n%s\n" "$(pwd)/db.log" "$(tail log/db.log)"
fi

. config/ports

printf "\nSpark/CI4: 'http://localhost:%s'.\n" "${SPARK_PORT}"

if ! php spark serve --port "${SPARK_PORT}"  >> log/server.log 2>&1; then
  printf "\nErro ao iniciar o Spark. '%s':\n%s\n" "$(pwd)/server.log" "$(tail log/server.log)"
fi

wait
