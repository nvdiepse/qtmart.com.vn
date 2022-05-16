create table mod_order_product
(
    id         bigserial
        primary key,
    order_id   integer not null,
    product_id integer not null,
    created_at timestamp(0),
    updated_at timestamp(0)
);

alter table mod_order_product
    owner to postgres;

