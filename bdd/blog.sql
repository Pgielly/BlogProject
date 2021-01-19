-- all tables structures

CREATE TABLE if not exists comments 
(
  id serial NOT NULL,
  post_id int NOT NULL,
  user_id int NOT NULL,
  message text NOT NULL,
  creation_date timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id)
);

CREATE TABLE if not exists posts 
(
  id serial NOT NULL,
  user_id int NOT NULL,
  title text NOT NULL,
  message text NOT NULL,
  creation_date timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id)
);

CREATE TABLE users (
  id serial NOT NULL,
  role_id int NOT NULL DEFAULT 2,
  name varchar(255) NOT NULL,
  mdp varchar(255) NOT NULL,
  email varchar(255) NOT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE roles (
  id serial NOT NULL,
  name varchar(255) NOT NULL,
  PRIMARY KEY (id)
);

------------------------------------------------------------------------------------------------------

-- all inner join

ALTER TABLE comments
  ADD CONSTRAINT comment_join FOREIGN KEY (post_id) REFERENCES posts (id),
  ADD CONSTRAINT user_join_comment FOREIGN KEY (user_id) REFERENCES users (id);

ALTER TABLE posts
  ADD CONSTRAINT user_join_post FOREIGN KEY (user_id) REFERENCES users (id);

ALTER TABLE users
  ADD CONSTRAINT role_join FOREIGN KEY (role_id) REFERENCES roles (id);

------------------------------------------------------------------------------------------------------

-- Add some values

insert into roles (name)
values ('admin'); -- id = 1
insert into roles (name)
values ('user'); -- id = 2

insert into users (role_id, name, mdp, email)
values (1, 'admin', '8a30ec6807f71bc69d096d8e4d501ade', 'admin@gmail.com'); -- mdp admin666

insert into users (name, mdp, email)
values ('matvki38', '4a7d1ed414474e4033ac29ccb8653d9b', 'oui@gmail.com'); -- mdp 0000

insert into posts (user_id, title, message)
values (2, 'Le nouvelle album de ACDC', 'Je aime beaucoup ce nouvelle album, en plus de ca il on fait un vinyle transparent rouge.');

insert into comments (post_id, user_id, message)
values (1, 2, 'je continue en disant que il faut a tout pris le écouter.');