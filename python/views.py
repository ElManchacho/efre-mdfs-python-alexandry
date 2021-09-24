import random
from flask import render_template, request
import json

fileName = './json/library.json'
#fileName = '../json/library.json'

id = 1

def getAllBooks():
  books = []

  file = open(fileName, 'r')
  data = json.load(file)
  file.close()

  with open(fileName) as file:
      data = json.load(file)

  for key in data.keys():
    for book in data[key]:
      books.append(book)
  
  return books

# DEFINTION OF METHODS TO SHOW LIST OF BOOK
def index():

  
  return render_template('list_book.php', data = getAllBooks())


# DEFINTION OF METHODS TO SHOW FROM CREATE BOOK
def show_form_create_book():
  return render_template('create_book.php')


# DEFINTION OF METHODS TO CREATE BOOK
def create_book():

  name = request.form.get('name')
  author = request.form.get('author')

  print(name)
  print(author)

  with open(fileName) as data_file:
    library = json.load(data_file)
    for livres in library: 

      library[livres].append({"id": random.randint(0,100000), "nom": name, "auteur": author})

    with open(fileName, 'w') as data_file:
     library = json.dump(library, data_file)

  return render_template('when_create_book.php', name = name, author = author)

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

  id = request.args.get("id", type = int)

  with open(fileName) as data_file:
    library = json.load(data_file)
    for livres in library: 
      for livre in library[livres] :
        if (int(livre['id']) == id) :
          del library[livres][library[livres].index(livre)]
          break;
    print(library)
    with open(fileName, 'w') as data_file:
     library = json.dump(library, data_file)
    
  return render_template('list_book.php', data = getAllBooks())
