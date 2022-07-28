package javaii.Exercicio;
import java.util.Scanner;

public class Ex_03 {
    public static void main(String[] args){
        Scanner conta = new Scanner(System.in);
        
        System.out.printf("Insira o primeiro valor: ");
        
        int n1 = conta.nextInt();
        
        System.out.printf("Insira o segundo valor: ");
        int n2 = conta.nextInt();
        
        int resultado;
        resultado = n1 + n2;
        
        System.out.println("\nO resultado da soma é: " + resultado);
        // Isso aqui é um comentário
    }
}
