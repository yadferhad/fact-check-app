import rdflib
from sys import argv
import os

filename = os.getcwd() + "/rdf/iraq.ttl"

g = rdflib.Graph()

g.parse(filename, format='ttl')

query = argv[1]

qres = g.query(query)

print(qres.serialize(format="json").decode("utf-8"))
