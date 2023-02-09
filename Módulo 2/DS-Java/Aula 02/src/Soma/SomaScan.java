
package Soma;

import java.util.Scanner;

public class SomaScan {
    public static void main(String[] args){
        
        Scanner num = new Scanner(System.in);
        
        int a, b, res;
        
        System.out.println("Digite o primeiro número: ");
        a = num.nextInt();
        
        System.out.println("Digite o segundo número: ");
        b = num.nextInt();
        
        res = a + b;
        
        System.out.println("O resultado da soma é: " + res);
        
        
    }
    
}
