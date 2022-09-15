package loop_para;

public class loop_para {

    public static void main(String[] args) {

        int i, soma_par, soma_impar;

        soma_par = 0;
        soma_impar = 0;

        for (i = 0; i <= 100; i++) {

            if (i % 2 == 0) {
                System.out.println(i + " Par");
                soma_par = soma_par + i;

            } else {
                System.out.println(i + " Ímpar");
                soma_impar = soma_impar + i;
            }

        }

        System.out.println("");
        System.out.println("Total par: " + soma_par);
        System.out.println("");

        System.out.println("");
        System.out.println("Total ímpar: " + soma_impar);
        System.out.println("");

        // Comparar os valores totais e imprimir qual que é o maior
        if (soma_par > soma_impar) {
            System.out.println("O Total par é maior que o total de ímpar");
        } else {
            System.out.println("O Total ímpar é maior que o total de par");
        }
    }
}
