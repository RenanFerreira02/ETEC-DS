
package aula.pkg04;
import java.util.Scanner;

public class Aula04 {

    public static void main(String[] args) {
        Scanner s = new Scanner(System.in);
        
        System.out.println("Digite um valor: ");
        int n1 = s.nextInt();
        
        System.out.println("Digite outro valor: ");
        int n2 = s.nextInt();
        
        int n3 = n1 + n2; 
        
        System.out.println("O resultado é igual à: " + n3);
    }
    
}
