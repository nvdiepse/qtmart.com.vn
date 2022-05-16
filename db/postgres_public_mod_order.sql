create table mod_order
(
    id             bigserial
        primary key,
    code           varchar(255)                                   not null,
    vat_code       varchar(255)                                   not null,
    vat_value      varchar(255)                                   not null,
    vat_total      varchar(255)                                   not null,
    vat_company    varchar(255)                                   not null,
    customer_id    integer                                        not null,
    full_name      varchar(255)                                   not null,
    address        varchar(255)                                   not null,
    cell_phone     varchar(255)                                   not null,
    status         integer                                        not null,
    ship_price     double precision                               not null,
    order_discount double precision default '0'::double precision not null,
    total_discount double precision                               not null,
    total_origin   double precision                               not null,
    total_import   double precision                               not null,
    created_at     timestamp(0),
    updated_at     timestamp(0)
);

alter table mod_order
    owner to postgres;

