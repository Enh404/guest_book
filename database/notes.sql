create table `database`.notes
(
    id            int auto_increment
        primary key,
    author        text     not null,
    date          datetime not null,
    comment       text     null,
    categories_pk int      not null,
    constraint comments_categories__fk
        foreign key (categories_pk) references `database`.categories (id)
);

