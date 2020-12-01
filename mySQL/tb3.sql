Select "Bonjour bienvenu dans le monde de SQL" as hello;
create database if not exists shop;
use shop;
create table if not exists shopy (
    idItem int (11) not null primary key  auto_increment,
    nom VARCHAR(32),
    categorie varchar(32),
    description varchar(500),
    prix int,
    image varchar(32)
);
insert into shopy (nom, categorie, description, prix, image)
values ("Chemise Design", "Chemises", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt repellendus non, praesentium, eveniet, quaerat accusamus nostrum facilis cupiditate sapiente numquam inventore doloribus! Eius, sint atque. Repellat incidunt explicabo asperiores! Sed.", 120, "img.jpg"),
("Pull Design", "Pulls", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt repellendus non, praesentium, eveniet, quaerat accusamus nostrum facilis cupiditate sapiente numquam inventore doloribus! Eius, sint atque. Repellat incidunt explicabo asperiores! Sed.", 120, "img.jpg"),
("Robe Design", "Robes", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt repellendus non, praesentium, eveniet, quaerat accusamus nostrum facilis cupiditate sapiente numquam inventore doloribus! Eius, sint atque. Repellat incidunt explicabo asperiores! Sed.", 120, "img.jpg"),
("Jupe Design", "Jupes", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt repellendus non, praesentium, eveniet, quaerat accusamus nostrum facilis cupiditate sapiente numquam inventore doloribus! Eius, sint atque. Repellat incidunt explicabo asperiores! Sed.", 120, "img.jpg"),
("Livre Design", "Scientifique", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt repellendus non, praesentium, eveniet, quaerat accusamus nostrum facilis cupiditate sapiente numquam inventore doloribus! Eius, sint atque. Repellat incidunt explicabo asperiores! Sed.", 120, "img.jpg"),
("Livre Design", "Science-Fiction", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt repellendus non, praesentium, eveniet, quaerat accusamus nostrum facilis cupiditate sapiente numquam inventore doloribus! Eius, sint atque. Repellat incidunt explicabo asperiores! Sed.", 120, "img.jpg"),
("Livre Design", "Horreur", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt repellendus non, praesentium, eveniet, quaerat accusamus nostrum facilis cupiditate sapiente numquam inventore doloribus! Eius, sint atque. Repellat incidunt explicabo asperiores! Sed.", 120, "img.jpg"),
("Livre Design", "Aventure", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt repellendus non, praesentium, eveniet, quaerat accusamus nostrum facilis cupiditate sapiente numquam inventore doloribus! Eius, sint atque. Repellat incidunt explicabo asperiores! Sed.", 120, "img.jpg"),
("Item Design", "Carte mère", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt repellendus non, praesentium, eveniet, quaerat accusamus nostrum facilis cupiditate sapiente numquam inventore doloribus! Eius, sint atque. Repellat incidunt explicabo asperiores! Sed.", 120, "img.jpg"),
("Item Design", "Processeur", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt repellendus non, praesentium, eveniet, quaerat accusamus nostrum facilis cupiditate sapiente numquam inventore doloribus! Eius, sint atque. Repellat incidunt explicabo asperiores! Sed.", 120, "img.jpg"),
("Item Design", "Mémoire", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt repellendus non, praesentium, eveniet, quaerat accusamus nostrum facilis cupiditate sapiente numquam inventore doloribus! Eius, sint atque. Repellat incidunt explicabo asperiores! Sed.", 120, "img.jpg"),
("Item Design", "Disque Dur", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt repellendus non, praesentium, eveniet, quaerat accusamus nostrum facilis cupiditate sapiente numquam inventore doloribus! Eius, sint atque. Repellat incidunt explicabo asperiores! Sed.", 120, "img.jpg");

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