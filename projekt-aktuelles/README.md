# Projekt Aktuelles

### Installation

Folgendes muss bereits vorhanden sein:

* [npm] - Node.js Package Manager
* [SASS] - Sass zum Erzeugen von CSS Dateien

In das Verzeichnis wechseln in der die package.json sich befindet. 
Ist auch der Ordner in dem sich die README.md Datei befindet.
```sh
$ cd path/to/package/json
```

Abhängigkeiten aus der package.json installieren
```sh
$ npm install
```

Jetzt muss nur noch die CSS Datei erzeugt werden und man kann sich die demo.html anschauen

### SASS WATCH

Entweder sass-watch.sh ausführen
```sh
$ sass-watch.sh
```

Oder den Sass Befehl manuel eingeben
```sh
$ sass --watch sass:files/tsv-design/css
```

[npm]: <http://nodejs.org>
[SASS]: <http://sass-lang.com/install>