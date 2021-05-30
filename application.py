import datetime

from flask import Flask, jsonify, render_template, request, redirect
import os
from flask_sqlalchemy import SQLAlchemy
from dotenv import load_dotenv
from models import *

load_dotenv()
app = Flask(__name__)
app.config['SQLALCHEMY_DATABASE_URI'] = os.environ['DATABASE']
app.config['SQLALCHEMY_TRACK_MODIFICATIONS'] = False
db = SQLAlchemy(app)


class Error(Exception):
    def __init__(self, error, status_code):
        self.error = error
        self.status_code = status_code


# URLs
@app.route('/')
def index():
    return render_template("index.html")


@app.route('/constructeurs')
def get_constructeur():
    constructeurs = Constructeur.query.all()
    data = []
    for constructeur in constructeurs:
        data.append({"nom": constructeur.nom_constructeur, "id": "/constructeur/" + str(constructeur.id)})
    json = {"title": "Constructeurs", "description": "Voici les différents constructeurs de vaisseaux.", "array": data}
    return render_template("list.html", data=json)


@app.route('/bombardiers')
def get_bombardiers():
    bombardiers = Bombardier.query.all()
    data = []
    for bombardier in bombardiers:
        data.append({"nom": bombardier.nom_classe, "id": "/bombardier/" + str(bombardier.id)})
    json = {"title": "Bombardiers", "description": "Voici les différentes classes de bombardiers", "array": data}
    return render_template("list.html", data=json)


@app.route('/planetes')
def get_planetes():
    planetes = Planete.query.all()
    data = []
    for planete in planetes:
        data.append({"nom": planete.nom, "id": "/planete/" + str(planete.id)})
    json = {"title": "Planetes", "description": "Voici les différentes planètes", "array": data}
    return render_template("list.html", data=json)


@app.route('/planete/<id>')
def get_planete(id):
    planete = Planete.query.filter_by(id=id).first()
    type = PlaneteType.query.filter_by(id=planete.type).first()
    region = Region.query.filter_by(id=planete.region).first()
    information = {"Type": type.type, "Region": region.nom}
    json = {"title": planete.nom, "information": information}
    return render_template("info.html", data=json)


@app.route('/suggestions', methods=['GET', 'POST'])
def suggestions():
    if request.method == 'GET':
        suggestions = Suggestions.query.filter_by(pris_en_compte=0).all()
        array = []
        for sug in suggestions:
            array.append({"nom": sug.suggestion, "id": "/suggestion/"+str(sug.id)})
        data = {"title": "Suggestions", "description": "Suggestions à prendre en compte", "array": array}
        return render_template('list.html', data=data)
    elif request.method == 'POST':
        suggestion = request.form.get('Suggestion')
        email = request.form.get('Email')
        print(suggestion)
        sug = Suggestions(suggestion=suggestion, email=email, date=datetime.datetime.now(), pris_en_compte=0)
        sug.insert()
        return redirect('/suggestions')

@app.route('/suggestion/<id>')
def suggestion(id):
    suggestion = Suggestions.query.filter_by(id=id).first()
    information = {"Email": suggestion.email, "Date": suggestion.date, "Pris en compte?": suggestion.pris_en_compte}
    json = {"title": suggestion.suggestion, "information": information}
    return render_template('info.html', data=json)

@app.errorhandler(Error)
def error(error):
    return jsonify({
        "success": False,
        'error': error.status_code,
        "message": error.error,
    }), error.status_code


if __name__ == '__main__':
    app.run(host='0.0.0.0', port=8080, debug=True)
