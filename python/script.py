from flask import Flask, json

books = [{"id": 1, "name": "Book 1"}, {"id": 2, "name": "Book 2"}]

api = Flask(__name__)

@api.route('/', methods=['GET'])
def get_books():
  return json.dumps(books)

if __name__ == '__main__':
  api.run() 