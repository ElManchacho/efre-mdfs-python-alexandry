from flask import render_template
import json

fileName = '../json/library.json'

id = 1

def index():

    return render_template('index.html')

def book(id):
    return render_template('book.html')

def get_books():

  books = []

  file = open(fileName, 'r')
  data = json.load(file)
  file.close()

  with open(fileName) as file:
      data = json.load(file)

  for key in data.keys():
    for book in data[key]:
      books.append(book)

  return render_template('index.php')

def create_book():
  return render_template('create.php')


def show_book():
  return render_template('show.php')

  #return render_template('index.php', data = books)

def book():
  id = 0
  retrivedBook = {}
  file = open(fileName, 'r')
  data = json.load(file)
  file.close()

  with open(fileName) as file:
      data = json.load(file)

  for key in data.keys():
    for book in data[key]:
      if book[key][id] == 0:
        retrivedBook.append(book)
  return render_template('book.php', data = retrivedBook)

