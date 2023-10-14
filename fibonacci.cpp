#include<iostream>

// Suite de Fibonacci récursive
int fibonaci(int n) {
    if(n == 0)
        return 0;
    else if(n == 1)
        return 1;
    else
        return (fibonaci(n-1) + fibonaci(n-2));
}

int main() {
    int n;
    char continuer;

    std::cout << "=== Calculateur de suite de Fibonacci ===\n\n";

    do {
        std::cout << "Saisissez un nombre positif pour obtenir sa valeur dans la suite de Fibonacci: ";
        
        // S'assurer que l'entrée est un nombre valide
        while(!(std::cin >> n) || n < 0) {
            std::cin.clear();
            //std::cin.ignore(std::numeric_limits<std::streamsize>::max(), '\n');
            std::cout << "Entrée invalide. Saisissez un nombre positif: ";
        }

        std::cout << "\nLa valeur de Fibonacci de " << n << " est: " << fibonaci(n) << "\n\n";
        
        // Proposer de vérifier un autre nombre
        std::cout << "Souhaitez-vous vérifier un autre nombre ? (y/n): ";
        std::cin >> continuer;
        std::cout << "\n";
    } while(continuer == 'y' || continuer == 'Y');

    std::cout << "Merci d'avoir utilisé le calculateur de Fibonacci! À bientôt!\n";

    return 0;
}
