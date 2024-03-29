# Learn MongoDB 📘📒

## MongoDB shell commands 🐚 🇮🇹
- `show dbs` &rarr; mostra tutti i db ed il peso, mostra solo db con dati all'interno.
- `use nomedb` &rarr; crea un nuovo db.
- `db.nomecollection` &rarr; crea una collezione aka tabella.
- `db.nomecollection.insertOne({"chiave":"valore","chiave2":"valore2"})` &rarr; inserisce un dato all'interno della collection selezionata.
- `db.nomecollection.insertMany([{"chiave":"valore","chiave2":"valore2"},{"chiave":"valore","chiave2":"valore2"}])` &rarr; inserisce più dati all'interno della collection selezionata.
- `db.nomecollection.find()` &rarr; lista tutti gli elementi in una collection.
- `db.nomecollection.find().pretty()` &rarr; lista tutti gli elementi in una collection in formato json.
- `db.nomecollection.findOne({chiave:"valore"})` &rarr; cerca tutti i record con il valore specificato della chiave specificata.
- `db.nomecollection.find({chiave: {$gt:"valore"}})` &rarr; cerca tutti i record la cui chiave ha un valore maggiore di (greater then) uno specifico valore.
>[Lista](https://docs.mongodb.com/manual/reference/operator/query/) degli operatori utilizzabili.
- `db.nomecollection.updateOne({chiave:"valore"},{$set: {chiave: "nuovoValore",{chiave2: "nuovoValore2"}}})` &rarr; aggiorna i dati in una collection ricercando il record data una chiave specifica.
- `db.nomecollection.updateMany({chiave:"valore"},{$set: {nuovaChiave: "nuovoValore"}})` &rarr; aggiorna i dati ed aggiunge "campi" in una collection ricercando il record data una chiave specifica.
- `db.nomecollection.updateMany({},{$inc: {chiave: 1}})` &rarr; incrementa il valore di chiave di +1, valido per tutti i record.
- `db.nomecollection.updateMany({chiave: "valore"}, {$set: {chiave: "valore", chiave2: "valore2"}},{upsert: true})` &rarr; se non esiste questo record, viene creato.
- `db.nomecollection.deleteOne({chiave: "valore"})` &rarr; cancellare un record.
- `db.nomecollection.deleteMany({chiave: "valore"})` &rarr; cancellare più record.


## Usefull Links ✍️
- https://docs.mongodb.com/php-library/current/tutorial/crud/
- https://packagist.org/packages/vlucas/phpdotenv

## Hey Everyone👋
My name is Francesco i'm a Junior web developer and this is the second (ish) app that i made using JavaScript and PHP.

## Record Micro-Management 2.0 😎🤓
A realy small app that allow the user to Insert, Change, Search and Delete some standard record into a MongoDB database.

This time the server endpoint information are stored in a `.ENV` file which is stored on the server where our app is running.

The reason why the server information are in this file is just for learn how to handle this kind of information which are supposed to be hide from the users in a real retail businness app.

## Motivation ❤️‍🔥
This project was made only for didactic use, in order to make some practice with JavaScript and PHP.

## Used Tools 🧰
- [VScode](https://code.visualstudio.com/download)
- [Laragon](https://laragon.org/)
- [Bootstrap 5](https://getbootstrap.com/)
- [PHPLIB for MongoDB](https://www.php.net/manual/en/mongodb.tutorial.library.php)
- [MongoDB PHP Driver](https://www.php.net/manual/en/mongodb.installation.windows.php)
- [MongoDB Compass](https://www.mongodb.com/try/download/compass)

## Needed Setup ✔️
In order to properly run the app we need to install Laragon and turn on the Apache and the MongoDB servers.

![ServerIMG](https://i.ibb.co/tPrCCwc/server.png)

then we need to connect to the server via Compass.

![ConnectionIMG](https://i.ibb.co/6XkKq4p/connection.png)

create the database and the collection: as you can see i've made the database with the name of "DatabaseDiProva" and the collection named "Anagrafica".

![DatabaseIMG](https://i.ibb.co/qC9jTM5/database.png)

you can name the database and the collection as you prefer, the only thing that you need to do if you don't wanna use the same name of mine is to remember to insert those data in the `.ENV` file.

![ENVIMG](https://i.ibb.co/gJRV6jv/env.png)

# et Violà ✨
then you can access to the app via browser at localhost address.

![appIMG](https://i.ibb.co/tsrSM5S/app.png)
