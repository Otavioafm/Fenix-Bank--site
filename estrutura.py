from flask import Flask, render_template

app = Flask(__name__)

@app.route("/")
def home():
    return render_template('home.html')

@app.route("/login.php")
def login():
    return render_template('login.php')

@app.route("/cadastro.php")
def cadastro():
    return render_template('cadastro.php')


if __name__ == "__main__":
    app.run(debug=True)
