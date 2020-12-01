Select "Bonjour bienvenu dans le monde de SQL" as hello;
create database if not exists shop;
use shop;
create table if not exists shopy (
    idItem int (11) not null primary key  auto_increment,
    nom VARCHAR(32),
    categorie varchar(32),
    description varchar(32),
    prix int,
    image varchar(32)
);
insert into shopy
values (1, "Chemise Design", "Chemises", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt repellendus non, praesentium, eveniet, quaerat accusamus nostrum facilis cupiditate sapiente numquam inventore doloribus! Eius, sint atque. Repellat incidunt explicabo asperiores! Sed.", 120, "img.jpg"),
(1, "Pull Design", "Pulls", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt repellendus non, praesentium, eveniet, quaerat accusamus nostrum facilis cupiditate sapiente numquam inventore doloribus! Eius, sint atque. Repellat incidunt explicabo asperiores! Sed.", 120, "img.jpg"),
(1, "Robe Design", "Robes", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt repellendus non, praesentium, eveniet, quaerat accusamus nostrum facilis cupiditate sapiente numquam inventore doloribus! Eius, sint atque. Repellat incidunt explicabo asperiores! Sed.", 120, "img.jpg"),
(1, "Jupe Design", "Jupes", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt repellendus non, praesentium, eveniet, quaerat accusamus nostrum facilis cupiditate sapiente numquam inventore doloribus! Eius, sint atque. Repellat incidunt explicabo asperiores! Sed.", 120, "img.jpg"),
(1, "Livre Design", "Scientifique", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt repellendus non, praesentium, eveniet, quaerat accusamus nostrum facilis cupiditate sapiente numquam inventore doloribus! Eius, sint atque. Repellat incidunt explicabo asperiores! Sed.", 120, "img.jpg"),
(1, "Livre Design", "Science-Fiction", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt repellendus non, praesentium, eveniet, quaerat accusamus nostrum facilis cupiditate sapiente numquam inventore doloribus! Eius, sint atque. Repellat incidunt explicabo asperiores! Sed.", 120, "img.jpg"),
(1, "Livre Design", "Horreur", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt repellendus non, praesentium, eveniet, quaerat accusamus nostrum facilis cupiditate sapiente numquam inventore doloribus! Eius, sint atque. Repellat incidunt explicabo asperiores! Sed.", 120, "img.jpg"),
(1, "Livre Design", "Aventure", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt repellendus non, praesentium, eveniet, quaerat accusamus nostrum facilis cupiditate sapiente numquam inventore doloribus! Eius, sint atque. Repellat incidunt explicabo asperiores! Sed.", 120, "img.jpg"),
(1, "Item Design", "Carte mère", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt repellendus non, praesentium, eveniet, quaerat accusamus nostrum facilis cupiditate sapiente numquam inventore doloribus! Eius, sint atque. Repellat incidunt explicabo asperiores! Sed.", 120, "img.jpg"),
(1, "Item Design", "Processeur", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt repellendus non, praesentium, eveniet, quaerat accusamus nostrum facilis cupiditate sapiente numquam inventore doloribus! Eius, sint atque. Repellat incidunt explicabo asperiores! Sed.", 120, "img.jpg"),
(1, "Item Design", "Mémoire", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt repellendus non, praesentium, eveniet, quaerat accusamus nostrum facilis cupiditate sapiente numquam inventore doloribus! Eius, sint atque. Repellat incidunt explicabo asperiores! Sed.", 120, "img.jpg"),
(1, "Item Design", "Disque Dur", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt repellendus non, praesentium, eveniet, quaerat accusamus nostrum facilis cupiditate sapiente numquam inventore doloribus! Eius, sint atque. Repellat incidunt explicabo asperiores! Sed.", 120, "img.jpg");

create table if not exists user (
    idpers int(11) not null primary key auto_increment,
    pseudo VARCHAR(32),
    email varchar(32),
    password varchar(32),
    adresse varchar(32),
    zipCode int,
    ville varchar(32),
    phoneNb int
);