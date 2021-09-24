from flask import Flask
import views

app = Flask(__name__)

app.add_url_rule('/', view_func=views.index)
app.add_url_rule('/book/<int:id>', view_func=views.book(id))

if __name__ == '__main__':
  app.run(debug=True)