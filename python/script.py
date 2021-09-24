from flask import Flask
import views

app = Flask(__name__)

app.add_url_rule('/', view_func=views.index)
app.add_url_rule('/book/<int:id>', view_func=views.book(id))
app.add_url_rule('/create_book', view_func=views.create_book)
app.add_url_rule('/show_book', view_func=views.show_book)


if __name__ == '__main__':
  app.run(debug=True)