Wordpress Theme Inetmarketing
=============================
 

 Theme Name: Default Bootstrap
 Theme URI: http://alexander-weigelt.de
 Author: Alexander Weigelt
 Author URI: http://alexander-weigelt.de
 Description: Default Theme based on bootstrap as a template for individual website creation with wordpress.
 Version: 0.1.0
 License: GNU General Public License v2 or later
 License URI: http://www.gnu.org/licenses/gpl-2.0.html
 Tags: white, blue

Ein simples Wordpress Theme basierend auf Bootstrap Version 3.3.6 von Twitter.

## Beschreibung

Es handelt sich um ein simples Responsive WordPress Blank-Theme. Ein Blank Theme dient dazu, dass du dir eine praktische Theme-Arbeitsvorlage erstellst, von der aus du auch zukünftige Themes leichter umsetzen kannst. 

Default Theme als Vorlage zur individuellen Erstellung von Websites mit folgenden Eigenschaften:

* Responsive Layout
* Custom Background
* Custom Header
* Menu Description
* Post Formats

## Handling Grunt

Mit Grunt gibt es ein neues Tool, das hilft, wiederkehrende Aufgaben in Frontend-Projekten zu automatisieren. Einmal konfiguriert ist das Testen und Ausliefern selbst bei umfangreichen Projekten problemlos möglich – und eignet sich so auch für die gemeinsame Entwicklung in Teams. Grundlegend basiert es auf node.js, das sollte also bereits installiert sein. Um grunt zu installieren, navigieren wir per Console/Terminal in unser Projektverzeichniss ```bootstrap```

```
cd wp-content/themes/bootstrap/_dev/
```

Nun starten wir die Installation von Grunt

```
npm install grunt --save-dev
```

Installieren des Plugins SASS:
Die Installation von Plugins sieht genauso aus, wie das installieren von grunt selbst.

```
npm install --save-dev grunt-sass
```

Um nach jeder Änderung nicht den default Prozess von Hand anzustoßen wird einen watcher installiert, der dies automatisch tut.


```
npm install grunt-contrib-watch --save-dev
```



Abschließend starten wir den watch Prozess mit `grunt watch`. Bei jedem Speichern wird eine aktuelle Version deiner main.css im Ordner css/ gespeichert.

Deine komprimierte style.css erzeugen: Um den deployment Prozess anzustoßen, muss der Befehl `grunt deployment` in die Console eingegeben werden.

### Weitere Kommandos

Available Grunt commands
`grunt dist` (Just compile CSS and JavaScript)

Regenerates the /dist/ directory with compiled and minified CSS and JavaScript files. As a Bootstrap user, this is normally the command you want.
`grunt watch` (Watch)

Watches the Less source files and automatically recompiles them to CSS whenever you save a change.
`grunt test` (Run tests)

Runs JSHint and runs the QUnit tests headlessly in PhantomJS.
`grunt docs` (Build & test the docs assets)

Builds and tests CSS, JavaScript, and other assets which are used when running the documentation locally via jekyll serve.
`grunt` (Build absolutely everything and run tests)

## Handling SASS

* Starte Grunt wie vorab beschrieben
* Um die `style.css` für dein Worpress-Theme zu erstellen, wechsle zum Ordner `sass/`
* Öffne die `main.scss` und ergänze deine Styleanweisungen
* nach dem Speichern der Datei wird automatisch eine komprimierte style.css erzeugt 

## Installation

Hinweis: Solltest du einen direkten Upload per FTP machen, so darf der Ordner _dev nicht auf den Server geladen werden!

1. Navigiere im Adminbereich zu: DESIGN > THEMES > INSTALLIEREN
2. Dein fertiges Theme sollte vor dem Upload als .zip Datei komprimiert werden (alternativ geht auch ein Upload per FTP)
3. Anschließend kann das neue Theme im Admin-Bereich unter „Design – Themes“ aktiviert werden.