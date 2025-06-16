# website-physio-v2

Minimalistische Website für eine Praxis für Physiotherapie.
Enthält eine responsive Startseite mit Kontaktformular und eine Dankeseite nach dem Absenden. Das Hero-Bild liegt lokal unter `img/hero.svg` und wird im HTML lazy geladen.

## 📦 Projektstruktur

```txt
website-physio-v2/
├── index.html
├── Danke.html
├── style.css
├── script.js
├── img/
│   └── hero.svg
├── eslint.config.js
├── .stylelintrc.json
├── .htmlhintrc
├── lighthouserc.json
├── package.json
├── .gitignore
└── README.md
```

## Entwicklung

Qualitätsprüfungen können mit den folgenden Tools ausgeführt werden (Benötigt Node.js). Nach dem Klonen einmalig die Abhängigkeiten installieren:

```bash
npm install
```

Danach lassen sich die Linter wie folgt starten:

```bash
npx stylelint "**/*.css"
npx htmlhint "**/*.html"
npx eslint "**/*.js"   # nutzt die Flat Config aus eslint.config.js
npx lhci autorun
```
