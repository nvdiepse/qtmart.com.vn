create table profile
(
    id       integer not null
        constraint profile_pk
            primary key,
    user_id  integer,
    avatar   varchar,
    birthday date
);

alter table profile
    owner to postgres;

create unique index profile_id_uindex
    on profile (id);

