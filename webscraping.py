import requests
from bs4 import BeautifulSoup

r = requests.get("https://www.diariocidade.com/rs/feliz/eleicoes/2020/candidatos/prefeito/")
html = BeautifulSoup(r.content, "html.parser")
container = html.find(class_="lista-candidatos")
candidatos = container.find(class_="group-items container first-group")
x = 1
while x < len(candidatos):
    artigo = candidatos.contents[x]
    #Link:
    link = artigo.find("a")
    apenas_link = link.get('href').split()
    apenas_link = apenas_link[0]
    print(apenas_link)

    #Imagem:
    imagem = link.find(class_="thumb")
    img = imagem.find("img")
    print(img.get('data-src'))

    #Nome e partido:
    name = link.find(class_="content")
    nome = name.find_all('h3')[0].get_text()
    nome = nome.split()
    #del nome[-1]
    y = 1
    n = ''
    while y < len(nome):
        n = n+nome[y-1]+" "
        y+=1
    print(n)
    partido = name.find_all('p')[0].get_text()
    print (partido)
    
    x =  x+2
    print()

print()
print('\-\-\-\-\-\-\-\-\-\-\-\-\-\-\-\-\-\-\-\-\-\-\-\-')
print()

r = requests.get("https://www.diariocidade.com/rs/feliz/eleicoes/2020/candidatos/vice-prefeito/")
html = BeautifulSoup(r.content, "html.parser")
container = html.find(class_="lista-candidatos")
candidatos = container.find(class_="group-items container first-group")
x = 1
while x < len(candidatos):
    artigo = candidatos.contents[x]
    #Link:
    link = artigo.find("a")
    apenas_link = link.get('href').split()
    apenas_link = apenas_link[0]
    print(apenas_link)

    #Imagem:
    imagem = link.find(class_="thumb")
    img = imagem.find("img")
    print(img.get('data-src'))

    #Nome e partido:
    name = link.find(class_="content")
    nome = name.find_all('h3')[0].get_text()
    nome = nome.split()
    #del nome[-1]
    y = 1
    n = ''
    while y < len(nome):
        n = n+nome[y-1]+" "
        y+=1
    print(n)
    partido = name.find_all('p')[0].get_text()
    print (partido)
    
    x =  x+2
    print()
