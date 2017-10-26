download postgresql for windows from: https://www.enterprisedb.com/postgresql-959-binaries-win32?ls=Crossover&type=Crossover
initialize the server: initdb C:/servers/pgsql/data
start the server:   pg_ctl -D "C:/servers/pgsql/data" -l logfile start
create the database: createdb quartos
create the user:    createuser --interactive -l -P -s -d quartoadm
connect to database: psql -d quartos -U postgres
you can create the user after connected: create user quartoadm WITH PASSWORD '123';
grant all permissions to useradm on doctrinedb: GRANT ALL PRIVILEGES ON DATABASE quartos to quartoadm;
you can grant all privileges to useradm on all tables: GRANT SELECT, INSERT, UPDATE, DELETE ON ALL TABLES IN SCHEMA public TO quartoadm;
and privileges on sequences: GRANT ALL PRIVILEGES ON ALL sequences IN SCHEMA public TO quartoadm;

