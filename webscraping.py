#!/usr/bin/env python
import requests
from bs4 import BeautifulSoup

import json

def escrever_json(dados):
    with open('arquivo.json', 'w', encoding='utf8') as f:
        json.dump(dados, f)
info_candidatos = []

r = requests.get("https://www.diariocidade.com/rs/feliz/eleicoes/2020/candidatos/prefeito/")
html = BeautifulSoup(r.content, "html.parser")
container = html.find(class_="lista-candidatos")
candidatos = container.find(class_="group-items container first-group")
x = 1
while x < len(candidatos):
    array = []
    artigo = candidatos.contents[x]
    #Link:
    link = artigo.find("a")
    apenas_link = link.get('href').split()
    apenas_link = apenas_link[0]
    #print(apenas_link)
    array.append(apenas_link)

    #Imagem:
    imagem = link.find(class_="thumb")
    img = imagem.find("img")
    link_imagem = img.get('data-src')
    #print(link_imagem)
    array.append(link_imagem)

    #Nome e partido:
    name = link.find(class_="content")
    nome = name.find_all('h3')[0].get_text()
    nome = nome.split()
    #del nome[-1]
    y = 1
    nome_completo = ''
    while y < len(nome):
        nome_completo = nome_completo+nome[y-1]+" "
        y+=1
    #print(nome_completo)
    array.append(nome_completo)
    array.append(nome[-1])

    partido = name.find_all('p')[0].get_text()
    #print (partido)
    array.append(partido)
    
    x =  x+2
    info_candidatos.append(array)

r = requests.get("https://www.diariocidade.com/rs/feliz/eleicoes/2020/candidatos/vice-prefeito/")
html = BeautifulSoup(r.content, "html.parser")
container = html.find(class_="lista-candidatos")
candidatos = container.find(class_="group-items container first-group")
x = 1
while x < len(candidatos):
    array = []
    artigo = candidatos.contents[x]
    #Link:
    link = artigo.find("a")
    apenas_link = link.get('href').split()
    apenas_link = apenas_link[0]
    #print(apenas_link)
    array.append(apenas_link)

    #Imagem:
    imagem = link.find(class_="thumb")
    img = imagem.find("img")
    link_imagem = img.get('data-src')
    #print(link_imagem)
    array.append(link_imagem)

    #Nome e partido:
    name = link.find(class_="content")
    nome = name.find_all('h3')[0].get_text()
    nome = nome.split()
    #del nome[-1]
    y = 1
    nome_completo = ''
    while y < len(nome):
        nome_completo = nome_completo+nome[y-1]+" "
        y+=1
    #print(nome_completo)
    array.append(nome_completo)
    array.append(nome[-1])

    partido = name.find_all('p')[0].get_text()
    #print (partido)
    array.append(partido)
    
    x =  x+2
    info_candidatos.append(array)

#print(info_candidatos)
escrever_json(info_candidatos)
