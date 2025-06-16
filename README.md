# website-physio-v2

Minimalistische Website für eine Praxis für Physiotherapie.  
Enthält eine responsive Startseite mit Kontaktformular und eine Dankeseite nach dem Absenden.  
Eine Skip-Link-Navigation erleichtert die Bedienung mit Tastatur. Das Hero-Bild liegt lokal unter `img/hero.svg` und wird im HTML lazy geladen.

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
🛠️ Entwicklung
Qualitätsprüfungen können mit den folgenden Tools ausgeführt werden (Benötigt Node.js).
Nach dem Klonen einmalig die Abhängigkeiten installieren:

bash
Copy
Edit
npm install
Danach lassen sich die Linter wie folgt starten:

bash
Copy
Edit
npx stylelint "**/*.css"
npx htmlhint "**/*.html"
npx eslint "**/*.js"   # nutzt die Flat Config aus eslint.config.js
npx lhci autorun       # führt Lighthouse CI aus (erfordert ggf. Internetzugriff)