
package aula03;

import java.util.Scanner;

public class SomaScanner {
    public static void main (String[] args) {
        Scanner x = new Scanner(System.in);
        
        System.out.println("Digite o primeiro valor: ");
        int num1 = x.nextInt();
        
        System.out.println("Digite o segundo valor: ");
        int num2 = x.nextInt();
        
        int res = num1 + num2;
        
        System.out.println("O resultado da soma é: " + res);
    }
}
