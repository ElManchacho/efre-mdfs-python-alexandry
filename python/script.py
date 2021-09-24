from flask import Flask
import views

app = Flask(__name__)

app.add_url_rule('/', view_func=views.index)
app.add_url_rule('/books', view_func=views.get_books)

if __name__ == '__main__':
  app.run(debug=True)