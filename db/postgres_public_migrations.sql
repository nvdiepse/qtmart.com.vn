create table migrations
(
    id        serial
        primary key,
    migration varchar(255) not null,
    batch     integer      not null
);

alter table migrations
    owner to postgres;

INSERT INTO public.migrations (id, migration, batch) VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO public.migrations (id, migration, batch) VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO public.migrations (id, migration, batch) VALUES (3, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO public.migrations (id, migration, batch) VALUES (4, '2022_05_15_153016_create_mod_product_category', 2);
INSERT INTO public.migrations (id, migration, batch) VALUES (5, '2022_05_15_153353_create_mod_product', 3);
INSERT INTO public.migrations (id, migration, batch) VALUES (6, '2022_05_15_154031_create_mod_brand', 3);
INSERT INTO public.migrations (id, migration, batch) VALUES (7, '2022_05_16_044626_create_mod_order', 4);
INSERT INTO public.migrations (id, migration, batch) VALUES (9, '2022_05_16_045658_create_mod_order_product', 5);
INSERT INTO public.migrations (id, migration, batch) VALUES (10, '2022_05_16_045607_create_mod_customer', 6);
