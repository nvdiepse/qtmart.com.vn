create table mod_product
(
    id                  bigserial
        primary key,
    name                varchar(255)          not null,
    code                varchar(255)          not null
        constraint mod_product_code_unique
            unique,
    image               varchar(255)          not null,
    slug                varchar(255)          not null,
    content             varchar(255)          not null,
    product_category_id integer               not null,
    status              integer               not null,
    "desc"              varchar(255)          not null,
    brand_id            integer               not null,
    is_deal_of_the_week boolean default false not null,
    is_hot_best_seller  boolean default false not null,
    is_hot_new_arrivals boolean default false not null,
    created_at          timestamp(0),
    updated_at          timestamp(0)
);

alter table mod_product
    owner to postgres;

