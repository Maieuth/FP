#include <stdio.h>
#include <string.h>

#define MAX_ETUDIANTS 100


typedef struct {
    int id;
    char nom[50];
    int age;
} Etudiant;

typedef struct {
    char nomClasse[50];
    Etudiant etudiants[MAX_ETUDIANTS];
    int nombreEtudiants;
} Classe;

void ajouterEtudiant(Classe *classe) {
    if (classe->nombreEtudiants >= MAX_ETUDIANTS) {
        printf("La classe est pleine.\n");
        return;
    }

    Etudiant e;
    printf("ID de l'étudiant : ");
    scanf("%d", &e.id);
    printf("Nom de l'étudiant : ");
    scanf("%s", e.nom);
    printf("Âge de l'étudiant : ");
    scanf("%d", &e.age);

    classe->etudiants[classe->nombreEtudiants++] = e;
    printf("Étudiant ajouté avec succès.\n");
}

void afficherEtudiants(Classe *classe) {
    if (classe->nombreEtudiants == 0) {
        printf("Aucun étudiant dans la classe.\n");
        return;
    }

    printf("Liste des étudiants de la classe %s :\n", classe->nomClasse);
    for (int i = 0; i < classe->nombreEtudiants; i++) {
        printf("ID: %d | Nom: %s | Âge: %d\n", 
               classe->etudiants[i].id, 
               classe->etudiants[i].nom, 
               classe->etudiants[i].age);
    }
}


void rechercherEtudiant(Classe *classe) {
    int id;
    printf("Entrez l'ID de l'étudiant à rechercher : ");
    scanf("%d", &id);

    for (int i = 0; i < classe->nombreEtudiants; i++) {
        if (classe->etudiants[i].id == id) {
            printf("Étudiant trouvé : ID: %d | Nom: %s | Âge: %d\n", 
                   classe->etudiants[i].id, 
                   classe->etudiants[i].nom, 
                   classe->etudiants[i].age);
            return;
        }
    }
    printf("Aucun étudiant avec cet ID.\n");
}


void supprimerEtudiant(Classe *classe) {
    int id;
    printf("Entrez l'ID de l'étudiant à supprimer : ");
    scanf("%d", &id);

    for (int i = 0; i < classe->nombreEtudiants; i++) {
        if (classe->etudiants[i].id == id) {

            for (int j = i; j < classe->nombreEtudiants - 1; j++) {
                classe->etudiants[j] = classe->etudiants[j + 1];
            }
            classe->nombreEtudiants--;
            printf("Étudiant supprimé avec succès.\n");
            return;
        }
    }
    printf("Aucun étudiant avec cet ID.\n");
}


void supprimerTousLesEtudiants(Classe *classe) {
    classe->nombreEtudiants = 0;
    printf("Tous les étudiants ont été supprimés.\n");
}


int main() {
    Classe classe;
    strcpy(classe.nomClasse, "Classe A");
    classe.nombreEtudiants = 0;

    int choix;

    do {
        printf("\n--- MENU ---\n");
        printf("1. Ajouter un étudiant\n");
        printf("2. Afficher tous les étudiants\n");
        printf("3. Rechercher un étudiant\n");
        printf("4. Supprimer un étudiant\n");
        printf("5. Supprimer tous les étudiants\n");
        printf("6. Quitter\n");
        printf("Votre choix : ");
        scanf("%d", &choix);

        switch (choix) {
            case 1: ajouterEtudiant(&classe); break;
            case 2: afficherEtudiants(&classe); break;
            case 3: rechercherEtudiant(&classe); break;
            case 4: supprimerEtudiant(&classe); break;
            case 5: supprimerTousLesEtudiants(&classe); break;
            case 6: printf("Au revoir !\n"); break;
            default: printf("Choix invalide.\n");
        }
    } while (choix != 6);

    return 0;
}
