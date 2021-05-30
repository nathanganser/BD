# Comment démarrer le projet localement

### Installer les dépendances
`pip install -r requirements.txt`

### Ajouter l'URI pour se connecter à la base de donnée comment fichier .env
Créér un fichier `.env` et y ajouter la ligne suivante (en replacant les données `[]`)
`DATABASE=mysql+pymysql://[username]:[password]@[IP Address]/[database name]`

### Lancer l'application
`python application.py`