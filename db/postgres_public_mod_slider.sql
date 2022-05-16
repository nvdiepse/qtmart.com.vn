create table mod_slider
(
    id         integer not null
        constraint mod_slider_pk
            primary key,
    image      char,
    title      char,
    desciption char,
    link       char,
    created_at timestamp,
    updated_at timestamp,
    author     integer,
    deleted_at timestamp
);

alter table mod_slider
    owner to postgres;

create unique index mod_slider_id_uindex
    on mod_slider (id);

