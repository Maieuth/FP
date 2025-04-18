#include <stdio.h>
#include "Date.h"

void lireDate(DATE* d) {
    printf("Entrez la date (jour mois annee) : ");
    scanf("%d %d %d", &d->jour, &d->mois, &d->annee);
}

void afficherDate(DATE* d) {
    printf("%02d/%02d/%04d\n", d->jour, d->mois, d->annee);
}

int comparerDates(DATE* d1, DATE* d2) {
    if (d1->annee < d2->annee) return -1;
    if (d1->annee > d2->annee) return 1;
    
    if (d1->mois < d2->mois) return -1;
    if (d1->mois > d2->mois) return 1;
    
    if (d1->jour < d2->jour) return -1;
    if (d1->jour > d2->jour) return 1;

    return 0;
}
