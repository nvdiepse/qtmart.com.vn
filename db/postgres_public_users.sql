create table users
(
    id                bigserial
        primary key,
    name              varchar(255) not null,
    email             varchar(255) not null
        constraint users_email_unique
            unique,
    email_verified_at timestamp(0),
    password          varchar(255) not null,
    remember_token    varchar(100),
    created_at        timestamp(0),
    updated_at        timestamp(0)
);

alter table users
    owner to postgres;

INSERT INTO public.users (id, name, email, email_verified_at, password, remember_token, created_at, updated_at) VALUES (1, 'admin', 'nvdiepse@gmail.com', null, '$2y$10$lHP.NVHItfg.rb/jXns94e/MwTxvBc6dncqm3XdgEg7EzkNJ2BE8O', null, '2022-03-31 08:01:33', '2022-03-31 08:01:33');
INSERT INTO public.users (id, name, email, email_verified_at, password, remember_token, created_at, updated_at) VALUES (2, 'diepnv', 'admin@gmail.com', null, '$2y$10$5Cta9OoCiG9.YZwyL.Vkl.tHSzoNTjKPDhILPjGNa.j3.dnQqNj9m', null, '2022-04-11 07:24:43', '2022-04-11 07:24:43');
