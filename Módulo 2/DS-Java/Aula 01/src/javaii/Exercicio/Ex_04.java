package javaii.Exercicio;
import java.util.Scanner;

public class Ex_04 {
    public static void main(String[] args){
        Scanner conta = new Scanner(System.in);
        
        System.out.printf("Insira um valor: ");
        double n1 = conta.nextDouble();
        

        double div = (n1 * 17) / 100;
        double desconto = n1 - div;
        double lucro = n1 + div;
        
        
        
        System.out.println("\n17% do valor digitado é: " + div);
        
        System.out.println("\nO valor do desconto é: " + desconto);
        
        System.out.println("\n17% de lucro é: " + lucro);
        // Isso aqui é um comentário
    }
}