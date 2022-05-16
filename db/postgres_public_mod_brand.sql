create table mod_brand
(
    id         bigserial
        primary key,
    name       varchar(255) not null,
    code       varchar(255) not null,
    status     integer      not null,
    created_at timestamp(0),
    updated_at timestamp(0)
);

alter table mod_brand
    owner to postgres;

INSERT INTO public.mod_brand (id, name, code, status, created_at, updated_at) VALUES (5, 'Karofi', 'Karofi', 1, '2022-05-16 14:58:05', '2022-05-16 14:58:05');
INSERT INTO public.mod_brand (id, name, code, status, created_at, updated_at) VALUES (6, 'Kangaroo', 'Kangaroo', 1, '2022-05-16 15:00:20', '2022-05-16 15:00:20');
