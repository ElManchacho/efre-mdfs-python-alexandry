from flask import Flask
import views

app = Flask(__name__)

# ROUTE FOR / TO LIST ALL BOOK TO HOME PAGE
app.add_url_rule('/', view_func=views.index)

# ROUTE FOR /create_book TO SHOW FORM TO ADD NEW BOOK
app.add_url_rule('/create_book', view_func=views.create_book)

# ROUTE FOR /show_book TO SHOW ONE BOOK
app.add_url_rule('/show_book', view_func=views.show_book)

# ROUTE FOR /delete_book TO DELETE ONE BOOK
app.add_url_rule('/delete_book', view_func=views.delete_book)

if __name__ == '__main__':
  app.run(debug=True) 
