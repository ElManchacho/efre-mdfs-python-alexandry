from flask import render_template
import json

books = [{"id": 1, "name": "Book 1"}, {"id": 2, "name": "Book 2"}]

def index():
    return render_template('index.html')

def get_books():
    return render_template('books.html')
    return json.dumps(books)