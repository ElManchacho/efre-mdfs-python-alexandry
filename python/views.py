from flask import render_template, request
import json

fileName = './json/library.json'
#fileName = '../json/library.json'

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


# DEFINTION OF METHODS TO CREATE BOOK
def create_book():
  return render_template('create_book.php')


def show_book(id=0):
  id = request.args.get("id", type = int)
  retrivedBook = {}
  file = open(fileName, 'r')
  data = json.load(file)
  file.close()

  with open(fileName) as file:
      data = json.load(file)

  for key in data.keys():
    for book in data[key]:
      if int(book["id"]) == id :
        retrivedBook.update(book)
  return render_template('show_book.php', data = retrivedBook)

def delete_book(id=0):

  return None