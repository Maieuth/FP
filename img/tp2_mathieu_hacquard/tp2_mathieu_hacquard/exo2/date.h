#ifndef DATE_H
#define DATE_H

typedef struct {
    int jour;
    int mois;
    int annee;
} DATE;

void lireDate(DATE*);
void afficherDate(DATE*);
int comparerDates(DATE*, DATE*);

#endif
