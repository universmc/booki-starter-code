from flask import Flask, request, jsonify

app = Flask(__name__)

@app.route('/api/inscription', methods=['POST'])
def inscription():
    data = request.get_json()
    # Utilisez les données reçues pour l'inscription dans la base de données ou autres actions
    # ...
    response = {'message': 'Inscription réussie'}
    return jsonify(response)

if __name__ == '__main__':
    app.run()
