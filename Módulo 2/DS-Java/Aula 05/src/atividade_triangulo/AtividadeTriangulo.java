package atividade.triangulo;

import java.util.Scanner;

public class AtividadeTriangulo {

    public static void main(String[] args) {

        Scanner entrada = new Scanner(System.in);
        int A, B, C;

        System.out.println("Verificador de Triângulo\n\n");

        do {
            System.out.print("\nDigite o lado A=");
            A = entrada.nextInt();
        } while (A <= 0);

        do {
            System.out.print("\nDigite o lado B=");
            B = entrada.nextInt();
        } while (B <= 0);

        do {
            System.out.print("\nDigite o lado C=");
            C = entrada.nextInt();
        } while (C <= 0);

        if (A <= B + C && B <= A + C && C <= A + B) {
            if (A == B && B == C) {
                System.out.print("\nO triângulo é Eqüilátero.");
            } else if (A == B || A == C || B == C) {
                System.out.print("\nO triângulo é Isósceles.");
            } else {
                System.out.print("\nO triângulo é Escaleno.");
            }
        } else {
            System.out.print("\nOs lados fornecidos não caracterizam um triângulo");
        }
    }
}
