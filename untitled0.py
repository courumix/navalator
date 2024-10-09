def affichetab(tab, m, n):
    for i in range(m):
        for j in range(n):
            print(tab[i][j]," ")
    print("\n")
    print("_______________\n")

def initialisegrille():
    for i in range(10):
        for j in range (10):
            grille = []
            grille[i][j] = 0
    return grille

def tire(l,c,grille):
    grille[l][c] = 1
    
grilleJ1 = initialisegrille()
affichetab(grilleJ1, 10, 10)
tire(2, 2, grilleJ1)
affichetab(grilleJ1, 10, 10)