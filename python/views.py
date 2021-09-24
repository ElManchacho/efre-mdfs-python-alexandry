from flask import render_template
import json

fileName = '../json/library.json'

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

  return render_template('index.php')

def create_book():
  return render_template('create.php')


def show_book():
  return render_template('show.php')

