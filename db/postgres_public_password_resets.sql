create table password_resets
(
    email      varchar(255) not null,
    token      varchar(255) not null,
    created_at timestamp(0)
);

alter table password_resets
    owner to postgres;

create index password_resets_email_index
    on password_resets (email);

