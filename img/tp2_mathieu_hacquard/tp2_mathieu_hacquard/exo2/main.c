#include <stdio.h>
#include "Date.h"

int main() {
    DATE d1, d2;
    
    printf("Saisie de la première date :\n");
    lireDate(&d1);

    printf("Saisie de la deuxième date :\n");
    lireDate(&d2);

    printf("\nPremière date : ");
    afficherDate(&d1);

    printf("Deuxième date : ");
    afficherDate(&d2);

    int cmp = comparerDates(&d1, &d2);
    if (cmp == 0)
        printf("Les deux dates sont identiques.\n");
    else if (cmp < 0)
        printf("La première date est antérieure à la deuxième.\n");
    else
        printf("La première date est postérieure à la deuxième.\n");

    return 0;
}
