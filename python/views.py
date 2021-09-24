from flask import Flask, render_template, request
import json

# fileName = './json/library.json'
fileName = '../json/library.json'

id = 1

# DEFINTION OF METHODS TO SHOW LIST OF BOOK
def index():

  books = []

  file = open(fileName, 'r')
  data = json.load(file)
  file.close()

  with open(fileName) as file:
      data = json.load(file)

  for key in data.keys():
    for book in data[key]:
      books.append(book)

  return render_template('list_book.php', data = books)


# DEFINTION OF METHODS TO SHOW FROM CREATE BOOK
def show_form_create_book():
  return render_template('create_book.php')


# DEFINTION OF METHODS TO CREATE BOOK
def create_book():

  name = request.form.get('name')
  author = request.form.get('author')

  print(name)
  print(author)

  return "Vous avez bien créer un livre !"

# DEFINTION OF METHODS TO SHOW BOOK
def show_book():
  id = 0
  retrivedBook = {}
  file = open(fileName, 'r')
  data = json.load(file)
  file.close()

  with open(fileName) as file:
      data = json.load(file)

  for key in data.keys():
    for book in data[key]:
      #if book[key][id] == 0:
        #retrivedBook.append(book)
      retrivedBook = {}
  return render_template('show_book.php', data = retrivedBook)

