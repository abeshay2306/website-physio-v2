# website-physio-v2

Minimalistische Website für eine Praxis für Physiotherapie. Enthält eine responsive Startseite mit Kontaktformular und eine Dankeseite nach dem Absenden.

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
