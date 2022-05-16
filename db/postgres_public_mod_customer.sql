create table mod_customer
(
    id         bigserial
        primary key,
    code       varchar(255) not null,
    full_name  varchar(255) not null,
    address    varchar(255) not null,
    cell_phone varchar(255) not null,
    email      varchar(255) not null,
    created_at timestamp(0),
    updated_at timestamp(0)
);

alter table mod_customer
    owner to postgres;

