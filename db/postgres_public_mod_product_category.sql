create table mod_product_category
(
    id         bigserial
        primary key,
    name       varchar(255) not null,
    code       varchar(255) not null
        constraint mod_product_category_code_unique
            unique,
    status     integer      not null,
    parent_id  integer      not null,
    created_at timestamp(0),
    updated_at timestamp(0)
);

alter table mod_product_category
    owner to postgres;

