create table mod_article
(
    id                   integer not null
        constraint mod_product_pk
            primary key,
    slug                 char,
    title                char,
    description          char,
    is_deals_of_the_week boolean,
    is_hot_best_seller   boolean,
    is_hot_new_arrival   boolean,
    image                char,
    status               integer,
    is_public            boolean,
    created_at           timestamp,
    updated_at           timestamp,
    content              text,
    author               integer
);

alter table mod_article
    owner to postgres;

create unique index mod_product_id_uindex
    on mod_article (id);

