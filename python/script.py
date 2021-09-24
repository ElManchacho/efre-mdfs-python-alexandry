from flask import Flask
import views

app = Flask(__name__)

# ROUTE FOR / TO LIST ALL BOOK TO HOME PAGE
app.add_url_rule('/', view_func=views.index)

# ROUTE FOR /show_form_create_book TO SHOW FORM ADD NEW BOOK
app.add_url_rule('/show_form_create_book', view_func=views.show_form_create_book)

# ROUTE FOR /create_book TO ADD NEW BOOK
app.add_url_rule('/create_book', view_func=views.create_book, methods = ['POST'])

# ROUTE FOR /show_book TO SHOW ONE BOOK
app.add_url_rule('/show_book', view_func=views.show_book)



if __name__ == '__main__':
  app.run(debug=True) 
