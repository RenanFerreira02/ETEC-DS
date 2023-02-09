package javaii.Exercicio;
import java.util.Scanner;
import java.lang.Math;

public class Bhaskara {
    public static void main(String[] args){
        Scanner conta = new Scanner(System.in);
        
        System.out.printf("Insira o valor de A: ");
        int A = conta.nextInt();
        
        
        System.out.printf("Insira o valor de B: ");
        int B = conta.nextInt();
        
        System.out.printf("Insira o valor de C: ");
        int C = conta.nextInt();
        
        
        int delta = ((B*B) - 4 * A * C);
        
        
        double x = ((-B) + Math.sqrt(delta)) / (2 * A);
        
        System.out.println(delta);
        
        System.out.println("\n" + x);
        }       
}        