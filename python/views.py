from flask import render_template
import json

books = []

fileName = './json/library.json'

def index():
    return render_template('index.html')

def get_books():
  file = open(fileName, 'r')
  data = json.load(file)
  file.close()

  with open(fileName) as file:
      data = json.load(file)

  for key in data.keys():
    for book in data[key]:
      books.append(book)

  return json.dumps(books)